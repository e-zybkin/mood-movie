@extends('layouts.admin_lte')
@section('content')
    <table style="text-overflow: ellipsis" class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">short_desc</th>
            <th scope="col">full_desc</th>
            <th scope="col">poster</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>

        @php /** @var \App\Models\Cinema $cinema */ @endphp

        @foreach($cinemas as $key => $cinema)
            <tr>
                <td class="col-1"><a href="{{route('cinema.show',$cinema->id)}}">{{$cinema->id}}</a></td>
                <td class="col-2">{{$cinema->name}}</td>
                <td class="col-3">{{$cinema->short_desc}}</td>
                <td class="col-3">{{$cinema->getShortDescription()}}</td>
                <td class="col-2"><img src="{{$cinema->getMedia('main')->first()->getFullUrl('thumb')}}"
                                       alt="Крыша небоскрёба">
                </td>
                <td class="col-1">
                    <form action="{{route('cinema.edit', $cinema->id)}}" method="post">
                        @csrf
                        @method('get')
                        <button type="submit" class="btn btn-sm"><i class="fa-solid fa-pencil"></i></button>
                    </form>
                </td>
                <td class="col-1">
                    <form action="{{route('cinema.delete',$cinema->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div><a href="{{route('cinema.create')}}"><input class="btn btn-primary" type="button" value="Создать"></a></div>

    <div><a href="{{route('cinema.trash.index')}}">
            <button style="float: right;" type="submit" class="btn btn-danger"><i
                    class="fa-solid fa-basket-shopping"></i></button>
        </a></div>
@stop
