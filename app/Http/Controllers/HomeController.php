<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
    public function tambah()
    {
        return view('input');
    }
    public function simpan (Request $request)
    {
        $nama     = $request->input('nama');
        $kategori = $request->input('kategori');
        $harga    = $request->input('harga');
        $ket      = $request->input('ket');
        return view('result', [
            'nama' => $nama,
            'kategori' => $kategori,
            'harga' => $harga,
            'keterangan' => $ket,
        ]);
    }
    public function test()
    {
        // Query Builder untuk insert 1 data ke dalam table makanans
        // DB::table('makanans')->insert([
        //     'nama' => 'Arip',
        //     'kategori' => 'tampan',
        //     'harga' => 100000000000,
        //     'ket' => 'dijual',
        // ]);
        // Query Builder untuk insert banyak data ke dalam table makanans  
        // DB::table('makanans')->insert([
        //     [
        //         'nama' => 'Danang',
        //         'kategori' => 'tampan',
        //         'harga' => 100000000000,
        //         'ket' => 'dijual'
        //     ],
        //     [
        //         'nama' => 'Alvian',
        //         'kategori' => 'tampan',
        //         'harga' => 100000000000,
        //         'ket' => 'dijual'
        //     ], 
        //     [
        //         'nama' => 'Bintang',
        //         'kategori' => 'tampan',
        //         'harga' => 100000000000,
        //         'ket' => 'dijual'
        //     ],
        //     [
        //         'nama' => 'Angga',
        //         'kategori' => 'tampan',
        //         'harga' => 100000000000,
        //         'ket' => 'dijual'
        //     ],
        // ]);
        //  Query untuk Select data dari table makanans
        // $result = DB::table('makanans')->where('id', 1)->get();  dd($result);
        //  Query untuk delete data dari table makanans
        // DB::table('makanans')->where('id', 1)->delete();
        //  Query untuk Update data dari table makanans
        return 'masuk test';
    }
}
