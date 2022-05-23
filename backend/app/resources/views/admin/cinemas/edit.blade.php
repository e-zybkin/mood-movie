@extends('layouts.admin_lte')
@section('content')
    <h2>Форма обновления Кинотеатра</h2><br>
    <form method="post" action="{{route('cinema.update',$cinema->id)}}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input value="{{$cinema->name}}" type="text" name="name" class="form-control" id="name">
            @error('name')
            <p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="short_desc" class="form-label">Короткое описание</label>
            <textarea name="short_desc" class="form-control" id="short_desc">{{$cinema->short_desc}}</textarea>
            @error('short_desc')
            <p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="full_desc" class="form-label">Полное описание</label>
            <textarea name="full_desc" class="form-control" id="full_desc">{{$cinema->full_desc}}</textarea>
            @error('post_content')
            <p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="form-group">
            <label for="poster" class="form-label">Постер</label>
            <input class="form-control-file" name="poster" type="file" id="poster" value="{{$cinema->poster}}">
            @error('poster')
            <p class="text-danger">{{$message}}</p> @enderror
        </div>
        <div class="form-group">
            <label for="about" class="form-label">О кинотеатре</label>
            <input class="form-control-file" name="about" type="file" id="about" value="{{$cinema->poster}}">
            @error('poster')
            <p class="text-danger">{{$message}}</p> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Обновить</button>
@stop
