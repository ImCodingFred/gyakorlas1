@extends('layout')
@section('content')
<h1 class="py-2 text-center">Hírek</h1>
@foreach ($results as $row)
    <h3>{{$row->title}}</h3>
    <div class="row">
        <div class="col-md-8 fs-5">
            <p>{{date_format(date_create($row->date),"Y m d")}}</p>
            <p>{!!$row->text!!}</p>
        </div>
        <div class="col-md-4">
            <p>
                <img src="{{asset('img/'.$row->img)}}" alt="{{$row->img}}" class="w-100">
            </p>
        </div>
    </div>
    <hr>
@endforeach
@endsection
