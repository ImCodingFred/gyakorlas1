@extends('layout')
@section('content')
<h1 class="py-2 text-center">Vendégkönyv</h1>
<form action="/vendegkonyv" method="POST">
@csrf
<label for="nev" class="form-label">Név: <span class="text-danger"><b>*</b></span></label>
<input type="text" name="nev" id="nev" class="form-control">
<label for="email" class="form-label mt-2">E-mail: <span class="text-danger"><b>*</b></span></label>
<input type="email" name="email" id="email" class="form-control">
<label for="msg" class="form-label mt-2">Üzenet <span class="text-danger"><b>*</b></span></label>
<textarea name="msg" cols="30" rows="10" class="form-control"></textarea>
<p class="text-danger"> <b>* kötelező kitölteni</b></p>
<p class="text-danger"><b>
    @error('nev')
    {{$message}}
    @enderror
    @error('email')
    {{$message}}
    @enderror
    @error('msg')
    {{$message}}
    @enderror
</b></p>
<button type="submit" class="btn btn-outline-primary mt-4">Beküld</button>
</form>
<hr>
@foreach ($results as $row)
    <h5>{{$row->nev}} - <a href="mailto:{{$row->email}}">{{$row->email}}</a></h5>
    <p>{{date_format(date_create($row->date),"Y m d")}}</p>
    <p>{!! $row->message !!}</p>
@endforeach
@endsection
