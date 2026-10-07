<?php
use Livewire\Component;

new class extends Component {
    // 1. Ini adalah State (Menyimpan data sementara)
    public $inputNama = '';
    public $inputKelas = '';
    public $inputKelompok = '';

    // State untuk menyimpan hasil akhir setelah tombol ditekan
    public $hasilNama = '';
    public $hasilKelas = '';
    public $hasilKelompok = '';
    public $sudahDisubmit = false;

    // 2. Ini adalah Action (Berjalan saat tombol diklik)
    public function simpanData()
    {
        // Memindahkan data dari inputan ke hasil akhir
        $this->hasilNama = $this->inputNama;
        $this->hasilKelas = $this->inputKelas;
        $this->hasilKelompok = $this->inputKelompok;
        $this->sudahDisubmit = true; // Menandakan tombol sudah ditekan
    }
};
?>

<!-- 3. Ini adalah View (Tampilan) -->
<div style="font-family: sans-serif; max-width: 400px; margin: 20px; padding: 20px; border: 1px solid #ccc;">
    <h2>Form Data Siswa</h2>

    <!-- Input dengan Data Binding (wire:model) -->
    <div style="margin-bottom: 10px;">
        <label>Nama:</label><br>
        <input type="text" wire:model="inputNama" style="width: 100%; padding: 5px;" placeholder="Masukkan nama...">
    </div>

    <div style="margin-bottom: 10px;">
        <label>Kelas:</label><br>
        <input type="text" wire:model="inputKelas" style="width: 100%; padding: 5px;" placeholder="Masukkan kelas...">
    </div>

    <div style="margin-bottom: 15px;">
        <label>Kelompok:</label><br>
        <input type="text" wire:model="inputKelompok" style="width: 100%; padding: 5px;" placeholder="Masukkan kelompok...">
    </div>

    <!-- Tombol dengan Event Binding (wire:click) -->
    <button wire:click="simpanData" style="padding: 8px 15px; background-color: #28a745; color: white; border: none; cursor: pointer;">
        Tampil Data
    </button>

    <hr style="margin: 20px 0;">

    <!-- Area Output Hasil (Re-render) -->
    <div>
        <h3>Data yang Tersimpan:</h3>
        @if($sudahDisubmit)
            <p><strong>Nama:</strong> {{ $hasilNama }}</p>
            <p><strong>Kelas:</strong> {{ $hasilKelas }}</p>
            <p><strong>Kelompok:</strong> {{ $hasilKelompok }}</p>
        @else
            <p style="color: gray; font-style: italic;">Belum ada data yang disubmit.</p>
        @endif
    </div>
</div>
