@extends('layout')
@section('content')
<h1 class="py-2 text-center">Belépés</h1>
@isset($msg)
<h3 class="text-success">{{$msg}}</h3>
@endisset
@isset($msgb)
<h3 class="text-danger">{{$msgb}}</h3>
@endisset
<form action="/belepes" method="POST">
@csrf
<label for="email" class="form-label mt-2">E-mail: <span class="text-danger"><b>*</b></span></label>
<input type="email" name="email" id="email" class="form-control">
<label for="password" class="form-label mt-2">Jelszó: <span class="text-danger"><b>*</b></span></label>
<input type="password" name="password" class="form-control mt-2">
<p class="text-danger"> <b>* kötelező kitölteni</b></p>
<p class="text-danger"><b>
    @error('email')
    {{$message}}
    @enderror
    @error('password')
    {{$message}}
    @enderror
</b></p>
<button type="submit" class="btn btn-outline-primary mt-4">Beküld</button>
</form>
@endsection
