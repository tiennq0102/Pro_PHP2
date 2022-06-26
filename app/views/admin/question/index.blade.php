@extends('layouts.main2')
@section('main-content')
<main>
        <div class="container-fluid px-4">
            @section('title_page')
                <h1 class="m-0">List câu hỏi</h1>
            @endsection
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    List câu hỏi
                </div>
                <div class="card-body">
                    <div>
                        <a class="btn btn-primary mb-3" href="{{BASE_URL . 'question/tao-moi'}}">Tạo mới</a>
                    </div>
                    <table id="datatablesSimple"> 
                        <thead>
                            <th>Mã câu hỏi</th>
                            <th>Tên(nội dung)</th>
                            <th>Mã quiz</th>
                            <th>Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{$question->id }}</td>
                                    <td  style="width: 50%">
                                        <a href="{{BASE_URL.'answer_QuesId'.$question->id }}">{{$question->name}}</a>
                                    </td>
                                    <td>{{$question->quiz()->name }}</td>
                                    @php $hinhpath="./app/views/upload/".$question->img;
                                    // echo $hinhpath;
                                    // var_dump($question->img);
                                        if(is_file($hinhpath)){
                                            $img="<img src='".$hinhpath."' height='80px'>";
                                        }
                                        else{
                                            $img="no photo";
                                        }
                                    @endphp
                                
                                    <td>{!!$img!!}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{BASE_URL . 'question/cap-nhat_QuesId' . $question->id }}">Sửa</a>
                                        <a class="btn btn-danger btn-sm" href="{{BASE_URL . 'question/xoa_QuesId' . $question->id }}">Xóa</a>
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