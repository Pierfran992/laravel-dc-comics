@extends('layouts.main-layout')

@section('content')
<h1 class="text-danger">Person List</h1>

{{-- table in cui stampare i dati del database con un foreach --}}
<table class="table">
    <thead>
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Height</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
            @foreach ($people as $person)
                <tr>
                    <th scope="row" class="align-middle">
                        <a href="{{ route('person.show' , $person)}}" class="text-danger">{{ $person -> firstName }}</a>
                    </th>
                    <td class="align-middle">{{ $person -> lastName }}</td>
                    <td class="align-middle">{{ $person -> dateOfBirth }}</td>
                    <td class="align-middle">{{ $person -> height ? $person -> height . " cm" : '' }} </td>
                    <td class="align-middle">
                        <a href="{{route('person.delete', $person)}}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
    </tbody>
</table>
@endsection