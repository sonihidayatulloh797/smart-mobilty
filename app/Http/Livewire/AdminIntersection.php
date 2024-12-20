<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HeaderIntersection;

class AdminIntersection extends Component
{
    public $tanggal;
    public $ditanganiOleh;
    public $kota;
    public $simpang;
    public $ukuranKota;
    public $perihal;
    public $periode;

    public $dataEntries = [];

    public function submit()
    {
        // Validasi input jika diperlukan
        $this->validate([
            'tanggal' => 'required|date',
            'ditanganiOleh' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'simpang' => 'required|string|max:255',
            'ukuranKota' => 'nullable|string|max:255',
            'perihal' => 'required|string|max:255',
            'periode' => 'required|string|max:255',
        ]);

        // Menyimpan data ke dalam array
        $this->dataEntries[] = [
            'tanggal' => $this->tanggal,
            'ditanganiOleh' => $this->ditanganiOleh,
            'kota' => $this->kota,
            'simpang' => $this->simpang,
            'ukuranKota' => $this->ukuranKota,
            'perihal' => $this->perihal,
            'periode' => $this->periode,
        ];

        // Reset input setelah submit
        $this->reset(['tanggal', 'ditanganiOleh', 'kota', 'simpang', 'ukuranKota', 'perihal', 'periode']);
    }

    public function render()
    {
        return view('livewire.admin-intersection')->extends('layouts.apps');
    }
}
