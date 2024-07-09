<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Album;
use App\Models\Qris;

class HomeController extends Controller
{
    public function welcome(){
        $produk = Album::get();
        return view('home.welcome',compact('produk'));
    }
    public function galeri(){
        $produk = Album::get();
        return view('dashboard.galeri',compact('produk'));
    }
    public function beli(){
        $qris = Qris::get();
        return view('dashboard.beli',compact('qris'));
    }




    public function About(){
        return view('home.about');
    }
    public function item(){
        return view('home.item');
    }
    public function foto(){
        $album = Album::get();
        return view('home.foto',compact('album'));
    }
    public function panduan(){
        return view('home.panduan');
    }
    public function kontak(){
        return view('home.kontak');
    }
    public function detail_spes(){
        return view('home.detail_spes');
    }
    public function detail_med(){
        return view('home.detail_med');
    }
    public function detail_prem(){
        return view('home.detail_prem');
    }
   
    public function detail_stand(){
        return view('home.detail_stand');
    }
   

}
