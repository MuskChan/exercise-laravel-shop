@extends('layouts.app')
@section('title',  '修改资料')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-lg-1">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">
                        修改资料
                    </h2>
                </div>
                <div class="card-body">
                    <!-- 输出后端报错开始 -->
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <h4>有错误发生：</h4>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><i class="glyphicon glyphicon-remove"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                <!-- 输出后端报错结束 -->
                              <form class="form-horizontal" role="form" action="{{ route('users.update',Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class="col-form-label text-md-right col-sm-2">头像</label>
                                            <div class="col-sm-9 custom-file">
                                                <input type="file" name="avatar" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-md-right col-sm-2">email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="email" value="{{ old('address', $user->email) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-md-right col-sm-2">名字</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name" value="{{ old('zip', $user->name) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row text-center">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">提交</button>
                                            </div>
                                        </div>
                                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
