@extends('layouts.admin_lte')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">cinema_id</th>
            <th scope="col">name</th>
            <th scope="col">short_desc</th>
            <th scope="col">full_desc</th>
            <th scope="col">trailer</th>
            <th scope="col">kinopoisk_link</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>


        @foreach($films as $film)
            <tr>
                <td class="col-1"><a href="{{route('film.show',$film->id)}}">{{$film->id}}</a></td>
                <td class="col-1">{{$film->cinema->name}}</td>
                <td class="col-1">{{$film->name}}</td>
                <td class="col-2">{{$film->short_desc}}</td>
                <td class="col-3">{{$film->getShortDescription()}}</td>
                <td class="col-1"><img
                        src="{{$film->getMedia('poster')->first()->getFullUrl('thumb')}}"
                        alt="Крыша небоскрёба"></td>
                <td class="col-1">{{$film->getShortTrailer()}}</td>
                <td class="col-1">{{$film->getShortKinopoisk()}}</td>
                <td class="col-1">
                    <a href="{{route('film.restore',$film->id)}}">
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-arrow-up"></i></button>
                    </a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@stop
