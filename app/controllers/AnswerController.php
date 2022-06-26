<?php
namespace App\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\StudentQuiz;
use App\Models\Subject;

class AnswerController{
    public function index_WhereId($Qid){
        $answers = Answer::where('question_id',$Qid)->get();
        // echo $Qid;die;
        // include_once "./app/views/admin/answer/index.php";
        return view('admin.answer.index',[
            'answers'=>$answers,
            'Qid'=>$Qid
        ]);
    }
    public function addForm($Qid){
        // include_once "./app/views/admin/answer/add-form.php";
        return view('admin.answer.add-form',[
            'Qid'=>$Qid
        ]);
    }
    public function saveAdd(){
        // var_dump($_POST);die;
        // $model = new Answer();// $model <=> 1 object của class Subject
        $img = $_FILES['img']['name'];
        $target_dir = "./app/views/upload/";
        $target_file = $target_dir . basename($_FILES['img']['name']);
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        // $data = [//$data tượng trưng cho dữ liệu dc gửi lên
        //     'content' => $_POST['noidung'], //gán $_POST['nameQuiz'] cho phần tử 'name' trong mảng $data.
        //     'question_id' => $_POST['id_question'],
        //     'is_correct' => $_POST['is_correct'],
        //     'img' => $img
        // ];
        // echo '<pre>';
        // var_dump($data);
        // $model->insert($data);
        Answer::create([
            'content' => $_POST['content'], //gán $_POST['nameQuiz'] cho phần tử 'name' trong mảng $data.
            'question_id' => $_POST['question_id'],
            'is_correct' => $_POST['is_correct'],
            'img' => $img
        ]);
        // var_dump($_POST);die;
        header('location: ' . BASE_URL . 'answer_QuesId'. $_POST['question_id']);
        die;
    }
    public function editForm($Qid){
        $allQuiz = Quiz::all();//để chọn dc question thuộc quiz nào
        // tại editform
        // $id = $_GET['id'];
        $model = Answer::where('id', $Qid)->first();// lấy ra môn học kèm id, hàm first() trả về 1 object là môn học tương ứng
        if(!$model){
            header('location: ' . BASE_URL . 'answer');
            die;
        }
        //nếu $model(sql) hợp lệ thì thực hiện chuyển đến edit-form để lưu lại thông tin
        // include_once "./app/views/admin/answer/edit-form.php";
        return view('admin.answer.edit-form',[
            'allQuiz'=>$allQuiz,
            'model'=>$model
        ]);
    }
    public function saveEdit($Qid){
        // $id = $_GET['id'];
        // $model = Answer::where(['id', '=', $Qid])->first();

        // // var_dump($model);die;
        // if(!$model){
        //     header('location: ' . BASE_URL . 'question');
        //     die;
        // }
        // $data = [//$data tượng trưng cho dữ liệu dc gửi lên
        //     'content' => $_POST['noidung'], //gán $_POST['nameQuiz'] cho phần tử 'name' trong mảng $data.
        //     'question_id' => $_POST['id_question'],
        //     'is_correct' => $_POST['is_correct'],
        //     'img' => $img
        // ];

        // $model->update($data);

        $model = Answer::find($Qid);
        $model->content = $_POST['content'];
        $model->question_id = $_POST['question_id'];
        $model->is_correct = $_POST['is_correct'];
       
        echo "<pre>";
        // var_dump($img);die;
        $model->save();
        header('location: ' . BASE_URL . 'answer_QuesId'.$model->question_id);
        die;
    }
    public function remove($Aid){
        // $id = $_GET['id'];
        $model = Answer::where('id',  $Aid)->first();
        Answer::destroy($Aid);
        header('location: ' . BASE_URL . 'answer_QuesId'.$model->question_id);
        die;
    }

    //-----PHÍA USER-----
    public function check_answer($Qid) {
        // include_once './app/views/user/question/result-test.php';
        // echo '<pre>';
        $inforQuiz = Quiz::where('id',$Qid)->get();
        // var_dump($inforQuiz[0]->subject_id);die;
        
        return view('user.result.result-test',[
            'Qid'=>$Qid,
            'inforQuiz'=>$inforQuiz
        ]);
    }
    
}

?>