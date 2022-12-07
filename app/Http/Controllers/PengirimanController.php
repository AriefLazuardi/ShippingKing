<?php
namespace App\Http\Controllers;
use App\Models\Pengiriman;
use Illuminate\Http\Request;

Class PengirimanController extends Controller{

    public function periksa(Request $request)
    {
      $periksa = Pengiriman::showAllPengiriman($request->asal, $request->tujuan, $request->berat_gram);
      return $periksa;
    }
}