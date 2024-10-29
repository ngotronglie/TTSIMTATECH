@extends('admin.layouts.app')

@section('title')
    Thêm mới người dùng
@endsection

@section('content')
    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Input for Name -->
        <div class="mb-3">
            <label class="form-label">Name: <span class="text-danger">*</span></label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>

        <!-- Input for Email -->
        <div class="mb-3">
            <label class="form-label">Email: <span class="text-danger">*</span></label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>

        <!-- Input for Password -->
        <div class="mb-3">
            <label class="form-label">Password: <span class="text-danger">*</span></label>
            <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>

         <!-- Input for Avatar -->
    <div class="mb-3">
        <label class="form-label">Avatar: <span class="text-danger">*</span></label>
        <input type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror">
        @error('avatar')
            <small class="text-danger fst-italic">* {{ $message }}</small>
        @enderror
    </div>
        <!-- Radio buttons for Status (Active/Inactive) -->
        <div class="mb-3">
            <label class="form-label">Status: <span class="text-danger">*</span></label>
            <div>
                <input type="radio" name="is_active" value="1" {{ old('is_active') == '1' ? 'checked' : '' }}> Active
                <input type="radio" name="is_active" value="0" {{ old('is_active') == '0' ? 'checked' : '' }}> Inactive
            </div>
            @error('is_active')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>

        <!-- Dropdown for Social Provider (Facebook/Google) -->
        <div class="mb-3">
            <label class="form-label">Social Provider: <span class="text-danger">*</span></label>
            <select name="social_provider" class="form-control @error('social_provider') is-invalid @enderror">
                <option value="">Choose Provider</option>
                <option value="facebook" {{ old('social_provider') == 'facebook' ? 'selected' : '' }}>Facebook</option>
                <option value="google" {{ old('social_provider') == 'google' ? 'selected' : '' }}>Google</option>
            </select>
            @error('social_provider')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>

        <!-- Input for Social ID -->
        <div class="mb-3">
            <label class="form-label">Social ID:</label>
            <input type="text" name="social_id" value="{{ old('social_id') }}" class="form-control @error('social_id') is-invalid @enderror">
            @error('social_id')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>

        <!-- Submit and Reset Buttons -->
        <div class="mb-3">
            <button class="btn btn-primary me-2"> <i class="bi bi-bookmark me-1"></i> Thêm mới </button>
            <button type="reset" class="btn btn-secondary me-2"> <i class="bi bi-clock-wise me-1"></i> Nhập lại </button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-info"> <i class="bi bi-arrow-left me-1"></i> Danh sách </a>
        </div>
    </form>
@endsection
