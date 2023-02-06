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
}
