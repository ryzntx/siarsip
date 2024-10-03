<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DokumenMasuk;
use App\Models\DokumenKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    protected $user;
    public function dashboard()
    {

        return view('dashboard');
    }

    // USER
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function kelola_user()
    {
        $user = User::all();
        return view('admin.kelola_user', compact('user'));
    }

    public function add_user()
    {
        return view('admin.add_user');
    }

    public function insert_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:15',
            'role' => 'required',
        ], [
            'name.required' => 'Nama user wajib diisi!',
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Format email tidak valid!',
            'email.unique' => 'Email sudah terdaftar!',
            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password minimal 6 karakter!',
            'password.max' => 'Password maximal 15 karakter!',
            'role.required' => 'Role wajib diisi!',
        ]);

        // $request->validate([
        //     'name' => 'required',
        //     'email'
        // ])

    // $data = [
    //     'name' => Request()->name,
    //     'email' => Request()->email,
    //     'role' => Request()->role,
    // ];

    $add_user = new User();
    $add_user->name = $request->input('name');
    $add_user->email = $request->input('email');
    $add_user->password = bcrypt($request->input('password'));
    $add_user->role = $request->input('role');
    $add_user->save();

    // User::create($data);
    return redirect()->route('admin.kelola_user')->with('pesan', 'Data berhasil ditambahkan!');
    // $this -> User->addData($data);
    // return redirect()->route('user')->with('pesan','data berhasil ditambahkan!!');
}

    public function delete_user($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('pesan', 'Data berhasil dihapus!');
        // $this->user->deleteData($id);
        // return redirect()->back()->with('pesan','data berhasil dihapus!!');
    }


    // TAMBAH DOKUMEN
    public function tambah_dokumen()
    {
        return view('admin.tambah_dokumen');
    }

    // LAPORAN
    public function rekap()
    {
        return view('admin.rekap_dokumen');
    }



    // public function store(Request $request)
    // {
    //     // Validasi input
    //     $validated = $request->validate([
    //         'dokumen_id_masuk' => 'nullable|string',
    //         'dokumen_id_keluar' => 'nullable|string',
    //         'nama_dokumen' => 'required|string|max:255',
    //         'tanggal_dokumen' => 'required|date',
    //         'nama_pengirim' => 'nullable|string',
    //         'nama_penerima' => 'nullable|string',
    //         'file_dokumen' => 'required|file|mimes:pdf,doc,docx|max:2048',
    //         'keterangan_masuk' => 'nullable|string',
    //         'keterangan_keluar' => 'nullable|string',
    //     ]);

    //     // Cek apakah dokumen masuk atau keluar
    //     if ($request->has('dokumen_id_masuk')) {
    //         // Proses untuk dokumen masuk
    //         $dokumenType = 'masuk';
    //         $dokumenId = $request->dokumen_id_masuk;
    //         $filePath = $this->handleFileUpload($request, 'file_dokumen', 'dokumen_masuk');
    //         $data = [
    //             'dokumen_id' => $dokumenId,
    //             'type' => $dokumenType,
    //             'nama_dokumen' => $request->nama_dokumen,
    //             'tanggal_dokumen' => $request->tanggal_dokumen,
    //             'nama_pengirim' => $request->nama_pengirim,
    //             'keterangan' => $request->keterangan_masuk,
    //             'file_path' => $filePath,
    //         ];
    //     } else {
    //         // Proses untuk dokumen keluar
    //         $jenis_dokumen = 'keluar';
    //         $dokumenId = $request->dokumen_id_keluar;
    //         $filePath = $this->handleFileUpload($request, 'dokumen_file_keluar', 'dokumen_keluar');
    //         $data = [
    //             'dokumen_id' => $dokumenId,
    //             'type' => $dokumenType,
    //             'nama_dokumen' => $request->nama_dokumen,
    //             'tanggal_dokumen' => $request->tanggal_dokumen,
    //             'nama_penerima' => $request->penerima_keluar,
    //             'keterangan' => $request->keterangan_keluar,
    //             'file_path' => $filePath,
    //         ];
    //     }

    //     // Simpan data ke database
    //     // Misalnya model Dokumen
    //     \App\Models\DokumenMasuk::create($data);

    //     return redirect()->back()->with('success', 'Dokumen berhasil ditambahkan.');
    // }



    // public function destroy()
    // {

    // }
}

