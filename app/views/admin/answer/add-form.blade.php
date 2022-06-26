@extends('layouts.main2')
@section('main-content')
                <main>
                    <div class="container-fluid px-4">
                        @section('title_page')
                            <h1 class="m-0">Thêm mới câu trả lời</h1>
                        @endsection
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Thêm mới trả lời
                            </div>
                            <div class="card-body">
                                <form action="<?= BASE_URL . 'answer/luu-tao-moi_Q'?>" method="post" enctype="multipart/form-data"> 
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nội dung câu trả lời</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="content">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">ID question</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="question_id" value="<?=$Qid ?>" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Is correct</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="is_correct">
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary">Tạo mới</button>
                                    <a class="btn btn-primary" href="<?= BASE_URL . 'answer_QuesId'.$Qid?>">Quay lại</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
               @endsection