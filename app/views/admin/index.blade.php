         
@extends('layouts.main2')
@section('main-content')
                    <div class="container-fluid px-4">
                        @section('title_page')
                            <h1 class="m-0">Xin Chào {{$_SESSION['user']->name}}</h1>
                        @endsection
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Top Quiz có điểm cao nhất
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên quiz</th>
                                            <th>Tên chủ đề</th>
                                            <th>Tên sinh viên</th>
                                            <th>Điểm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Quiz1.1</td>
                                            <td>Game</td>
                                            <td>Lê Đức Dũng</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Quiz1.2</td>
                                            <td>Game</td>
                                            <td>Nguyễn Quyết Tiến</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Quiz2.1</td>
                                            <td>Anime</td>
                                            <td>Hoàng Nhật Tân</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Quiz2.2</td>
                                            <td>Anime</td>
                                            <td>Phạm Văn Khánh</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Quiz3.1</td>
                                            <td>Art</td>
                                            <td>Ngô Văn Phong</td>
                                            <td>10</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection