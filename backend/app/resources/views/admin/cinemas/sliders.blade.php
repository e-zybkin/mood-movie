@extends('layouts.admin_lte')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Добавьте сюда ваши слайдеры</h2>
                <form action="{{route('cinema.sliders',$id)}}" enctype="multipart/form-data" class="dropzone" id="image-upload">
                    @csrf
                    <input type="hidden" value="{{$id}}" name="id">
                </form>
                <button class="btb btn-primary" id="uploadFile">Upload Files</button>
            </div>
        </div>
    </div>

    <br><a href="{{route('cinema.show',$id)}}"><button style="margin-left: 5%" type="submit" class="btn btn-primary">Обзор</button></a>
    <br>

    </br><a href="{{route('cinema.index')}}"><p style="margin-left: 5%">На главную</p></a>

    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        $( document ).ready(function() {


            var myDropzone = new Dropzone(".dropzone", {
                autoProcessQueue: false,
                maxFilesize: 30,
                addRemoveLinks: true,
                paramName: 'sliders',
                acceptedFiles: ".jpeg,.jpg,.png,.gif"
            });

            $('#uploadFile').click(function(){
                myDropzone.processQueue();
            });
        });



    </script>

    </body>
    </html>
@stop
