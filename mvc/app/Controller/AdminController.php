<?php

namespace app\Controller;

use app\Model\AdminModel;

class AdminController extends AbstractController
{
    public function indexAction() {
        $message = $this->loginAction();
        return $message;

        //TODO: Переписать вход/выход из админки с помощью куки и сессий, доделать модель и вид
    }
    public function loginAction() {
        $adminModel = new AdminModel();
        $adminModel->renderForm();
    }
}
?>
