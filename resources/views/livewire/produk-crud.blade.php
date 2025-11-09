<div class="p-6">
    <h2 class="text-xl font-bold mb-4">Manajemen Produk</h2>

    <button wire:click="create" class="bg-orange-500 text-white px-4 py-2 rounded mb-4">+ Tambah Produk</button>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 p-2 mb-3 rounded">
            {{ session('message') }}
        </div>
    @endif

    <table class="w-full border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="border p-2">Nama</th>
                <th class="border p-2">Kategori</th>
                <th class="border p-2">Harga</th>
                <th class="border p-2">Gambar</th>
                <th class="border p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
                <tr>
                    <td class="border p-2">{{ $produk->nama }}</td>
                    <td class="border p-2">{{ ucfirst($produk->kategori) }}</td>
                    <td class="border p-2">Rp{{ number_format($produk->harga) }}</td>
                    <td class="border p-2">
                        @if($produk->gambar)
                            <img src="{{ asset('storage/'.$produk->gambar) }}" class="w-16 h-16 object-cover rounded">
                        @endif
                    </td>
                    <td class="border p-2">
                        <button wire:click="edit({{ $produk->id }})" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</button>
                        <button wire:click="delete({{ $produk->id }})" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if($isOpen)
        <div class="mt-6 bg-gray-50 p-4 rounded-lg shadow">
            <input type="text" wire:model="nama" placeholder="Nama Produk" class="p-2 border w-full mb-2">
            <textarea wire:model="deskripsi" placeholder="Deskripsi" class="p-2 border w-full mb-2"></textarea>
            <select wire:model="kategori" class="p-2 border w-full mb-2">
                <option value="">Pilih Kategori</option>
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
            </select>
            <input type="number" wire:model="harga" placeholder="Harga" class="p-2 border w-full mb-2">
            <input type="file" wire:model="gambar" class="mb-2">

            <div class="flex gap-2">
                <button wire:click="store" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
                <button wire:click="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</button>
            </div>
        </div>
    @endif
</div>
