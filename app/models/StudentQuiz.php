<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quiz;
use App\Models\Subject;
class StudentQuiz extends Model{
    public $timestamps = false;
    protected $table = 'student_quizs';
    protected $fillable = ['student_id','quiz_id','start_time','end_time','score'];

    public function result_quiz() {
        $result = StudentQuiz::all();
        // include_once "./app/views/admin/result/index.php";
        return view('admin.result.index',[
            'result'=>$result
        ]);
    }
    public function quiz(){
        $quiz = Quiz::where('id', $this->quiz_id)->first();
        if($quiz){
            return $quiz;
        }
        return null;
    }
    public function subject(){
        $subject = Subject::where('id', $this->subject_id)->first();
        if($subject){
            return $subject;
        }
        return null;
    }
    public function user(){
        $user = User::where('id', $this->student_id)->first();
        if($user){
            return $user;
        }
        return null;
    }
    public function result_quiz_user() {
        $resultStudentQuiz = StudentQuiz::where('student_id',$_SESSION['user']->id)->get();//lấy thông tin studentQuiz
        // include_once "./app/views/user/history_quiz/index.php";
        // echo '<pre>';
        // var_dump($resultStudentQuiz[0]->quiz_id);
        $Qid = $resultStudentQuiz[0]->quiz_id;
        $getResultQ = Quiz::find($Qid);//để lấy name quiz
        // var_dump($getResultQ->subject_id);die;
        $Sid = $getResultQ->subject_id;
        $getResultS = Subject::find($Sid);//để lấy name subject
        // var_dump($getResultS->name);die;
        return view('user.history_quiz.index',[
            'resultStudentQuiz'=>$resultStudentQuiz,
            'getResultQ'=>$getResultQ,
            'getResultS'=>$getResultS
        ]);
    }
 

    // ================
    public function save_result_test($Sid){
        StudentQuiz::create([
            'student_id'=>$_POST['student_id'],
            'quiz_id'=>$_POST['quiz_id'],
            'start_time'=>$_POST['start_time'],
            'end_time'=>$_POST['end_time'],
            'score'=>$_POST['score']
        ]);
        // $model = new StudentQuiz();
        // $data = [//$data tượng trưng cho dữ liệu dc gửi lên
        //     'student_id' => $_POST['student_id'], //gán $_POST['nameQuiz'] cho phần tử 'name' trong mảng $data.
        //     'quiz_id' => $_POST['quiz_id'],
        //     'score' => $_POST['score'],
        //     'start_time' => $_POST['start_time'],
        //     'end_time' => $_POST['end_time'],
        // ];

        // echo '<pre>';
        // var_dump($data);die;
        // var_dump($model);die;
        // $model->insert($data);
        // var_dump($model->insert($data));
        // var_dump($_POST);die;

        header('location: ' . BASE_URL .'quiz-user_Sid'.$Sid);
        die;
    }
}
?>