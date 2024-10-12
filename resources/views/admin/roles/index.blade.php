@extends('admin.layouts.app')

@section('title')
    Danh sách Roles
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Danh sách Roles</h1>
        <nav>
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li> --}}
                <li class="breadcrumb-item">Roles</li>
                <li class="breadcrumb-item active">Danh sách</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách Roles</h5>

                        <!-- Role Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên Role</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th> <!-- Số thứ tự -->
                                        <td>{{ $role->name }}</td> <!-- Tên role -->
                                        <td>
                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary">Sửa</a>
                                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Role Table -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
