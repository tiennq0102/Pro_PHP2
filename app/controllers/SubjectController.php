<?php
namespace App\Controllers;

use App\Models\Subject;

class SubjectController{
    public function index(){
        $subjects = Subject::all();
        return view('admin.mon-hoc.index', [
            'subjects' => $subjects
        ]);
    }

    public function addForm(){
        return view('admin.mon-hoc.add-form');
        // include_once "./app/views/admin/mon-hoc/add-form.php";
    }
    public function saveAdd(){
        Subject::create([
            'name'=>$_POST['name']
        ]);
        // $model = new Subject();// $model <=> 1 object của class Subject
        // $data = [//$data tượng trưng cho dữ liệu dc gửi lên
        //     'name' => $_POST['name'] //gán $_POST['name'] cho phần tử 'name' trong mảng $data.
        // ];
        // $model->insert($data);
        // var_dump($model);die;
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }
    public function editForm($id){
        $model = Subject::find($id);
        // echo "<pre>";
        // var_dump($model->name);die;
        // $model = Subject::where('id', $id)->first();// lấy ra môn học kèm id, hàm first() trả về 1 object là môn học tương ứng
        // if(!$model){
        //     header('location: ' . BASE_URL . 'mon-hoc');
        //     die;
        // }
        //nếu $model(sql) hợp lệ thì thực hiện chuyển đến edit-form để lưu lại thông tin
        // include_once "./app/views/admin/mon-hoc/edit-form.php";
        return view('admin.mon-hoc.edit-form',['model'=>$model]);
    }

    public function saveEdit($id){
        $model = Subject::find($id);
        $model->name = $_POST['name'];
        $model->save();
    // $model = Subject::where('id', $id)->first();
        // if(!$model){
        //     header('location: ' . BASE_URL . 'mon-hoc');
        //     die;
        // }

        // $data = [
        //     'name' => $_POST['name']
        // ];

        // $model->update($data);
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }

    public function remove($id){
        // $id = $_GET['id'];
        Subject::destroy($id);
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }
/*-----USER----- */
    public function index_user(){
        $subjects = Subject::all();

        return view('user.mon-hoc.index',[
            'subjects' => $subjects
        ]);
        // include_once "./app/views/user/mon-hoc/index.php";
    }
}
?>