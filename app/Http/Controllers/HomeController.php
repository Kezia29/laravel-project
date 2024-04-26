<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katgori;
use App\Models\Makanan;

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
    public function view_makanan()
    {
        // query builder
        // $makanans = DB::table('makanans')->get();

        // eloquent
        $makanans = Makanan::all();
        
        // dd($makanans)

        return view('makanan', [
            'foods' => $makanans,
        ]);
        
    }
    public function test_query_builder()
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
    public function test_eloquent()
    {
        // SELECT DATA
        $makanans = Makanan::all();

        // dd($makanans);
        // INSERT DATA CARA 1 
        // Makanan::create([
        //     'kode_makanan' => 'm001', 
        //     'nama' => 'Arip',
        //     'kategori' => 'tampan', 
        //     'harga' => 100000000000, 
        //     'ket' => 'dijual',
        // ]);
        // INSERT DATA CARA 2
        // $makanan = new Makanan;
        // $makanan->kode_makanan = 'm100';
        // $makanan->nama = 'Kuaci';
        // $makanan->kategori = 'makanan';
        // $makanan->harga = 10000; 
        // $makanan->ket = 'tersedia'; 
        // $makanan->save();
        // Hapus data cara 1
        // Makanan::find('m001')->delete();
        // Hapus data cara 2
        // $makanan = Makanan::find('m☺01');
        // $makanan->delete();
        // Update data
        // $makanan = Makanan::find('m100');
        // $makanan->nama = 'telor asin'; 
        // $makanan->kategori = 'snack'; 
        // $makanan->harga = 5000;
        // $makanan->ket  = 'tersedia';
        // $makanan->save();

        // return 'masuk test';
    }
}
