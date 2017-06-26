<?php

namespace app\Model;

class AdminModel {
    private static $admin = 'admin';
    private static $password = '1234';

    public static function validate($l, $p) {
        if($l === self::$admin && $p === self::$password) {
            return 'Hello, admin!';
        } elseif ($l === null || $p === null) {
            return 'Log in, please';
        }
        else return 'Wrong login or password';
    }
    public function renderForm() {
       require '\..\View\loginForm.html.php';
    }
}