@extends('layouts.admin_lte')
@section('content')
    <div>
        <h1>Фильм {{$film->id}}</h1><br>
        cinema_id => {{$film->cinema->id}}<br>
        name => {{$film->name}}<br>
        short_desc => {{$film->short_desc}}<br>
        full_desc => {{$film->full_desc}}<br>
        trailer => {{$film->trailer}}<br>
        kinopoisk_link => {{$film->kinopoisk_link}}<br>
        poster => <img src="{{$film->getMedia('poster')->first()->getFullUrl('thumb')}}" alt="Главное фото">
    </div>
    <div><a href="{{route('film.edit',$film->id)}}">Редактировать</a></div>
    <br>
    <div><a href="{{route('film.index')}}">Вернуться назад</a></div>
@stop
