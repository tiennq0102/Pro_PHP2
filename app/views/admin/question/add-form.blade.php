@extends('layouts.main2')
@section('main-content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Thêm mới câu hỏi</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Thêm mới câu hỏi
            </div>
            <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">  
                    <div class="mb-3">
                        <label for="floatingTextarea" class="form-label">Nội dung câu hỏi</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="floatingTextarea" name="name" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div>
                        <label for="">Tên danh mục</label>
                        <select name="quiz_id" class="form-select mb-3" aria-label="Default select example">
                        @foreach($allQuiz as $quiz)
                            <option value="{{$quiz->id }}"> {{$quiz->name }} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Image</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Tạo mới</button>
                    <a class="btn btn-primary" href="{{BASE_URL . 'question'}}">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
                
              