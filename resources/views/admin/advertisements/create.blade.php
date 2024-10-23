@extends('admin.layouts.app')

@section('title')
    Thêm mới quảng cáo
@endsection

@section('content')
    @if (session('error'))
        <div class="row text-center">
            <small class="text-danger fst-italic fw-bold">
                {{ session('error') }}
            </small>
        </div>
    @endif

    <form action="{{ route('admin.advertisements.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Ảnh: <span class="text-danger">*</span></label>
            <input type="file" name="image" accept="image/*" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">Nội dung: </label>
            <textarea name="content" id="" cols="30" rows="2" class="form-control">{{ old('content') }}</textarea>
            @error('content')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Link quảng cáo: </label>
            <input type="url" name="link" value="{{ old('link') }}" class="form-control @error('link') is-invalid @enderror">
            @error('link')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Ngày bắt đầu: <span class="text-danger">*</span></label>
            <input type="datetime-local" name="start_date" value="{{ old('start_date') }}" class="form-control @error('start_date') is-invalid @enderror">
            @error('start_date')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Ngày kết thúc: <span class="text-danger">*</span></label>
            <input type="datetime-local" name="end_date" value="{{ old('end_date') }}" class="form-control @error('end_date') is-invalid @enderror">
            @error('end_date')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Trang: <span class="text-danger">*</span></label>
            <select name="pages" id="" class="form-select">
                <option value="">Chọn trang hiển thị</option>
                <option value="home"        @if (old('pages') == 'home') selected @endif>Trang chủ</option>
                <option value="education"   @if (old('pages') == 'education') selected @endif>Giáo dục</option>
                <option value="technology"  @if (old('pages') == 'technology') selected @endif>Công nghệ</option>
                <option value="latest_news" @if (old('pages') == 'latest_news') selected @endif>Tin mới nhất</option>
                <option value="video"       @if (old('pages') == 'video') selected @endif>Video</option>
                <option value="podcast"     @if (old('pages') == 'podcast') selected @endif>Podcast</option>
                <option value="category"    @if (old('pages') == 'category') selected @endif>Danh mục</option>
                <option value="post_detail" @if (old('pages') == 'post_detail') selected @endif>Chi tiết bài viết</option>
            </select>
            @error('pages')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Vị trí: <span class="text-danger">*</span></label>
            <select name="position" id="" class="form-select">
                <option value="">Chọn vị trí hiển thị</option>
                <option value="header"  @if (old('position') == 'header') selected @endif>Header</option>
                <option value="sidebar" @if (old('position') == 'sidebar') selected @endif>Sidebar</option>
                <option value="middle"  @if (old('position') == 'middle') selected @endif>Middle</option>
                <option value="bottom"  @if (old('position') == 'bottom') selected @endif>Bottom</option>
            </select>
            @error('position')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Trạng thái: </label>
            <select name="status" id="" class="form-select">
                <option value="draft"      @if (old('draft')     == 'draft') selected @endif>Bản nháp</option>
                <option value="active"     @if (old('active')    == 'active') selected @endif>Chạy quảng cáo</option>
            </select>
            @error('status')
                <small class="text-danger fst-italic">* {{ $message }}</small>
            @enderror
        </div>
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

        <div class="mb-3">
            <button class="btn btn-primary me-2"> <i class="bi bi-bookmark me-1"></i> Thêm mới </button>
            <button type="reset" class="btn btn-secondary me-2"> <i class="bi bi-clock-wise me-1"></i> Nhập lại </button>
            <a href="{{ route('admin.advertisements.index') }}" class="btn btn-info me-2"> <i class="bi bi-arrow-left me-1"></i> Quay lại </a>
        </div>
    </form>
@endsection