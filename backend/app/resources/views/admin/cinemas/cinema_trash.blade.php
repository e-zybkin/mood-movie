@extends('layouts.admin_lte')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">short_desc</th>
            <th scope="col">full_desc</th>
            <th scope="col">poster</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>


        @foreach($cinemas as $key => $cinema)
            <tr>
                <td class="col-1">{{++$key}}</td>
                <td class="col-2">{{$cinema->name}}</td>
                <td class="col-2">{{$cinema->short_desc}}</td>
                <td class="col-2">{{$cinema->full_desc}}</td>
                <td class="col-2">{{$cinema->poster}}</td>
                <td class="col-1">
                </td>
                <td class="col-1">
                    <a href="{{route('cinema.restore',$cinema->id)}}">
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-arrow-up"></i></button>
                    </a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@stop
