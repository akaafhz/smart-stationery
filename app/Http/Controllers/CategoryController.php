<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str; // Penting untuk fungsi Str::slug()

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Koki ngecek dulu: "Namanya udah diisi belum ya?" (Validasi)
        $request->validate([
        'name' => 'required|max:100',
    ]);

    // 2. Koki nyuruh Robot (Model) simpan barang ke laci Gudang (Database)
    Category::create([
        'name' => $request->name,
        'slug' => Str::slug($request->name), // Bikin URL otomatis dari nama (misal: Baju Baru -> baju-baru)
        'description' => $request->description,
        'is_active' => $request->is_active,
    ]);

    // 3. Kalau udah beres, Koki nyuruh pelanggan balik ke halaman daftar kategori
    return redirect('/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 1. Koki nyuruh Robot mencari barang di gudang berdasarkan ID-nya
    $category = Category::findOrFail($id);

    // 2. Kalau barangnya ketemu, Koki nyuruh Robot membuangnya
    $category->delete();

    // 3. Setelah dibuang, pelanggan disuruh lihat daftar kategori lagi (yang sudah update)
    return redirect('/categories');
    }
}
