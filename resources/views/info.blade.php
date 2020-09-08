@extends('templates.page')
@section('header.head')
@parent
<style>{{$styles}}</style>
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
	<div class="container">
		<div class="row">
			<?php phpinfo(); ?>
		</div>
	</div>
</section>
<footer class="footer">
  <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>
@endsection