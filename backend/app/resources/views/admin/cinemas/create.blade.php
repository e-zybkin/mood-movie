@extends('layouts.admin_lte')
@section('content')
    <h2>Форма добавления кинотетра</h2><br>
    <form method="post" action="{{route('cinema.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input value="{{old('title')}}" type="text" name="name" class="form-control" id="name">
            @error('name')
            <p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="short_desc" class="form-label">Короткое описание</label>
            <textarea name="short_desc" class="form-control" id="short_desc">{{old('short_desc')}}</textarea>
            @error('short_desc')
            <p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="full_desc" class="form-label">Полное описание</label>
            <textarea name="full_desc" class="form-control" id="full_desc">{{old('full_desc')}}</textarea>
            @error('post_content')
            <p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="form-group">
            <label for="poster" class="form-label">Постер</label>
            <input class="form-control-file" name="poster" type="file" id="poster">
            @error('poster')
            <p class="text-danger">{{$message}}</p> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@stop
