@extends('Admin.layouts.welcome')

@section('title', 'Create Portfolio Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ route('portfolio.index') }}">Portfolio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Create a Portfolio</h1>
                </li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Create a Portfolio</div>
            </div>
            <!--end::Header-->
            <div class="card-body">
                {{-- Hiển thị lỗi Validation --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!--begin::Form-->
                <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" value="{{ old('title') }}">
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                name="slug" value="{{ old('slug') }}">
                        </div>
                        <label class="form-label">Hình ảnh</label>
                        <div class="input-group mb-3">
                            <input type="text" id="image" name="image"
                                class="form-control @error('image') is-invalid @enderror"
                                placeholder="Chọn hình bằng CKFinder">

                            <button type="button" class="btn btn-secondary" onclick="selectImage()">Chọn ảnh</button>
                        </div>

                        <img id="preview-image" style="max-width: 200px; display:none; margin-top:10px;">

                        <div class="mb-3">
                            <label for="content" class="form-label">Nội dung</label>
                            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content"
                                name="content" value="{{ old('content') }}">
                        </div>
                        <div class="mb-3">
                            <label for="album_id" class="form-label">Danh mục</label>
                            <select class="form-control @error('album_id') is-invalid @enderror" name="album_id"
                                id="album_id">
                                <option value="">Chọn danh mục</option>
                                {{-- BẮT ĐẦU LẶP QUA DỮ LIỆU TỪ DATABASE --}}
                                @foreach ($albums as $album)
                                    <option value="{{ $album->id }}" {{-- Giữ lại giá trị cũ nếu validation thất bại --}}
                                        {{ old('album_id') == $album->id ? 'selected' : '' }}>
                                        {{ $album->title }}
                                    </option>
                                @endforeach
                                {{-- KẾT THÚC VÒNG LẶP --}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Trạng thái <span class="text-danger">*</span></label>
                            <select class="form-control" name="status" id="status">
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Hiển thị</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Ẩn
                                </option>
                            </select>
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
@endsection
<script src="/ckfinder/ckfinder.js"></script>

<script>
    function selectImage() {
        CKFinder.popup({
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function (finder) {

                finder.on('files:choose', function (evt) {
                    var fileUrl = evt.data.files.first().getUrl();

                    document.getElementById('image').value = fileUrl;

                    let preview = document.getElementById('preview-image');
                    preview.src = fileUrl;
                    preview.style.display = 'block';
                });

                finder.on('file:choose:resizedImage', function (evt) {
                    var fileUrl = evt.data.resizedUrl;

                    document.getElementById('image').value = fileUrl;

                    let preview = document.getElementById('preview-image');
                    preview.src = fileUrl;
                    preview.style.display = 'block';
                });
            }
        });
    }
</script>
