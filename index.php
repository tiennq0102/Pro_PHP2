<?php
require_once './commons/helpers.php';
require_once './vendor/autoload.php';
require_once './commons/utils.php';
require_once './commons/route.php'; //phải require sau file autoload
session_start();

$url = isset($_GET['url']) ? $_GET['url'] : "/";
definedRoute($url);




// $url mong muốn của người gửi request
// switch ($url) {
//     case 'login':
//         $crt = new LoginController();
//         $crt-> loginForm();
//         break;
//     case 'xac-minh-login':
//         $ctr = new LoginController();
//         $ctr-> verifyLogin();
//         break;
//     case 'dang-ky':
//         $ctr = new LoginController();
//         $ctr->registerForm();
//         break;
//     case 'tao-tai-khoan':
//         $ctr = new LoginController();
//         $ctr->createAccount();
//         break;
//     case 'dashboard':
//         $ctr = new DashboardController();
//         $ctr->index();
//         break;
//     case 'logout':
//         $crt = new LoginController();
//         $crt-> logout();
//     //=============ADMIN=============//
//     //-------Subject--------
//     case 'mon-hoc':
//         $ctr = new SubjectController();
//         $ctr->index();
//         break;
//     case 'mon-hoc/tao-moi':
//         $ctr = new SubjectController();
//         $ctr->addForm();
//         break;
//     case 'mon-hoc/luu-tao-moi':
//         $ctr = new SubjectController();
//         $ctr->saveAdd();
//         break;
//     case 'mon-hoc/cap-nhat':
//         $ctr = new SubjectController();
//         $ctr->editForm();
//         break;
//     case 'mon-hoc/luu-cap-nhat':
//         $ctr = new SubjectController();
//         $ctr->saveEdit();
//         break;
//     case 'mon-hoc/xoa':
//         $ctr = new SubjectController();
//         $ctr->remove();
//         break;
//     //-------Quiz-------------------------------------------------------
//     case 'quiz':
//         $ctr = new QuizController();
//         $ctr -> index();
//         break;
//     case 'quizId':
//         $ctr = new QuizController();
//         $ctr -> index_WhereId();
//         break;
//     case 'quiz/tao-moi':
//         $ctr = new QuizController();
//         $ctr->addForm();
//         break;
//     case 'quiz/luu-tao-moi':
//         $ctr = new QuizController();
//         $ctr->saveAdd();
//         break;
//     case 'quiz/cap-nhat':
//         $ctr = new QuizController();
//         $ctr->editForm();
//         break;
//     case 'quiz/luu-cap-nhat':
//         $ctr = new QuizController();
//         $ctr->saveEdit();
//         break;
//     case 'quiz/xoa':
//         $ctr = new QuizController();
//         $ctr->remove();
//         break;
//     
//     //------Question------
//     case 'question':
//         $ctr = new QuestionController();
//         $ctr -> index();
//         break;
//     case 'questionId':
//         $ctr = new QuestionController();
//         $ctr -> index_WhereId();
//         break;
//     case 'question/tao-moi':
//         $ctr = new QuestionController();
//         $ctr->addForm();
//         break;
//     case 'question/luu-tao-moi':
//         $ctr = new QuestionController();
//         $ctr->saveAdd();
//         break;
//     case 'question/cap-nhat':
//         $ctr = new QuestionController();
//         $ctr->editForm();
//         break;
//     case 'question/luu-cap-nhat':
//         $ctr = new QuestionController();
//         $ctr->saveEdit();
//         break;
//     case 'question/xoa':
//         $ctr = new QuestionController();
//         $ctr->remove();
//         break;
// //------Answers------
//     case 'answerId':
//         $ctr = new AnswerController();
//         $ctr -> index_WhereId();
//         break;
//     case 'answer/tao-moi':
//         $ctr = new AnswerController();
//         $ctr->addForm();
//         break;
//     case 'answer/luu-tao-moi':
//         $ctr = new AnswerController();
//         $ctr->saveAdd();
//         break;
//     case 'answer/cap-nhat':
//         $ctr = new AnswerController();
//         $ctr->editForm();
//         break;
//     case 'answer/luu-cap-nhat':
//         $ctr = new AnswerController();
//         $ctr->saveEdit();
//         break;
//     case 'answer/xoa':
//         $ctr = new AnswerController();
//         $ctr->remove();
//         break;
//     //------Result------
//     case 'result_quiz':
//         $ctr = new StudentQuiz();
//         $ctr->result_quiz();
//         break;

//     //=============USER=============//
//     case 'dashboard-user':
//         $ctr = new DashboardController();
//         $ctr->index_user();
//         break;
//     case 'mon-hoc-user':
//         $ctr = new SubjectController();
//         $ctr->index_user();
//         break;
//     case 'quiz-user':
//         $ctr = new QuizController();
//         $ctr -> index_user();
//         break;
//     case 'question-user':
//         $ctr = new QuestionController();
//         $ctr -> index_user();
//         break;



//     case 'check_answer':
//         $ctr = new AnswerController();
//         $ctr -> check_answer();
//         break;
//     case 'save_result_test':
//         $ctr = new AnswerController();
//         $ctr -> save_result_test();
//         break;
//     case 'history':
//         $ctr = new StudentQuiz();
//         $ctr->result_quiz_user();
//         break;
//     default:
//         // echo "Đường dẫn bạn đang truy cập chưa được cho phép";
//         header('location: ' . BASE_URL . 'login');
//         break;
// }


?>