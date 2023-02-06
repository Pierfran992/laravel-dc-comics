@extends('layouts.main-layout')

@section('content')
    <h1 class="text-danger">Person Select</h1>

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
                    <tr>
                        <th scope="row" class="align-middle">{{ $person -> firstName }}</th>
                        <td class="align-middle">{{ $person -> lastName }}</td>
                        <td class="align-middle">{{ $person -> dateOfBirth }}</td>
                        <td class="align-middle">{{ $person -> height ? $person -> height . " cm" : '' }} </td>
                    </tr>
        </tbody>
    </table>

    <a class="btn btn-danger ms_button mt-3" href="/">Return to list</a>
@endsection