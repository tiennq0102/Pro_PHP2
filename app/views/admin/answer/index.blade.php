@extends('layouts.main2')
@section('main-content')
                <main>
                    <div class="container-fluid px-4">
                        @section('title_page')
                            <h1 class="m-0">List câu trả lời</h1>
                        @endsection
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                List câu trả lời
                            </div>
                            <div class="card-body">
                            <div>
                                <a class="btn btn-primary mb-3" href="{{ BASE_URL . 'answer/tao-moi_Q'.$Qid}}">Tạo mới</a>
                                <a class="btn btn-primary mb-3" href="{{BASE_URL . 'question'}}">Quay lại câu hỏi</a>
                            </div>
                                <table id="datatablesSimple"> 
                                    <thead>
                                        <th>Mã câu trả lời</th>
                                        <th>Nội dung</th>
                                        <th>Mã question</th>
                                        <th>Is_correct</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach($answers as $answer): ?>
                                        <tr>
                                            <td><?= $answer->id ?></td>
                                            
                                            <td>
                                                <p><?= $answer->content?></p>
                                            </td>
                                            <td><?= $answer->question()->id ?></td>
                                            <td><?= $answer->is_correct?></td>
                                            <?php $hinhpath="./app/views/upload/".$answer->img;
                                            // echo $hinhpath;
                                            // var_dump($answer->img);
                                                if(is_file($hinhpath)){
                                                    $img="<img src='".$hinhpath."' height='80px'>";
                                                }
                                                else{
                                                    $img="no photo";
                                                }
                                            ?>
                                            <td><?= $img?></td>
                                            <td>
                                                <a class="btn btn-primary" href="<?= BASE_URL . 'answer/cap-nhat_QuesId' . $answer->id ?>">Sửa</a>
                                                <a class="btn btn-danger" href="<?= BASE_URL . 'answer/xoa_Ans' . $answer->id ?>">Xóa</a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection