<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$title}}</title>
	@section('header.head')
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<script src="{{asset('css/app.js')}}"></script>
	@show
</head>
<body>
	@section('body.after')
	@show