<?php

namespace App\Http\Controllers;
use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index()
    {
        $autos = Auto::all();
        return response()->json($autos);
    }

    public function store(Request $request)
    {
        $auto = Auto::create($request->all());
        return response()->json($auto, 201);
    }

    public function show($id)
    {
        $auto = Auto::find($id);
        if (!$auto) {
            return response()->json(['message' => 'Auto not found'], 404);
        }
        return response()->json($auto);
    }

    public function update(Request $request, $id)

    {
        $auto = Auto::find($id);
        if (!$auto) {
            return response()->json(['message' => 'Auto not found'], 404);
        }
        $auto->update($request->all());
        return response()->json($auto);
    }

    public function destroy($id)
    {
        $auto = Auto::find($id);
        if (!$auto) {
            return response()->json(['message' => 'Auto not found'], 404);
        }
        $auto->delete();
        return response()->json(['message' => 'Auto deleted'], 204);
    }
}