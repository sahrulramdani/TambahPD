<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {

        $pajak = [
            ['jenis_pajak'=>'Hotel', 'pajak'=>'Rp.19.409.200','wpbaru'=>'99','wptotal'=>'201'],
            ['jenis_pajak'=>'Restoran', 'pajak'=>'Rp.7.800.000','wpbaru'=>'99','wptotal'=>'201'],
            ['jenis_pajak'=>'Hiburan', 'pajak'=>'Rp.7.800.000','wpbaru'=>'99','wptotal'=>'201'],
            ['jenis_pajak'=>'Reklame', 'pajak'=>'Rp.7.800.000','wpbaru'=>'99','wptotal'=>'201'],
            ['jenis_pajak'=>'Parkir', 'pajak'=>'Rp.3.000.000','wpbaru'=>'99','wptotal'=>'201'],
            ['jenis_pajak'=>'Penerangan Jalan', 'pajak'=>'Rp.3.000.000','wpbaru'=>'99','wptotal'=>'201'],
            ['jenis_pajak'=>'Air Tanah', 'pajak'=>'Rp.3.000.000','wpbaru'=>'99','wptotal'=>'201'],
            ['jenis_pajak'=>'Burung Walet', 'pajak'=>'Rp.3.000.000','wpbaru'=>'99','wptotal'=>'201'],
            ['jenis_pajak'=>'Mineral Bukan Logam dan Batuan', 'pajak'=>'Rp.3.000.000','wpbaru'=>'99','wptotal'=>'201'],
            ['jenis_pajak'=>'PBB', 'pajak'=>'Rp.3.000.000','wpbaru'=>'99','wptotal'=>'201'],
            ['jenis_pajak'=>'BPHTB', 'pajak'=>'Rp.3.000.000','wpbaru'=>'99','wptotal'=>'201'],
        ];

        $wilayah = [
            ['kecamatan'=>'Bungus Teluk Kabung', 'pajak'=>'Rp.19.409.200','wpbaru'=>'99','wptotal'=>'201'],
            ['kecamatan'=>'Kota Tangah', 'pajak'=>'Rp.19.409.200','wpbaru'=>'99','wptotal'=>'201'],
            ['kecamatan'=>'Kuranji', 'pajak'=>'Rp.19.409.200','wpbaru'=>'99','wptotal'=>'201'],
            ['kecamatan'=>'Lubuk Begalung', 'pajak'=>'Rp.19.409.200','wpbaru'=>'99','wptotal'=>'201'],
            ['kecamatan'=>'Lubuk Kilangan', 'pajak'=>'Rp.19.409.200','wpbaru'=>'99','wptotal'=>'201'],
            ['kecamatan'=>'Nanggalo', 'pajak'=>'Rp.19.409.200','wpbaru'=>'99','wptotal'=>'201'],
            ['kecamatan'=>'Padang Barat', 'pajak'=>'Rp.19.409.200','wpbaru'=>'99','wptotal'=>'201'],
            ['kecamatan'=>'Padang Selatan', 'pajak'=>'Rp.19.409.200','wpbaru'=>'99','wptotal'=>'201'],
            ['kecamatan'=>'Padang Timur', 'pajak'=>'Rp.19.409.200','wpbaru'=>'99','wptotal'=>'201'],
            ['kecamatan'=>'Padang Utara', 'pajak'=>'Rp.19.409.200','wpbaru'=>'99','wptotal'=>'201'],
            ['kecamatan'=>'Pauh', 'pajak'=>'Rp.19.409.200','wpbaru'=>'99','wptotal'=>'201'],

        ];
        
        $data = [
            'halaman' => 'Dashboard',
            'pajak'  => $pajak,
            'wilayah' => $wilayah
        ];

        return view('pages/dashboard', $data);
    }
}