@extends('ExamenBlog.template.Layout')
@section('Unidad2')
@foreach ($unidades as $unidad)
<h1>{!!$unidad['titulo']!!}</h1>
<br>
{{!!$unidad['descripcion']!!}}
<br>
<img src="{{$unidad['url']}}" alt="">
<hr>


    
@endforeach

@endsection