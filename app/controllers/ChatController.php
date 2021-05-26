<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\Customer;
use App\Address;
use App\Msg;
use Illuminate\Database\Capsule\Manager as DB;

new Database;
class ChatController
{

    public function index()
    {

        if (isset($_SESSION["username"])) {
            $fromUser = $_SESSION["username"];

            $bar = DB::table("messages")
                ->where(['fromUser' => $fromUser])
                ->get();

            $bar2 = DB::table("messages")
                ->where(['toUser' => $fromUser])
                ->get();

            $taskbar1 = [];
            foreach ($bar as $key => $value) {
                $taskbar1[$value->toUser] = $value->body;
            }

            $taskbar2 = [];
            foreach ($bar2 as $key => $value) {
                $taskbar2[$value->fromUser] = $value->body;
            }

            $taskbar = array_merge($taskbar1, $taskbar2);

            Blade::render('chat/index', compact('taskbar'));
        } else {
            echo "<script>window.location = '/login';</script>";
        }
    }

    public function sendMsg()
    {
        $body_msg = htmlentities($_POST["body_msg"]);
        $fromUser = $_POST["fromUser"];
        $toUser = $_POST["toUser"];
        $body_msg = trim($body_msg);

        if ($body_msg !== '' && $fromUser !== '' && $toUser !== '') {

            $msg = new Msg();
            $msg->body = $body_msg;
            $msg->fromUser = $fromUser;
            $msg->toUser = $toUser;

            $msg->save();
        }
    }

    public function getMsg()
    {

        $fromUser = $_POST["fromUser"];
        $toUser = $_POST["toUser"];

        if (isset($fromUser) && isset($toUser)) {
            if ($fromUser !== "" && $toUser !== "") {

                $mess = DB::table("messages")
                    ->where(['fromUser' => $fromUser, 'toUser' => $toUser])
                    ->get();

                $messReceive = DB::table("messages")
                    ->where(['toUser' => $fromUser, 'fromUser' => $toUser])
                    ->get();

                $toUserLength = $_POST["lChat"];
                $fromUserLength = $_POST["rChat"];

                $a = [];
                $a[] = $mess;
                $a[] = $messReceive;

                if ($toUserLength === 0 && $fromUserLength === 0) {
                    echo json_encode($a);
                } else {
                    if ((int)$toUserLength + (int)$fromUserLength !== count($mess)) {
                        echo json_encode($a);
                    } else {
                        echo json_encode("");
                    }
                }
            }
        } else {
            echo json_encode("");
        }
    }

    public function getSession()
    {
        echo json_encode($_SESSION);
    }

    public function sendToUser()
    {
        if (isset($_POST["toUser"])) {
            if ($_POST["toUser"] !== "") {
                $_SESSION['toUser'] = $_POST["toUser"];
            }
        }
    }

    public function searchUser()
    {
        $search = $_POST["search"];
        if (isset($search)) {
            $users = DB::table("users")
                ->where('username', 'like', '%' . $search . '%')
                ->where("username", "!=", $_SESSION["username"])
                ->get(["username", "userId"]);
            echo json_encode($users);
        }
    }

    public function addUser()
    {
        $newUser = $_POST["newUser"];

        if (isset($newUser)) {
            if ($newUser !== "") {

                $bar = DB::table("messages")
                    ->where(['fromUser' => $_SESSION["username"], 'toUser' => $newUser])
                    ->get();

                $bar2 = DB::table("messages")
                    ->where(['fromUser' => $_SESSION["username"], 'toUser' => $newUser])
                    ->get();

                $taskbar1 = [];
                foreach ($bar as $key => $value) {
                    $taskbar1[$value->toUser] = $value->body;
                }

                $taskbar2 = [];
                foreach ($bar2 as $key => $value) {
                    $taskbar2[$value->fromUser] = $value->body;
                }

                $taskbar = array_merge($taskbar1, $taskbar2);

                if (count($taskbar) === 0) {
                    $msg = new Msg();
                    $msg->body = "";
                    $msg->fromUser = $_SESSION["username"];
                    $msg->toUser = $newUser;

                    $msg->save();

                    $users1 = DB::table("messages")
                        ->where('fromUser', "=", $_SESSION["username"])
                        ->get();

                    $user1 = [];
                    foreach ($users1 as $key => $value) {
                        $user1[$value->toUser] = $value->body;
                    }

                    $users2 = DB::table("messages")
                        ->where('toUser', "=", $_SESSION["username"])
                        ->get();

                    $user2 = [];
                    foreach ($users2 as $key => $value) {
                        $user2[$value->fromUser] = $value->body;
                    }

                    $userMerge = array_merge($user1, $user2);

                    $_SESSION['toUser'] = $newUser;

                    echo json_encode($userMerge);

                } else {
                    echo json_encode("");
                }
            }
        }
    }
}
