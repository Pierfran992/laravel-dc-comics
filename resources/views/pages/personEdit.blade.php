@extends('layouts.main-layout')

@section('content')
    <h1 class="text-danger">Edit Item</h1>

    <a class="btn btn-danger ms_button my-3" href="/">Return to list</a>

    {{-- creo il form con cui andar a creare il nuovo elemento da inviare al database --}}
    <form method="POST" action="{{route('person.update', $person)}}">
        
        @csrf

        <div class="input-group my-2">
            <label for="firstName" class="input-group-text" id="basic-addon1">First Name</label>
            <input type="text" class="form-control" name="firstName" value="{{$person -> firstName}}">
        </div>

        <div class="input-group my-2">
            <label for="lastName" class="input-group-text" id="basic-addon1">last Name</label>
            <input type="text" class="form-control" name="lastName" value="{{$person -> lastName}}">
        </div>

        <div class="input-group my-2">
            <label for="dateOfBirth" class="input-group-text" id="basic-addon1">Date of Birth</label>
            <input type="date" class="form-control" name="dateOfBirth" value="{{$person -> dateOfBirth}}">
        </div>

        <div class="input-group my-2">
            <label for="height" class="input-group-text" id="basic-addon1">Height</label>
            <input type="number" class="form-control" name="height" value="{{$person -> height}}">
        </div>

        <button class="btn btn-danger my-2" type="submit">EDIT</button>
        
    </form>
@endsection