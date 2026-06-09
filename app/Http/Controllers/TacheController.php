<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tache $tache)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tache $tache)
    {
        $fields = $request->validate([
            'titre' => 'sometimes|required|string|max:255',
            'details' => 'nullable|string',
            'etat' => 'sometimes|required|boolean',
            'priorite' => ['sometimes', 'required', Rule::in(['top priority', 'very high priority', 'high priority', 'normal priority', 'low priority'])],
            'id_projet' => 'sometimes|required|exists:projets,id',
            'id_user' => 'sometimes|required|exists:users,id',
        ]);

        $tache->update($fields);

        return response()->json($tache, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tache $tache)
    {
        //
    }
}
