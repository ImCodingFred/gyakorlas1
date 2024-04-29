@extends('layout')
@section('content')
<h1 class="py-2 text-center">Regisztráció</h1>
<form action="/regisztracio" method="POST">
@csrf
<label for="nev" class="form-label">Név: <span class="text-danger"><b>*</b></span></label>
<input type="text" name="nev" id="nev" class="form-control">
<label for="email" class="form-label mt-2">E-mail: <span class="text-danger"><b>*</b></span></label>
<input type="email" name="email" id="email" class="form-control">
<label for="password" class="form-label mt-2">Jelszó: <span class="text-danger"><b>*</b></span></label>
<input type="password" name="password" class="form-control mt-2">
<label for="password_confirmation" class="form-label mt-2">Jelszó ismét: <span class="text-danger"><b>*</b></span></label>
<input type="password" name="password_confirmation" class="form-control mt-2">
<p class="text-danger"> <b>* kötelező kitölteni</b></p>
<p class="text-danger"><b>
    @foreach ($errors->all() as $row)
    @if(count($errors)<2)
        {{$row}}
    @else
        @if (!$loop->last)
            {{$row}} **
        @else
        {{$row}}
        @endif
    @endif
    @endforeach
</b></p>
<button type="submit" class="btn btn-outline-primary mt-4">Beküld</button>
</form>
@endsection
