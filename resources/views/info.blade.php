@extends('templates.page')
@section('header.head')
@parent
<style>{{$styles}}</style>
@endsection
@section('content')
{{$body}}
@endsection