<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminIntersection extends Component
{
    public function render()
    {
        return view('livewire.admin-intersection')->extends('layouts.apps');
    }
}
