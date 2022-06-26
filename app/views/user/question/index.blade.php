<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asm1/app/views/user/css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- gg font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title></title>
</head>
<body>
    <div class="container">
        <header>
            <div class="header1">
                <a href="{{BASE_URL . 'dashboard-user' }}"><img src="../asm1/app/views/upload/logo.png" alt=""></a>
            </div>
            <div class="header2">
                <a class="btn btn-primary" href="{{ BASE_URL . 'login'}}">Đăng xuất</a>
                <a class="btn btn-primary" href="{{ BASE_URL . 'dang-ky'}}">Đăng ký</a>
            </div>
        </header>
        <hr>
        <main>
            <article class="">
                <form action="{{BASE_URL.'check_answer_QuizId'.$quiz->id}}" method="post" class="mx-3 my-1 rounded bg-light form1" id="form">   
                    <div class="content-form my-4">
                    @foreach ($questions as $question)
                            <div class="box_ques mx-4 my-1 ">
                                <div class="ques_text">
                                    <h5>Câu hỏi: {{ $question->name}}</h5>
                                </div>
                                    @php $hinhpath="./app/views/upload/".$question->img;
                                        if(is_file($hinhpath)){
                                            $img="<img src='".$hinhpath."' height='130px'>";
                                        }
                                        else{
                                            $img="No image!";
                                        }
                                   @endphp
                                <p style="width: 35%;">{!!$img!!}</p>
                            </div>
                            <div class="box_ans mx-4"> 
                                <!-- show answer -->
                                @foreach ($question->answers as $item)   {{-- Sử dụng hasMany của Model Question --}}
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="{{ $item->question_id}}" id="flexRadioDefault1" value="{{$item->is_correct }}">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{$item->content}}
                                        </label>
                                    </div>
                                @endforeach
                            </div> 
                        @endforeach
                        <input type="submit" value="Nộp bài" class="btn btn-primary mx-4 my-4" >
                    </div>
                   
                    <div class="time my-4">
                        <!-- <h2><input type="number" id="time" value="{{ $quiztime}}"></h2> -->
                        <h2 id="time">{{ $quiztime}}:00</h2>
                    </div>
                    <h2 id="demo"></h2>
                </form>
                
            </article>
            <aside class="">
                <div class="box_aside">
                    <h3>Xin chào {{$_SESSION['user']->name}}</h3>
                    <h5>Chào mừng đến với QuizQuiz</h5>
                </div>
                <div class="box_aside">
                    <h3>Chào mừng đến với Quiz Quiz</h3>
                    <a class="btn btn-primary" href="{{ BASE_URL . 'dang-ky'}}">Tạo tài khoản</a>
                </div>
                <div>
                    <a class="btn btn-light ms-3" style="width: 87%;"  href="{{BASE_URL . 'dashboard-user' }}">Về trang chủ</a>
                </div>
            </aside>
        </main>
    </div>
</body>
<script>
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        var event = setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10)

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;
            if (timer-- == 0) {
                clearInterval(event); 
                document.getElementById("form").submit();

            }
        }, 1000);
    }

    window.onload = function () {
        var fiveMinutes = 60 * {{$quiztime}};
        // var fiveMinutes = 1 * 5;
        display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
    };
</script>
</html>
