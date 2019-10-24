@extends('layouts.app')
@section('title', '排行榜')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card panel-default">
                <div class="card-header">
                  排行榜
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>消费（元）</th>
                            <th>名字</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $vo)
                            <tr>
                                <td>{{ $vo->name }}</td>
                                <td>{{ $vo->total_amount }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
