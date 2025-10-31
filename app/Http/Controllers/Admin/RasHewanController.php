<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RasHewanController extends Controller
{
    /**
     * Menampilkan daftar ras hewan
     */
    public function index()
    {
        $rasList = DB::table('ras_hewan')
            ->join('jenis_hewan', 'ras_hewan.idjenis_hewan', '=', 'jenis_hewan.idjenis_hewan')
            ->select(
                'ras_hewan.idras_hewan',
                'ras_hewan.nama_ras',
                'jenis_hewan.idjenis_hewan',
                'jenis_hewan.nama_jenis_hewan'
            )
            ->orderBy('jenis_hewan.nama_jenis_hewan')
            ->orderBy('ras_hewan.nama_ras')
            ->get();

        return view('dashboard.admin.ras-hewan.index', compact('rasList'));
    }

    /**
     * Form tambah ras hewan baru
     */
    public function create()
    {
        $jenisList = DB::table('jenis_hewan')->orderBy('nama_jenis_hewan')->get();
        return view('dashboard.admin.ras-hewan.create', compact('jenisList'));
    }

    /**
     * Simpan data ras baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_ras' => 'required|string|max:100',
            'idjenis_hewan' => 'required|integer|exists:jenis_hewan,idjenis_hewan',
        ]);

        DB::table('ras_hewan')->insert([
            'nama_ras' => $request->nama_ras,
            'idjenis_hewan' => $request->idjenis_hewan,
        ]);

        return redirect()
            ->route('admin.ras-hewan.index')
            ->with('success', '✅ Ras hewan berhasil ditambahkan!');
    }

    /**
     * Form edit ras hewan
     */
    public function edit($id)
    {
        $ras = DB::table('ras_hewan')->where('idras_hewan', $id)->first();
        $jenisList = DB::table('jenis_hewan')->orderBy('nama_jenis_hewan')->get();

        if (!$ras) {
            return redirect()
                ->route('admin.ras-hewan.index')
                ->with('danger', '❌ Data ras tidak ditemukan.');
        }

        return view('dashboard.admin.ras-hewan.edit', compact('ras', 'jenisList'));
    }

    /**
     * Update data ras
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ras' => 'required|string|max:100',
            'idjenis_hewan' => 'required|integer|exists:jenis_hewan,idjenis_hewan',
        ]);

        DB::table('ras_hewan')
            ->where('idras_hewan', $id)
            ->update([
                'nama_ras' => $request->nama_ras,
                'idjenis_hewan' => $request->idjenis_hewan,
            ]);

        return redirect()
            ->route('admin.ras-hewan.index')
            ->with('success', '✅ Data ras hewan berhasil diperbarui!');
    }

    /**
     * Hapus data ras hewan
     */
    public function destroy($id)
    {
        $deleted = DB::table('ras_hewan')->where('idras_hewan', $id)->delete();

        if ($deleted) {
            return redirect()
                ->route('admin.ras-hewan.index')
                ->with('success', '🗑️ Ras hewan berhasil dihapus!');
        } else {
            return redirect()
                ->route('admin.ras-hewan.index')
                ->with('danger', '❌ Gagal menghapus ras hewan.');
        }
    }
}