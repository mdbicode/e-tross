<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomProductController extends Controller
{
    public function index()
    {
        return view('custom.index');
    }

    public function kain()
    {
        return view('custom.kain');
    }

    public function post_kain(Request $request)
    {
        $validatedData = $request->validate([
            'kain' => 'required'
        ]);

        session(['custom_data' => $validatedData]);

        return redirect('/custom/create/lengan');
    }

    public function lengan()
    {
        return view('custom.model_lengan');
    }

    public function post_lengan(Request $request)
    {
        $validatedData = $request->validate([
            'lengan' => 'required'
        ]);

        $custom_data = session('custom_data');
        $custom_data = array_merge($custom_data, $validatedData);

        session(['custom_data' => $custom_data]);

        return redirect('/custom/create/model');
    }

    public function model()
    {
        return view('custom.model_baju');
    }

    public function post_model(Request $request)
    {
        $validatedData = $request->validate([
            'model' => 'required'
        ]);

        $custom_data = session('custom_data');
        $custom_data = array_merge($custom_data, $validatedData);

        session(['custom_data' => $custom_data]);

        return redirect('/custom/create/penerapan-kain');
    }

    public function penerapan_kain()
    {
        return view('custom.penerapan_kain');
    }

    public function post_penerapan_kain(Request $request)
    {
        $validatedData = $request->validate([
            'penerapan_kain' => 'required'
        ]);

        $custom_data = session('custom_data');
        $custom_data = array_merge($custom_data, $validatedData);

        session(['custom_data' => $custom_data]);

        return redirect('/custom/result');
    }

    public function result()
    {
        $custom_result = session('custom_data');
        dd(session('custom_data'));

        return view('custom.result', compact('custom_result'));
    }
}
