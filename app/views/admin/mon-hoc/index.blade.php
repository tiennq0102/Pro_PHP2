@extends('layouts.main2')
@section('main-content')
<main>
    <div class="container-fluid px-4">
        {{-- <h1 class="mt-4">List chủ đề</h1> --}}
        @section('title_page')
            <h1 class="m-0">List chủ đề</h1>
        @endsection
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                List chủ đề
            </div>
            <div class="card-body">
            <div>
                <a class="btn btn-primary mb-3" href="{{ BASE_URL . 'mon-hoc/tao-moi'}}">Thêm mới chủ đề</a>
            </div>
                <table id="datatablesSimple"> 
                    <thead>
                        <th>Mã chủ đề</th>
                        <th>Tên chủ đề</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                         <!--$subjects dc tạo ra từ hàm index trong SubjectController  -->
                        @foreach($subjects as $sub)
                            <tr>
                                <td>{{ $sub->id }}</td>
                                <td>
                                    <a href="{{ BASE_URL . 'quizId_Sid' . $sub->id}}">{{ $sub->name }}</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ BASE_URL . 'mon-hoc/cap-nhat_Sid' . $sub->id }}">Sửa</a>
                                    <a class="btn btn-danger btn-sm" href="{{ BASE_URL . 'mon-hoc/xoa_Sid' . $sub->id }}">Xóa</a>
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