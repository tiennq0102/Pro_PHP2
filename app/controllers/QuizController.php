<?php
namespace App\Controllers;

use App\Models\Quiz;
use App\Models\Subject;

class QuizController{
    public function index(){
        $quizs = Quiz::all();
        // $quizsJoin = Subject::join();
        // $quizs = Quiz::where(['subject_id','=',$_GET['subjectId']])->get();
        // echo '<pre>';
        // var_dump($quizsJoin);die;
        return view('admin.quiz.index', [
            'quizs' => $quizs
        ]);
        // include_once "./app/views/admin/quiz/index.php";
    }
    public function index_WhereId($id){
        $quizs = Quiz::where('subject_id',$id)->get();//trả ra 1 mảng
        // $quizs = Quiz::find($id);//trả ra 1 object
        // echo '<pre>';
        // var_dump($quizs);
        return view('admin.quiz.index', [
            'quizs' => $quizs
        ]);
        // include_once "./app/views/admin/quiz/index.php";
    }
    public function addForm(){
        $allSubject = Subject::all();
        // var_dump($allSubject);
        return view('admin.quiz.add-form',[
            'allSubject'=> $allSubject
        ]);
    }
    public function saveAdd(){
        Quiz::create([
            'name'=>$_POST['name'],
            'subject_id'=>$_POST['subjectId'],
            'duration_minutes'=>$_POST['duration_minutes']
        ]);
        // $model = new Quiz();// $model <=> 1 object của class Subject
        // $data = [//$data tượng trưng cho dữ liệu dc gửi lên
        //     'name' => $_POST['nameQuiz'], //gán $_POST['nameQuiz'] cho phần tử 'name' trong mảng $data.
        //     'subject_id' => $_POST['subjectId'],
        //     'duration_minutes' => $_POST['duration_minutes']
        // ];
        // $model->insert($data);
        header('location: ' . BASE_URL . 'quizId_Sid'.$_POST['subjectId']);
        die;
    }
    public function editForm($id){
        $allSubject = Subject::all();
        //tại editform
        // $id = $_GET['id'];
        $model = Quiz::where('id', $id)->first();// lấy ra môn học kèm id, hàm first() trả về 1 object là môn học tương ứng
        if(!$model){
            header('location: ' . BASE_URL . 'quiz');
            die;
        }
        //nếu $model(sql) hợp lệ thì thực hiện chuyển đến edit-form để lưu lại thông tin
        return view('admin.quiz.edit-form',[
            'allSubject'=>$allSubject,
            'model'=>$model
        ]);
    }
    public function saveEdit($id){
        $model = Quiz::find($id);
        $model->name = $_POST['name'];
        $model->subject_id = $_POST['subject_id'];
        $model->duration_minutes = $_POST['duration_minutes'];
        // $model = Quiz::where('id', $id)->first();
        // if(!$model){
        //     header('location: ' . BASE_URL . 'quiz');
        //     die;
        // }
        // $data = [//$data tượng trưng cho dữ liệu dc gửi lên
        //     'name' => $_POST['nameQuiz'], //gán $_POST['nameQuiz'] cho phần tử 'name' trong mảng $data.
        //     'subject_id' => $_POST['subjectId'],
        //     'duration_minutes' => $_POST['duration_minutes']
        // ];
        // $model->update($data);
        $model->save();
        header('location: ' . BASE_URL . 'quizId_Sid'.$model->subject_id);
        die;
    }
    public function remove($id){
        // $id = $_GET['id'];
        $model = Quiz::where('id', $id)->first();
        Quiz::destroy($id);
        header('location: ' . BASE_URL . 'quizId_Sid'.$model->subject_id);
        die;
    }

    public function index_user($id){
        $quizs = Quiz::where('subject_id',$id)->get();
        // echo '<pre>';
        // var_dump($quizs);die;
        // include_once "./app/views/user/quiz/index.php";
        return view('user.quiz.index',[
            'quizs'=>$quizs
        ]);
    }


}
?>