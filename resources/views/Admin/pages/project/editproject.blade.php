@extends('Admin.layouts.welcome')

@section('title', 'Edit Project Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/project') }}">Projects</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Edit a project</h1>
                </li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Edit a Project</div>
            </div>
            <!--end::Header-->
            <!--begin::Form-->
            <form action="{{ route('admin.project.update', $project->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Tên dự án</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $project->title) }}">
                    </div>
                    <label for="image_url" class="form-label">Hình ảnh</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="image_url" name="image_url" value="{{ old('image_url', $project->image_url) }}">
                        <button type="button" class="btn btn-secondary" onclick="selectImageUrl()" for="image_url">Upload</button>
                    </div>
                    <img id="preview-image_url" style="max-width: 200px; display:none; margin-top: 10px">
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="{{ old('address', $project->address) }}">
                    </div>
                    <div class="mb-3">
                        <label for="acreage" class="form-label">Diện tích</label>
                        <input type="text" class="form-control" id="acreage" name="acreage"
                            value="{{ old('acreage', $project->acreage) }}" name="acreage">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Ngày tạo</label>
                        <input type="date" class="form-control" id="date" name="date"
                            value="{{ old('date', $project->date) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description', $project->description) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="team_design" class="form-label">Thành viên thiết kế</label>
                        <input type="text" class="form-control" id="team_design" name="team_design"
                            value="{{ old('team_design', $project->team_design) }}">
                    </div>
                    <label class="form-label">Hình ảnh dự án</label>
                        <button type="button" class="btn btn-outline-primary mb-3 mt-3" onclick="selectGallery()">
                            Chọn nhiều ảnh
                        </button>
                        <input type="hidden" name="gallery" id="gallery">
                        <div class="row" id="gallery-preview"></div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Danh mục</label>
                        <select class="form-control" name="category_id" id="category_id">
                            <option value="">Chọn danh mục</option>
                            {{-- BẮT ĐẦU LẶP QUA DỮ LIỆU TỪ DATABASE --}}
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{-- Giữ lại giá trị cũ nếu validation thất bại --}}
                                    {{ old('category_id', $project->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                            {{-- KẾT THÚC VÒNG LẶP --}}
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1" {{ $project->status == 1 ? 'selected' : '' }}>Hoàn thành</option>
                            <option value="0" {{ $project->status == 0 ? 'selected' : '' }}>Chưa hoàn thành</option>
                        </select>
                    </div>
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <!--end::Footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
@endsection
<script>
    function selectGallery() {
        CKFinder.popup({
            chooseFiles: true,
            width: 800,
            height: 600,

            onInit: function(finder) {
                finder.on('files:choose', function(evt) {
                    let files = evt.data.files.toArray();
                    let urls = [];
                    let html = '';

                    files.forEach(file => {
                        urls.push(file.getUrl());
                        html += `
                        <div class="col-md-3 mb-3">
                            <img src="${file.getUrl()}" class="img-fluid rounded border">
                        </div>
                    `;
                    });

                    document.getElementById('gallery').value = JSON.stringify(urls);
                    document.getElementById('gallery-preview').innerHTML = html;
                });
            }
        });
    }
</script>
