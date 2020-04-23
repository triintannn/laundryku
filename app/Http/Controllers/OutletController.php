<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Outlet;

class OutletController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$outlet = DB::table('tb_outlet')->get();
    	// mengirim data pegawai ke view index
    	return view('admin/outlet/outlet',['outlet' => $outlet]);
    }

    public function tambah()
	{
		// memanggil view tambah
		return view('admin/outlet/form');
	}

	public function store(Request $request)
	{
		$rule = [
            'nama' => 'required',
            'alamat' => 'required',
            'tlp' => 'required'
        ];
        $this->validate($request, $rule);

        $status = Outlet::create([
             'nama' => $request->nama,
             'alamat' => $request->alamat,
             'tlp' => $request->tlp
            ]);

        if ($status) {
            return redirect('/admin/outlet')->with('success','Data Berhasil ditambahkan');
        } else {
            return redirect('/admin/outlet/form')->with('error','Data Gagal ditambahkan');
        }
	 
	}

	public function edit(Request $request, $id)
    {
        $outlet['outlet'] = \App\Outlet::find($id);
        return view('admin/outlet/edit', $outlet);
    }

    public function update(Request $request, $id)
	{
		$rule = [
            'nama' => 'required',
            'alamat' => 'required',
            'tlp' => 'required',
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);

        $status = Outlet::where('id', $id)->update($input);

        if ($status) {
            return redirect('/admin/outlet')->with('success','Data Berhasil ditambahkan');
        } else {
            return redirect('/admin/outlet/form')->with('error','Data Gagal ditambahkan');
        }
	 
	}

	public function hapus($id)
    {
    	// menghapus data pegawai berdasarkan id yang dipilih
    	DB::table('tb_outlet')->where('id',$id)->delete();	
    	// alihkan halaman ke halaman pegawai
    	return redirect('admin/outlet');
    }
    
}