<?php
namespace App\Controllers;
use App\Models\User;
class LoginController extends BaseController{
    
    public function registerForm(){
        // include_once './app/views/auth/register-form.php';
        return view('auth.register-form');
    }
    public function ForgotPassForm(){
        // include_once './app/views/auth/register-form.php';
        return view('auth.forgotPass');
    }
    public function createAccount(){
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ]; //$data coi chứa dữ liệu dc submit

        $model = new User();
        $model->insert($data);
        // var_dump($model);die;
        header('location: ' . BASE_URL . 'login');
        die;
    }
    public function loginForm(){
        // include_once './app/views/auth/login-form.php';
        return view('auth.login-form');
    }
    public function verifyLogin(){
        // echo '<pre>';
        // var_dump($_POST);


       if(!empty($_POST['email']) && !empty($_POST['password'] )){
            
            $dataCustomer = User::where('email', $_POST['email'])->get();
            // $dataCustomer = User::all();

            // var_dump($dataCustomer[0]->password);die;
            // var_dump($dataCustomer);die;
            if(password_verify($_POST['password'],$dataCustomer[0]->password)==true){
                $_SESSION['user'] = $dataCustomer[0];  
                // var_dump($_SESSION['user']);die;
                if($_SESSION['user']->role_id==1){
                    // var_dump($_SESSION['user']);die;
                    header("location:" . BASE_URL . "dashboard");
                }else{
                    header("location:" . BASE_URL . "dashboard-user");
                }
            }else{
                header('location: ' . $_SERVER['HTTP_REFERER']);die;//trở về trang login khi nhập sai
            }
       }else{
            header('location: ' . $_SERVER['HTTP_REFERER']);die;
       }
    }
    public function logout(){
        session_unset();
        // include_once './app/views/auth/login-form.php';
        return view('auth.login-form');
    }
}