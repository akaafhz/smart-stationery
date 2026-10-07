<?php
use Livewire\Component;

new class extends Component {
    public $categories = [
        'Buku Tulis',
        'Pulpen',
        'Pensil',
        'Penghapus'
    ];

    public function tambahKategori()
    {
        $this->categories[] = 'Spidol Warna';
    }

    public function kosongkanData()
    {
        $this->categories = [];
    }
};
?>

<div class="p-8 max-w-md mx-auto bg-white rounded-xl shadow-md space-y-4">
    <h2 class="text-2xl font-bold text-gray-800 border-b pb-2">CATEGORY PREVIEW</h2>

    @if(count($categories) > 0)
        <ol class="list-decimal list-inside space-y-2 text-gray-700">
            @foreach($categories as $item)
                <li class="bg-gray-100 p-2 rounded">{{ $item }}</li>
            @endforeach
        </ol>
    @else
        <div class="bg-red-100 text-red-700 p-4 rounded text-center">
            <p class="italic">Belum ada kategori. Daftar kosong.</p>
        </div>
    @endif

    <div class="pt-4 flex gap-2">
        <button wire:click="tambahKategori" class="bg-zinc-500 hover:bg-zinc-700 text-white font-bold py-2 px-4 rounded">
            [ Tambah Data ]
        </button>

        <button wire:click="kosongkanData" class="bg-zinc-500 hover:bg-zinc-700 text-white font-bold py-2 px-4 rounded">
            [ Kosongkan ]
        </button>
    </div>
</div>
