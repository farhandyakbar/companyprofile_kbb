<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Barang;
use App\Models\BarangDetail;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::get();
        return view('admin.barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::get();
        return view('admin.barang.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'nama' => 'required|unique:barang'
        ]);
        $insert = Barang::create($request->all());
        
        foreach ($request->gambar as $index => $gambar) {
            if($request->file('gambar')[$index]) {
                $uploadedFile = $request->file('gambar')[$index];
                $extension = '.'.$uploadedFile->getClientOriginalExtension();
                $filename  =$insert->id."_".($index+1)."_".date("dmy-His").$extension;
                $uploadedFile->move(base_path('public/images/gambar'), $filename);          
                
                $insertGambar = BarangDetail::create([
                    "id_barang" =>$insert->id,
                    "gambar" => $filename
                ]);   
            }
        }

        return redirect()->route('barang.index')->with('berhasil', 'Data ' .$request->nama.' Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        $barangDetail = BarangDetail::where('id_barang',$id)->get();
        // dd($barangDetail);
        return view('admin.barang.detail', compact('barang','barangDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::get();
        $barang = Barang::find($id);
        $barangDetail = BarangDetail::where('id_barang',$id)->get();
        // dd($barangDetail);
        return view('admin.barang.edit', compact('kategori','barang','barangDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Barang::where('id', $barang->id)
                ->update([
                    'nama' => $request->nama,
                ]);
        return redirect('barang')->with('notif', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);
        BarangDetail::where('id_barang', $barang->id)->delete();
        return redirect('barang')->with('info', 'Data Berhasil Dihapus');
    }
}
