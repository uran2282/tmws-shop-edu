@extends('templates.page')
@section('header.head')
	@parent
	<link rel="stylesheet" href="{{asset('css/index-styles.css')}}">
@endsection
@section('content')
<header id="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col">@include('templates.parts.navbar')</div>
		</div>
	</div>
</header>
<section id="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col"><h1 class="d-flex justify-content-center mt-4">{{$title}}</h1></div>
		</div>
	</div>
</section>
@endsection