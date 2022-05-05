@extends('layouts.admin_lte')
@section('content')
    <table style="text-overflow: ellipsis" class="table">
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

        @php /** @var \App\Models\Film $film */ @endphp

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
                    <form action="{{route('film.edit', $film->id)}}" method="post">
                        @csrf
                        @method('get')
                        <button type="submit" class="btn btn-sm"><i class="fa-solid fa-pencil"></i></button>
                    </form>
                </td>
                <td class="col-1">
                    <form action="{{route('film.delete',$film->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{--    <div class="mt-3">--}}
    {{--        {{$films->withQueryString()->links()}}--}}
    {{--    </div>--}}
    <div><a href="{{route('film.create')}}"><input class="btn btn-primary" type="button" value="Input"></a></div>
    <div><a href="{{route('film.trash.index')}}">
            <button style="float: right;" type="submit" class="btn btn-danger"><i
                    class="fa-solid fa-basket-shopping"></i></button>
        </a></div>
@stop
