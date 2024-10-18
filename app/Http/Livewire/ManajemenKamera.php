<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ManajemenKamera extends Component
{
    public function render()
    {
        return view('livewire.manajemen-kamera')->extends('layouts.app');
    }
}
