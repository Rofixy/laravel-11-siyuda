<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
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
    public function storeFoto(Request $request)
    {
        $request->validate([
            'foto' => ['required', 'mimes:png,jpg', 'max:1024']
        ]);

        $filename = time() . '-foto.' . $request->file->file->extension();
        $request->file->move(public_path('uploads'), $filename); 

        return back()
            ->with('success','You have successfully upload file.')
            ->with('file', $filename);
    }
}
