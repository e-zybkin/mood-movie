@extends('layouts.admin_lte')
@section('content')

    <link rel="stylesheet" href="{{asset('css/css.css')}}" type="text/css">

    @php /** @var \App\Models\Film $film */ @endphp
    <h1>Оратная связь</h1>
    @foreach($feedbacks as $feedback)
        <div class="container">
            <p>
                <span>name: {{$feedback->name}}</span>
                <span style="margin: 16px">email: {{$feedback->email}}</span>
                <span style="position: absolute; right: 0"><a href="{{route('feedback.create',$feedback->id)}}"><button
                            class="btn btn-primary">Ответить</button></a></span>
                <span style="margin: 40px">@if($feedback->answered === 1) <i class="fa-solid fa-square-check"></i> @endif</span>
            </p>
            <span>msg: {{$feedback->msg}}</span>
            <form class="form-inline" action="{{route('feedback.delete',$feedback->id)}}" method="post">
                @csrf
                @method('delete')
                <button style="position: absolute; right: 40px" type="submit" class="btn btn-danger pull-right"><i
                        class="fa fa-trash"></i></button>
            </form>
        </div>

    @endforeach

@stop
