@extends('layouts.admin_lte')
@section('content')
    <div>
        <h1>My post</h1><br>
        Title => {{$cinema->name}}<br>
        Category => {{$cinema->short_desc}}<br>
        Content => {{$cinema->full_desc}}<br>
        Image => {{$cinema->poster}}<br>
    </div>
    <div><a href="{{route('cinema.edit',$cinema->id)}}">Редактировать</a></div>
    <br>
    <div><a href="{{route('cinema.index')}}">Вернуться назад</a></div>
@stop
