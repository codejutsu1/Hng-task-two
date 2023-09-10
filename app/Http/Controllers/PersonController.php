<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonCollection;
use App\Http\Requests\StorePersonRequest;

class PersonController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PersonCollection(Person::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request)
    {
        $person = Person::create($request->validated());

        return $this->success(['persons' => new PersonResource($person)], '', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        return $this->success(['persons' => new PersonResource($person)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }
}
