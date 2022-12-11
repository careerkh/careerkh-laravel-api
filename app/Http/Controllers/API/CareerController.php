<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::all();
        return response()->json($careers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required|max:255',
            'href' => 'required',
            'industry' => 'required',
            'description' => 'required',
            'caption' => 'required',
            'term' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'date' => 'required', 'imageUrl' => 'required',

        ]);

        $newCareer = new Career([
            'position' => $request->get('position'),
            'href' => $request->get('href'),
            'industry' => $request->get('industry'),
            'description' => $request->get('description'),
            'caption' => $request->get('caption'),
            'term' => $request->get('term'),
            'location' => $request->get('location'),
            'salary' => $request->get('salary'),
            'date' => $request->get('date'),
            'imageUrl' => $request->get('imageUrl'),
        ]);

        $newCareer->save();

        return response()->json($newCareer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $career = Career::findOrFail($id);
        return response()->json($career);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $career = Career::findOrFail($id);

        $request->validate([
            'position' => 'required|max:255',
            'href' => 'required',
            'industry' => 'required',
            'description' => 'required',
            'caption' => 'required',
            'term' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'date' => 'required', 'imageUrl' => 'required',
        ]);

        $career->position = $request->get('position');
        $career->href = $request->get('href');
        $career->industry = $request->get('industry');
        $career->description = $request->get('description');
        $career->caption = $request->get('caption');
        $career->term = $request->get('term');
        $career->location = $request->get('location');
        $career->salary = $request->get('salary');
        $career->date = $request->get('date');
        $career->imageUrl = $request->get('imageUrl');
        $career->save();

        return response()->json($career);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();

        return response()->json($career::all());
    }
}