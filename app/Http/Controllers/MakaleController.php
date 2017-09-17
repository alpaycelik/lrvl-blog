<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Makale;

class MakaleController extends Controller
{

    public function index() {
        $makaleler = Makale::orderBy('id', 'desc')->get();
       return view('makaleler',compact('makaleler'));
    }

    public function makaleDetay($slug) {
        $makale = Makale::where('slug', $slug)->first();
        return view('makale', compact('makale'));
    }

    public function makaleDuzenle($id) {
        $makale = Makale::find($id);
        return view('makale-duzenle', compact('makale'));
    }

    public function makaleGuncelle(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'baslik' => 'required',
            'icerik' => 'required'
        ]);
        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $request->merge([
            'slug' => str_slug($request->baslik)
        ]);

        Makale::find($id)->update($request->all());
        session()->flash('success', 'Blog yazısı başarıyla güncellendi.');
        return redirect()->back();

    }

    public function yeniMakale() {
        return view('yeni-makale');
    }

    public function makaleEkle(Request $request) {
        $validator = Validator::make($request->all(), [
            'baslik' => 'required',
            'icerik' => 'required'
        ]);
        if ($validator->fails()){
           return redirect()->back()->withInput()->withErrors($validator);
        }

        $request->merge([
            'slug' => str_slug($request->baslik)
        ]);

        Makale::create($request->all());

        return redirect()->back();
    }
}
