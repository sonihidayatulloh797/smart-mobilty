<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\HeaderIntersection;
use App\Models\AnalisissaIInterKondisiLapangan;
use App\Models\AnalisissaIIRecapitulation;

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
    public $kondisiLapanganEntries = [];

    public function mount()
    {
        $this->kondisiLapanganEntries = AnalisissaIInterKondisiLapangan::all();
    }

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
        // $this->dataEntries[] = [
        //     'tanggal' => $this->tanggal,
        //     'ditanganiOleh' => $this->ditanganiOleh,
        //     'kota' => $this->kota,
        //     'simpang' => $this->simpang,
        //     'ukuranKota' => $this->ukuranKota,
        //     'perihal' => $this->perihal,
        //     'periode' => $this->periode,
        // ];

        // Menyimpan data ke database
        HeaderIntersection::create([
            'tanggal' => $this->tanggal,
            'ditanganiOleh' => $this->ditanganiOleh,
            'kota' => $this->kota,
            'simpang' => $this->simpang,
            'ukuranKota' => $this->ukuranKota,
            'perihal' => $this->perihal,
            'periode' => $this->periode,
        ]);

        // Reset input setelah submit
        $this->reset(['tanggal', 'ditanganiOleh', 'kota', 'simpang', 'ukuranKota', 'perihal', 'periode']);
    }

    public function render()
    {
        $dataHeaderIntersections = HeaderIntersection::all(); // Ambil data dari model HeaderIntersection
        $dataKondisiLapangan = AnalisissaIInterKondisiLapangan::all();
        $dataSAIIRecapitulation = AnalisissaIIRecapitulation::all();
        return view('livewire.admin-intersection', [
            'dataHeaderIntersections' => $dataHeaderIntersections,
            'dataKondisiLapangan' => $dataKondisiLapangan,
            'dataSAIIRecapitulation' => $dataSAIIRecapitulation
        ])->extends('layouts.apps');
    }
}

