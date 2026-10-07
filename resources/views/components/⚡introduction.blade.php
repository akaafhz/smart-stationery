<?php
use Livewire\Component;

new class extends Component {
    // Ini adalah Property/State
    public $nama = "Budi";
    public $kelas = "XII SIJA";
    public $kelompok = "Kelompok 1";

    // Ini adalah Action
    public function ubahNama()
    {
        $this->nama = "Hafiz Arintaka";
        $this->kelas = "XII SIJA - A";
        $this->kelompok = "Kelompok 4";
    }
};
?>

<div>
    <h1>E-STATIONERY</h1>
    <h2>Livewire Introduction</h2>

    <p>Nama: {{ $nama }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <p>Kelompok: {{ $kelompok }}</p>

    <p>
        <input type="text" wire:model="nama" placeholder="Masukkan Nama">
    </p>

    <br>
    <button wire:click="ubahNama" placeholder="Ubah Nama" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Ubah Nama
    </button>
</div>
