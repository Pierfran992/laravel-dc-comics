<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

class MainCotroller extends Controller
{
    // index
    public function home() {
        $people = Person::all();

        return view('pages.home', compact('people'));
    }

    // show
    public function show(Person $person) {
        return view('pages.show', compact('person'));
    }

    // delete
    public function delete(Person $person){
        $person->delete();
        return redirect() -> route('home');
    }

    // create
    public function create(){
        return view('pages.personCreate');
    }

    public function store(Request $request){

        $data = $request -> validate([
            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required|date|before:today',
            'height' => 'nullable|integer|min:50|max:300',
        ]);

        $person = new Person();

        $person -> firstName = $data['firstName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> height = $data['height'];

        $person->save();

        return redirect()->route('home');
    }

    // edit
    public function edit(Person $person){
        return view('pages.personEdit', compact('person'));
    }

    public function update(Request $request, Person $person) {
        $data = $request -> validate([
            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required|date|before:today',
            'height' => 'nullable|integer|min:50|max:300',
        ]);

        $person -> firstName = $data['firstName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> height = $data['height'];

        $person->save();

        return redirect()->route('person.show', $person);
    }
}
