<?php
namespace App\Http\Controllers;
use App\Models\Pengiriman;
use Illuminate\Http\Request;

Class PengirimanController extends Controller{
    public function periksa()
    {
        
    }

    public function input()
    {
      
    }
    public function cari(Request $request)
    {
      $cari = Pengiriman::showAllPengiriman($request->asal, $request->tujuan, $request->berat_gram);
      return $cari;
    }
}