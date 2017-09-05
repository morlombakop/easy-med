@extends('common.master')

@section('navigation')
	@include('common.navigation')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="sidebar col-xs-2 n-p-l-r">
            @yield('side-bar')
        </div>
        <div class="col-xs-10 main-content">
            @yield('side-content')
        </div>
    </div>
</div>
@endsection
