    <?php

use App\Controllers\DashboardController;
use App\Controllers\LoginController;
use App\Controllers\SubjectController;
use App\Controllers\QuizController;
use App\Controllers\QuestionController;
use App\Controllers\AnswerController;
use App\Models\StudentQuiz;
use Phroute\Phroute\RouteCollector;
    function definedRoute($url){
        $router = new RouteCollector();
        $router->get('test-layout',function(){
            return view("layouts.main2");
        });
        // $router->get('như tên của 1 case',[tên controller xử lý::class,'tên hàm']);
        //dùng method =any khi làm đường dẫn dùng get hoặc post đều dc
        //loginController
        $router->get('/',[LoginController::class,'loginForm']);
        $router->get('login',[LoginController::class,'loginForm']);
        $router->get('forgotPass',[LoginController::class,'ForgotPassForm']);
        $router->get('logout',[LoginController::class,'logout']);
        $router->post('xac-minh-login',[LoginController::class,'verifyLogin']);
        $router->get('dashboard-user',[DashboardController::class,'index_user']);
        $router->get('dashboard',[DashboardController::class,'index']);
        $router->get('dang-ky',[LoginController::class,'registerForm']);
        $router->post('tao-tai-khoan',[LoginController::class,'createAccount']);
        //SubjectController 
        $router->get('mon-hoc',[SubjectController::class,'index']);
        $router->get('mon-hoc-user',[SubjectController::class,'index_user']);
        $router->get('mon-hoc/tao-moi',[SubjectController::class,'addForm']);
        $router->post('mon-hoc/tao-moi',[SubjectController::class,'saveAdd']);
        $router->get('mon-hoc/cap-nhat_Sid{id}',[SubjectController::class,'editForm']);
        $router->post('mon-hoc/cap-nhat_Sid{id}',[SubjectController::class,'saveEdit']);
        $router->get('mon-hoc/xoa_Sid{id}',[SubjectController::class,'remove']);
        //QuizController 
        $router->get('quiz',[QuizController::class,'index']);
        $router->get('quiz-user_Sid{id}',[QuizController::class,'index_user']);
        $router->get('quizId_Sid{id}',[QuizController::class,'index_WhereId']);
        $router->get('quiz/tao-moi',[QuizController::class,'addForm']);
        $router->post('quiz/tao-moi',[QuizController::class,'saveAdd']);
        $router->get('quiz/cap-nhat_Qid{id}',[QuizController::class,'editForm']);
        $router->post('quiz/cap-nhat_Qid{id}',[QuizController::class,'saveEdit']);
        $router->get('quiz/xoa_Qid{id}',[QuizController::class,'remove']);
        //QuestionController 
        $router->get('question',[QuestionController::class,'index']);
        $router->get('question_QuizId{id}',[QuestionController::class,'index_WhereId']);
        $router->get('question/tao-moi',[QuestionController::class,'addForm']);
        $router->post('question/tao-moi',[QuestionController::class,'saveAdd']);
        $router->get('question/cap-nhat_QuesId{id}',[QuestionController::class,'editForm']);
        $router->post('question/cap-nhat_QuesId{id}',[QuestionController::class,'saveEdit']);
        $router->get('question/xoa_QuesId{id}',[QuestionController::class,'remove']);
        $router->get('question-user_QuizId{id}',[QuestionController::class,'index_user']);
        //AnswerController         
        $router->get('answer_QuesId{Qid}',[AnswerController::class,'index_WhereId']);
        $router->get('answer/tao-moi_Q{Qid}',[AnswerController::class,'addForm']);
        $router->post('answer/luu-tao-moi_Q',[AnswerController::class,'saveAdd']);
        $router->get('answer/cap-nhat_QuesId{Qid}',[AnswerController::class,'editForm']);
        $router->post('answer/luu-cap-nhat_QuesId{Qid}',[AnswerController::class,'saveEdit']);
        $router->get('answer/xoa_Ans{Aid}',[AnswerController::class,'remove']);
        $router->post('check_answer_QuizId{Qid}',[AnswerController::class,'check_answer']);
        $router->post('save_result_test_Sid{Sid}',[StudentQuiz::class,'save_result_test']);
        $router->get('history',[StudentQuiz::class,'result_quiz_user']);
        $router->get('result_quiz',[StudentQuiz::class,'result_quiz']);

        //filter
//nơi xử lý các tính năng trong phương thức của router
        $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
        // Print out the value returned from the dispatched function
        echo $response;
    }


?>