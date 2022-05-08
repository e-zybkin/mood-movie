@extends('layouts.admin_lte')
@section('content')

    <link rel="stylesheet" href="{{asset('css/css.css')}}" type="text/css">

    @php /** @var \App\Models\Film $film */ @endphp

    @foreach($reviews as $review)
        <div class="container">
            <p><span>nickname: {{$review->nickname}}</span></p>
            <form class="form-inline" action="{{route('review.delete',$review->id)}}" method="post">
                <span>message: {{$review->message}}</span>
                @csrf
                @method('delete')
                <button style="position: absolute; right: 40px" type="submit" class="btn btn-danger pull-right"><i class="fa fa-trash"></i></button>
            </form>
        </div>

    @endforeach

    <div><a href="{{route('review.create')}}"><input class="btn btn-primary" type="button" value="Input"></a></div>
@stop
