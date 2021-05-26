<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\Work;
use App\Education;
use App\User;
use Illuminate\Database\Capsule\Manager as DB;

new Database;
class InfoController
{

    public function index()
    {
        $username = $_SESSION["username"];
        if (isset($username)) {
            if ($username !== "") {

                $user = DB::table("users")
                    ->select(DB::raw('users.*, group_concat(education.name) as education, group_concat(work.name) as work'))
                    ->where('username', $username)
                    ->join("work", "work.userId", "=", "users.userId")
                    ->join("education", "education.userId", "=", "users.userId")
                    ->groupBy("users.userId")
                    ->get();

                $work = implode(", ", array_unique(explode(",", $user[0]->work)));
                $education = implode(", ", array_unique(explode(",", $user[0]->education)));

                $user[0]->work = $work;
                $user[0]->education = $education;

                Blade::render('user/info/index', compact('user'));
            } else {
                echo "<script>window.location = '/login';</script>";
            }
        } else {
            echo "<script>window.location = '/login';</script>";
        }
    }

    public function editSummary()
    {
        $username = $_SESSION["username"];
        $summary = $_POST["summary"];

        if (isset($username)) {
            if ($username !== '' || $summary !== '') {
                DB::table('users')
                    ->where('username', $username)
                    ->update([
                        'summary' => $summary,
                    ]);

                $_SESSION['success'] = "edit";
                header('Location: /info');
            } else {
                echo "<script>alert('Missing!'); window.location = '/info';</script>";
            }
        } else {
            echo "<script>window.location = '/login';</script>";
        }
    }

    public function editEducation()
    {
        $userId = $_POST["userId"];
        $education = $_POST["education"];

        if (isset($userId)) {
            if ($userId !== '' || $education !== '') {
                DB::table('education')
                    ->where('userId', $userId)
                    ->update([
                        'name' => $education,
                    ]);

                $_SESSION['success'] = "edit";
                header('Location: /info');
            } else {
                echo "<script>alert('Missing!'); window.location = '/info';</script>";
            }
        } else {
            echo "<script>window.location = '/login';</script>";
        }
    }

    public function editWork()
    {
        $userId = $_POST["userId"];
        $work = $_POST["work"];

        if (isset($userId)) {
            if ($userId !== '' || $work !== '') {
                DB::table('work')
                    ->where('userId', $userId)
                    ->update([
                        'name' => $work,
                    ]);

                $_SESSION['success'] = "edit";
                header('Location: /info');
            } else {
                echo "<script>alert('Missing!'); window.location = '/info';</script>";
            }
        } else {
            echo "<script>window.location = '/login';</script>";
        }
    }

    public function addEducation()
    {
        $username = $_SESSION["username"];
        $education = $_POST["education"];

        if (isset($username)) {
            if ($username !== '' || $education !== '') {

                $user = DB::table("users")
                    ->where('username', $username)
                    ->join("education", "education.userId", "=", "users.userId")
                    ->groupBy("users.userId")
                    ->get("users.userId");

                $edu = new Education();
                $edu->userId = $user[0]->userId;
                $edu->name = $education;

                $edu->save();

                $_SESSION['success'] = "add";
                header('Location: /info');
            } else {
                echo "<script>alert('Missing!'); window.location = '/info';</script>";
            }
        } else {
            echo "<script>window.location = '/login';</script>";
        }
    }

    public function addWork()
    {
        $username = $_SESSION["username"];
        $work = $_POST["work"];

        if (isset($username)) {
            if ($username !== '' || $work !== '') {

                $user = DB::table("users")
                    ->where('username', $username)
                    ->join("work", "work.userId", "=", "users.userId")
                    ->groupBy("users.userId")
                    ->get("users.userId");

                var_dump($user[0]->userId);

                $w = new Work();
                $w->userId = 11;
                $w->name = $work;

                $w->save();

                $_SESSION['success'] = "add";
                header('Location: /info');
            } else {
                echo "<script>alert('Missing!'); window.location = '/info';</script>";
            }
        } else {
            echo "<script>window.location = '/login';</script>";
        }
    }
}
