@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Cập nhật danh mục bài viết
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('category.update', $category->id)}}" method="POST">
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text" class="form-control " name="title" value="{{$category->title}}"/>

                            <div class="mb-3">
                                <label for="title">Mô tả danh mục :</label>
                                <textarea name="short_desc" class="form-control ckeditor">{{$category->short_desc}}</textarea>
                            </div>
                            
                        </div>

                        <button type="submit" class="btn btn-primary mt-2">Cập nhật</button>
                        <a href="{{route('category.index')}}" class="btn btn-warning mt-2">Quay lại</a>
                        @csrf
                        @method('PUT')
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
