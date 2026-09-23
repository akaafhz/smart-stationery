<h1>Tambah Kategori Baru</h1>

<!-- Form ini akan dikirim lewat jalur POST ke URL /categories -->
<form action="/categories" method="POST">
    @csrf

    <div>
        <label>Nama Kategori:</label>
        <input type="text" name="name" required>
    </div>

    <div>
        <label>Deskripsi:</label>
        <textarea name="description"></textarea>
    </div>

    <div>
        <label>Status Aktif:</label>
        <select name="is_active">
            <option value="1">Aktif</option>
            <option value="0">Tidak Aktif</option>
        </select>
    </div>

    <button type="submit">Simpan Kategori</button>
</form>
