@extends('layouts.main2')
@section('main-content')
<main>
<div class="container-fluid px-4">
    @section('title_page')
        <h1 class="m-0">Cập nhật quiz</h1>
    @endsection
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Cập nhật quiz
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên quiz</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"value="{{$model->name}}">
                </div>
                <div>
                    <label for="">Tên danh mục</label>
                    <select name="subject_id" class="form-select mb-3" aria-label="Default select example">
                        <?php foreach($allSubject as $subject){
                                if($model->subject_id == $subject->id){
                                    echo '<option value="'.$subject->id.'" selected>'.$subject->name.'</option>';
                                }else{
                                    echo '<option value="'.$subject->id.'" >'.$subject->name.'</option>';
                                }
                            }
                       ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Duration_minutes</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="duration_minutes" value="{{$model->duration_minutes}}">
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
    
</main>
@endsection