<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PengirimanController;
use Illuminate\Http\Request;


class Pengiriman extends PengirimanController{
    public $id;
    public $layanan;
    public $asal;
    public $tujuan;
    public $berat_gram;
    public $estimasi;
    public $jenis_pengiriman;
    

    public static function showAllPengiriman($asal, $tujuan, $berat_gram)
    {
        $results = DB::select("SELECT 
                    nama_ekspedisi,
                    nama_layanan,
                    deskripsi_layanan,
                    harga_pergram,
                    estimasi 
                    from pengiriman LEFT JOIN layanan ON layanan.id=pengiriman.layanan_id
                                    LEFT JOIN ekspedisi ON ekspedisi.id=layanan.ekspedisi_id 
                    WHERE 
                    `asal`='{$asal}' and 
                    `tujuan`='{$tujuan}' and 
                    `berat_gram`='{$berat_gram}'");
        return $results;

    }


}