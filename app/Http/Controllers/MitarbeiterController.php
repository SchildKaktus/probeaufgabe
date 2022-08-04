<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Mitarbeiter;

class MitarbeiterController extends Controller
{
    /** 
     * 
     * 
     *@param \Illuminate\Http\Request $request 
     *@return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|unique:mitarbeiters|email',
            'vorname' => 'required',
            'nachname' => 'required',
            'firmen_id' => 'required|integer',
            'name' => 'nullable'
        ]);

        Mitarbeiter::create($attributes);

        return redirect('/Mitarbeiter/Index')->with('message', $attributes);
    }

}
