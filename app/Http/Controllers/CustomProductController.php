<?php

namespace App\Http\Controllers;

use App\Models\Custom;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomProductController extends Controller
{
    public function index()
    {
        return view('custom.index');
    }

    public function kain()
    {
        $products = Product::where('category', 'kain')->get();
        return view('custom.kain', compact('products'));
    }
    public function pakaian()
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

        return redirect('/custom/create/size');
    }

    public function size()
    {
        return view('custom.size');
    }
    public function post_size(Request $request)
    {
        $validatedData = $request->validate([
            'lebar_dada' => 'required',
            'lebar_pundak' => 'required',
            'panjang_baju' => 'required',
            'panjang_lengan' => 'required'
        ]);

        $custom_data = session('custom_data');
        $custom_data = array_merge($custom_data, $validatedData);

        session(['custom_data' => $custom_data]);

        return redirect('/custom/create/result');
    }

    public function result()
    {
        $custom_result = session('custom_data');

        return view('custom.result', compact('custom_result'));
    }
    
    public function detail($id)
    {
        $custom = Custom::find($id)->get();

        return view('dahsboard.detail', compact('custom'));
    }
    
    public function post_result(Request $request)
    {
        $request->validate([
            'kain' => 'required|string',
            'model' => 'required|string',
            'penerapan_kain' => 'required|string',
            'lebar_dada' => 'required|numeric',
            'lebar_pundak' => 'required|numeric',
            'panjang_baju' => 'required|numeric',
            'panjang_lengan' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'alamat' => 'required',
        ]);

        $result = new Custom();
        $result->user_id = session()->get('user')['id'];
        $result->kain = $request->kain;
        $result->lengan = $request->lengan;
        $result->model = $request->model;
        $result->penerapan_kain = $request->penerapan_kain;
        $result->lebar_dada = $request->lebar_dada;
        $result->lebar_pundak = $request->lebar_pundak;
        $result->panjang_baju = $request->panjang_baju;
        $result->panjang_lengan = $request->panjang_lengan;
        $result->jumlah = $request->jumlah;
        $result->alamat = $request->alamat;
        $result->payment_method = $request->payment;
        $result->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
        return redirect('/profile');
    }
}
