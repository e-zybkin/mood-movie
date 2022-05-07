@extends('layouts.admin_lte')
@section('content')
    <div>
        <h1>Кинотеатр {{$cinema->id}}</h1><br>
        name => {{$cinema->name}}<br>
        short_desc => {{$cinema->short_desc}}<br>
        full_desc => {{$cinema->full_desc}}<br>
        poster => <img
            src="{{$cinema->getMedia('main')->first()->getFullUrl('thumb')}}"
            alt="Главное фото">
        about =>@if(!is_null($cinema->getMedia('about')))
        <img
            src="{{$cinema->getMedia('about')->first()->getFullUrl('thumb')}}" alt="О кинотеатре"> @endif
        <br>
        @foreach($cinema->getMedia('sliders') as $key => $image)
            slider {{++$key}} =>
                <img
                    src="{{$cinema->getMedia('sliders')->all()[--$key]->getFullUrl('thumb')}}"
                    alt="Слайдер">
            <br>
        @endforeach
    </div>
    <div><a href="{{route('cinema.edit',$cinema->id)}}">Редактировать</a></div>
    <br>
    <div><a href="{{route('cinema.sliders.add',$cinema->id)}}">Добавить слайдеры</a></div>
    <br>
    <div><a href="{{route('cinema.index')}}">Вернуться назад</a></div>
@stop
