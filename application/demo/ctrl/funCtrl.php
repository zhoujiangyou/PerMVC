<?php
namespace application\demo\ctrl;
use \core\lib\controller;
class funCtrl extends controller{


    /**
     * @throws views login
     */
    public function login(){
        $this->display('login');
    }

    /**
     * @throws views register
     */
    public function register(){
        $this->display('register');
    }

    /**
     * @throws views toastr
     */
    public function toastr(){
        $this->display('toastr');
    }

    public function nestable(){
        $this->display('nestable');
    }
}