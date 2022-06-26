<?php
namespace App\Controllers;

use BaseModel;

class DashboardController extends BaseController{
    public function index(){
        // include "./app/views/admin/index.php";
        return view('admin.index');
    }
    public function index_user(){
        // include "./app/views/user/index.php";
        return view('user.index');
    }
}
?>