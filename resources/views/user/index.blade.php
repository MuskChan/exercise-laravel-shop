@extends('layouts.app')
@section('title', '用户中心')

@section('content')
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-header">用户中心</div>
                <div class="card-body">
                    <div class="row products-list">
                    </div>
                    <div class="float-right">{{ $products->render() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
