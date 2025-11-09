<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Produk;


class ProdukCrud extends Component
{
use WithFileUploads;

    public $produks, $nama, $deskripsi, $kategori, $harga, $gambar, $produk_id;
    public $isOpen = false;

    public function render()
    {
        $this->produks = Produk::latest()->get();
        return view('livewire.produk-crud')->layout('layout.admin');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->isOpen = true;
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $gambarPath = $this->gambar ? $this->gambar->store('produk', 'public') : $this->gambar;

        Produk::updateOrCreate(['id' => $this->produk_id], [
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'kategori' => $this->kategori,
            'harga' => $this->harga,
            'gambar' => $gambarPath,
        ]);

        session()->flash('message', $this->produk_id ? 'Produk berhasil diupdate.' : 'Produk berhasil ditambahkan.');
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $this->produk_id = $id;
        $this->nama = $produk->nama;
        $this->deskripsi = $produk->deskripsi;
        $this->kategori = $produk->kategori;
        $this->harga = $produk->harga;
        $this->gambar = $produk->gambar;
        $this->isOpen = true;
    }

    public function delete($id)
    {
        Produk::find($id)->delete();
        session()->flash('message', 'Produk berhasil dihapus.');
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->nama = '';
        $this->deskripsi = '';
        $this->kategori = '';
        $this->harga = '';
        $this->gambar = null;
        $this->produk_id = '';
    }
}
