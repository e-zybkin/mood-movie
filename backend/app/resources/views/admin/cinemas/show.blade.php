@extends('layouts.admin_lte')
@section('content')
    <div>
        <h1>Кинотеатр {{$cinema->id}}</h1><br>
        name => {{$cinema->name}}<br>
        short_desc => {{$cinema->short_desc}}<br>
        full_desc => {{$cinema->full_desc}}<br>
        poster => {{--  {{$cinema->poster}}<br>--}}
    </div>
    <div><a href="{{route('cinema.edit',$cinema->id)}}">Редактировать</a></div>
    <br>
    <div><a href="{{route('cinema.index')}}">Вернуться назад</a></div>
@stop
