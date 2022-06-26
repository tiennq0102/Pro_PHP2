<?php
namespace App\Controllers;

use App\Models\Quiz;
use App\Models\Answer;
use App\Models\Question;

class QuestionController{
    //Lấy toàn bộ question
    public function index(){
        $questions = Question::all();    
        // include_once "./app/views/admin/question/index.php";
        return view('admin.question.index',[
            'questions'=>$questions
        ]);
    }
    //Lấy question theo quiz_id
    public function index_WhereId($id){
        $questions = Question::where('quiz_id',$id)->get();
        // include_once "./app/views/admin/question/index.php";
        return view('admin.question.index',[
            'questions'=>$questions
        ]);
    }
    public function addForm(){
        $allQuiz = Quiz::all();
        // var_dump($allSubject);
        return view('admin.question.add-form',[
            'allQuiz'=>$allQuiz
        ]);
    }
    public function saveAdd(){
        // $model = new Question();// $model <=> 1 object của class Subject
        $img = $_FILES['img']['name'];
        $target_dir = "./app/views/upload/";
        $target_file = $target_dir . basename($_FILES['img']['name']);
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        // $data = [//$data tượng trưng cho dữ liệu dc gửi lên
        //     'name' => $_POST['noidung'], //gán $_POST['nameQuiz'] cho phần tử 'name' trong mảng $data.
        //     'quiz_id' => $_POST['quizId'],
        //     'img' => $img
        // ];
        // echo '<pre>';
        // // var_dump($data);
        // $model->insert($data);
        Question::create([
            'name' => $_POST['name'], //gán $_POST['nameQuiz'] cho phần tử 'name' trong mảng $data.
            'quiz_id' => $_POST['quiz_id'],
            'img' => $img
        ]);
        header('location: ' . BASE_URL . 'question_QuizId'. $_POST['quiz_id']);
        die;
    }
    public function editForm($id){
        $allQuiz = Quiz::all();//để chọn dc question thuộc quiz nào
        //tại editform
        // $id = $_GET['id'];
        $model = Question::where('id', $id)->first();// lấy ra môn học kèm id, hàm first() trả về 1 object là môn học tương ứng
        if(!$model){
            header('location: ' . BASE_URL . 'question');
            die;
        }
        //nếu $model(sql) hợp lệ thì thực hiện chuyển đến edit-form để lưu lại thông tin
        return view('admin.question.edit-form',[
            'allQuiz'=>$allQuiz,
            'model'=>$model
        ]);
    }
    public function saveEdit($id){
        
        $model = Question::find($id);
        $img = $_FILES['img']['name'];
        if($_FILES['img']['name'] == ""){
            $img = $model->img;
        }else{
            $img = $_FILES['img']['name'];
        }
        $target_dir = "./app/views/upload/";
        $target_file = $target_dir . basename($_FILES['img']['name']);
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        $model->name = $_POST['name'];
        $model->quiz_id = $_POST['quiz_id'];
        $model->img = $img;
        // $model = Question::where(['id', '=', $id])->first();
        // if(!$model){
        //     header('location: ' . BASE_URL . 'question');
        //     die;
        // }
        // $data = [//$data tượng trưng cho dữ liệu dc gửi lên
        //     'name' => $_POST['noidung'], //gán $_POST['nameQuiz'] cho phần tử 'name' trong mảng $data.
        //     'quiz_id' => $_POST['quizId'],
        //     'img' => $img
        // ];
        // $model->update($data);
        // var_dump($model->quiz_id);die;
        $model->save();
        header('location: ' . BASE_URL . 'question_QuizId'.$model->quiz_id);
        die;
    }
    public function remove($id){
        $model = Question::where('id', $id)->first();
        Question::destroy($id);
        header('location: ' . BASE_URL . 'question_QuizId'.$model->quiz_id);
        die;
    }

    //-----PHÍA USER------
    public function index_user($id){
        $quiz = Quiz::find($id);//trả ra 1object
        $questions = Question::where('quiz_id',$id)->get(); 

        // echo '<pre>';
        // var_dump($quiz->duration_minutes);die;
        

        // include_once "./app/views/user/question/index.php";
        return view('user.question.index',[
            'questions'=>$questions,
            'quiz' => $quiz,
            'quiztime' => $quiz->duration_minutes
        ]);
    }

}
?>