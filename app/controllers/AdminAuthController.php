<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\Customer;
use App\Address;
use App\User;
use Illuminate\Database\Capsule\Manager as DB;

new Database;
class AdminAuthController
{

    public function indexLogin()
    {
        Blade::render('auth/login');
    }

    public function indexRegister()
    {
        Blade::render('auth/register');
    }

    public function login()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "" || $password === "") {
            echo "<script>alert('Missing!'); window.location = '/login';</script>";
        } else {

            $user = DB::table("users")
                ->where(['username' => $username, 'password' => md5($password)])
                ->get();

            if (count($user) !== 0) {
                $_SESSION['username'] = $user[0]->username;
                if ($user[0]->permission === "user") {
                    echo "<script>alert('Login success!'); window.location = '/admin/users';</script>";
                }
            } else {
                echo "<script>alert('Wrong username/password!'); window.location = '/login';</script>";
            }
        }
    }

    public function register()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];

        if ($username === "" || $password === "" || $repassword === "") {
            echo "<script>alert('Missing!'); window.location = '/register';</script>";
        } else {

            if ($password === $repassword) {
                $getOldUser = DB::table("users")
                    ->where('username', $username)
                    ->get("username");

                if (count($getOldUser) === 0) {

                    $user = new User();
                    $user->username = $username;
                    $user->password = md5($password);
                    $user->permission = "user";

                    $user->save();

                    header('Location: /login');
                } else {
                    echo "<script>alert('Duplicate username!'); window.location = '/register';</script>";
                }
            } else {
                echo "<script>alert('Password don\'t match!'); window.location = '/register';</script>";
            }
        }
    }
}
