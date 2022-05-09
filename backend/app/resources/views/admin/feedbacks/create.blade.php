@extends('layouts.admin_lte')
@section('content')
    <h2>Форма ответа</h2><br>
    <form method="post" action="{{route('email.send',$feedback->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input value="{{$feedback->name}}" type="text" name="name" class="form-control" id="name">
            @error('name')
            <p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Получатель</label>
            <input value="{{$feedback->email}}" type="text" name="email" class="form-control" id="email">
            @error('email')
            <p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Ответ</label>
            <textarea name="message" class="form-control" id="message"></textarea>
            @error('message')
            <p class="text-danger">{{$message}}</p>@enderror
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@stop
