@extends('layouts.main2')
@section('main-content')
<main>
<div class="container-fluid px-4">
    @section('title_page')
        <h1 class="m-0">List quiz</h1>
    @endsection
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            List quiz
        </div>
        <div class="card-body">
        <div>
            <a class="btn btn-primary mb-3" href="{{BASE_URL . 'quiz/tao-moi'}}">Tạo mới quiz</a>
        </div>
            <table id="datatablesSimple"> 
                <thead>
                <thead>
                    <th>Mã quiz</th>
                    <th>Tên quiz</th>
                    <th>Tên chủ đề</th>
                    <th>Thời gian</th>
                    <th>start time</th>
                    <th>end time</th>
                    <th>status</th>
                    <th>is_shuffle</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($quizs as $quiz)
                        <tr>
                            <td>{{$quiz->id }}</td>
                            <td>
                                <a href="{{BASE_URL . 'question_QuizId' . $quiz->id}}">{{$quiz->name}}</a>
                            </td>
                            <td>{{$quiz->subject()->name }}</td>
                            <td>{{$quiz->duration_minutes }} Phút</td>
                            <td>{{$quiz->start_time }}</td>
                            <td>{{$quiz->end_time }}</td>
                            <td>{{$quiz->status }}</td>
                            <td>{{$quiz->is_shuffle }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{BASE_URL . 'quiz/cap-nhat_Qid' . $quiz->id }}">Sửa</a>
                                <a class="btn btn-danger btn-sm" href="{{BASE_URL . 'quiz/xoa_Qid' . $quiz->id }}">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>
@endsection
        