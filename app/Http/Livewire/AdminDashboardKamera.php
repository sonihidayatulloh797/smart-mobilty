<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminDashboardKamera extends Component
{
    public function render()
    {
        return view('livewire.admin-dashboard-kamera')->extends('layouts.apps');
    }
}
