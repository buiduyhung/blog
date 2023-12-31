@extends('layouts.app')

@section('content')
@if(session('msg'))
    <div class="alert alert-success">
        {{session('msg')}}
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Danh mục bài viết
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                          <tr>
                            <th scope="col" >#</th>
                            <th scope="col" >Tiêu đề</th>
                            <th scope="col" >Mô tả</th>
                            <th scope="col" >Sửa</th>
                            <th scope="col" >Xóa</th>

                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($categories as $item)
                                <tr>
                                    <td scope="row" > {{$item->id}} </td>
                                    <td > {{$item->title}} </td>
                                    <td > {{$item->short_desc}} </td>
                                    <td >
                                        <a href="{{route('category.edit', $item->id)}}" class="btn btn-warning btn-sm">Sửa</a>
                                    </td>
                                    <td >
                                        <form action="{{route('category.destroy', $item->id)}}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">
                                            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            <a href="{{route('home')}}" class="btn btn-primary mb-2">Quay lại</a>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
