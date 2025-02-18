<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vendor;

class VendorController extends Controller
{
    // public function showVendorSelect()
    // {
    //     $vendor = Vendor::all(); // Retrieve all vendors
    //     return $vendor;
    //     return view('vendors.select', ["vendors => $vendor"]); // Pass vendors to the view
    // }
    public function create()
    {
        $vendors = Vendor::paginate(3)->onEachSide(1); // Menampilkan 1 link di setiap sisi dari halaman saat ini; /
        return view('admin.vendor', compact('vendors'));
        // $vendors = Vendor::all(); // Jika Anda ingin menampilkan daftar vendor di form yang sama
        // return view('admin.vendor', compact('vendors'));
        // return view('admin.vendor');
    }
    public function store(Request $request)
{
    // dd($request->all()); // Debug input data
    // Validasi data
    $request->validate([
        'vendor_type' => 'required|string',
        'nama' => 'required|string',
        'alamat' => 'required|string',
        'email' => 'required|email',
        'no_telepon' => 'required|string',
        'penanggung_jawab' => 'required|string',
        'harga' => 'required|numeric|min:0',
        'deskripsi' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'kapasitas' => 'nullable|string',
        'status' => 'nullable|string',
        'jenis_dokumentasi' => 'nullable|string',
        'jenis_undangan' => 'nullable|string',
        // 'bahan_undangan' => 'nullable|string',
    ]);

    // Simpan data vendor
    $vendor = new Vendor();
    $vendor->vendor_type = $request->input('vendor_type');
    $vendor->nama = $request->input('nama');
    $vendor->alamat = $request->input('alamat');
    $vendor->email = $request->input('email');
    $vendor->no_telepon = $request->input('no_telepon');
    $vendor->penanggung_jawab = $request->input('penanggung_jawab');// Ganti 'Default Value' sesuai kebutuhan
    $vendor->harga = $request->input('harga');
    $vendor->deskripsi = $request->input('deskripsi');
    $vendor->kapasitas = $request->input('kapasitas');
    $vendor->status = $request->input('status');
    $vendor->jenis_dokumentasi = $request->input('jenis_dokumentasi');
    $vendor->jenis_undangan = $request->input('jenis_undangan');
    // $vendor->bahan_undangan = $request->input('bahan_undangan');

    // Handle file upload
    // if ($request->hasFile('image')) {
    //     $imageName = time().'.'.$request->image->getClientOriginalExtension();
    //     $request->image->move(public_path('storage'), $imageName);
    //     $vendor->image = $imageName;
    // }
    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('storage'), $imageName);
        $vendor->image = 'storage/' . $imageName; // Update the path to match the URL format
    }

    $vendor->save();

    return redirect()->route('vendors.create')->with('success', 'Data vendor berhasil ditambahkan!');
    }
    //  // Menampilkan daftar vendor
     public function view_vendor()
     {
        $vendors = Vendor::paginate(3)->onEachSide(1); // Menampilkan 1 link di setiap sisi dari halaman saat ini
        return view('admin.vendor', compact('vendors'));
        //  $vendors = Vendor::all();
        //  return view('admin.vendor', compact('vendors'));
     }
    //  public function view_add_vendor()
    //  {
    //     $vendors = Vendor::all();
    //     return $vendor;
    //     return view('admin.vendor', ["vendors => $vendor"]);
    //}
     //menghapus data vendor
     public function destroy($id)
     {
        $vendor = Vendor::findOrFail($id);
        $vendor->delete();

        return redirect()->route('vendors.index')->with('success', 'Data Vendor telah berhasil dihapus!');
        if ($vendor) {
            $vendor->delete();
            return redirect()->route('vendors.index')->with('success', 'Vendor deleted successfully');
        } else {
            return redirect()->route('vendors.index')->with('error', 'Vendor not found');
        }
        //  return view('admin.vendor', compact('vendors'));
     }
     //edit& update data
    //  public function edit($id)
    //  {
    //        // Metode untuk menampilkan form edit
    //     $vendor = Vendor::findOrFail($id);
    //     return view('admin.edit', compact('vendor'));
        
    //  }
    //edit 
    public function edit($custom_id)
    {
        // Temukan vendor berdasarkan custom_id
        $vendor = Vendor::where('custom_id', $custom_id)->firstOrFail();
        // Kirim data vendor ke view
        return view('admin.edit', compact('vendor'));
    }

     public function update(Request $request, $custom_id)
    {
        $request->validate([
            'vendor_type' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_telepon' => 'required',
            'penanggung_jawab' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
            'image' => 'nullable|image',
            'kapasitas' => 'nullable',
            'status' => 'nullable',
            'jenis_dokumentasi' => 'nullable',
            'jenis_undangan' => 'nullable',
            // 'bahan_undangan' => 'nullable',
        ]);

        $vendor = Vendor::find($custom_id);
        if ($vendor) {
            $vendor->vendor_type = $request->vendor_type;
            $vendor->nama = $request->nama;
            $vendor->alamat = $request->alamat;
            $vendor->email = $request->email;
            $vendor->no_telepon = $request->no_telepon;
            $vendor->penanggung_jawab = $request->penanggung_jawab;
            $vendor->harga = $request->harga;
            $vendor->deskripsi = $request->deskripsi;
            $vendor->kapasitas = $request->kapasitas;
            $vendor->status = $request->status;
            $vendor->jenis_dokumentasi = $request->jenis_dokumentasi;
            $vendor->jenis_undangan = $request->jenis_undangan;
            // $vendor->bahan_undangan = $request->bahan_undangan;

            if ($request->hasFile('image')) {
                $fileName = time().'.'.$request->image->extension();  
                $request->image->move(public_path('images'), $fileName);
                $vendor->image = $fileName;
            }

            $vendor->save();
            return redirect()->route('vendors.index')->with('success', 'Data Vendor berhasil diupdate');
        } else {
            return redirect()->route('vendors.index')->with('error', 'Vendor tidak ditemukan');
        }
    
    }
    public function show($custom_id)
    {
        // Temukan vendor berdasarkan custom_id
    $vendor = Vendor::where('custom_id', $custom_id)->firstOrFail();
    
    // Kirim data vendor ke view
    return view('admin.detail', compact('vendor'));
    }   

    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    
    //     // Cari vendor berdasarkan nama, alamat, atau atribut lainnya yang relevan 
    //     $vendors = Vendor::where('nama', 'like', "%{$query}%")
    //                      ->orWhere('alamat', 'like', "%{$query}%")
    //                      ->orWhere('vendor_type', 'like', "%{$query}%")
    //                      ->get();
    
    //     // Mengirimkan data ke view dengan variabel 'vendors'
    //     return view('admin.search', compact('vendors'));
    // }
    public function ajaxSearch(Request $request)
    {
        $query = $request->input('query');

        // Cari vendor berdasarkan nama, alamat, atau atribut lainnya yang relevan
        $vendors = Vendor::where('nama', 'like', "%{$query}%")
                        ->orWhere('alamat', 'like', "%{$query}%")
                        ->orWhere('vendor_type', 'like', "%{$query}%")
                        ->get();

        return response()->json(['vendors' => $vendors]);
    }

    
    
}
