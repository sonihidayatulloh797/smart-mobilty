<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TrafficFlowVisualization;

class AdminTrafficFlow extends Component
{
    public function render()
    {
        $trafficFlows = TrafficFlowVisualization::all();
        return view('livewire.admin-traffic-flow', ['trafficFlows' => $trafficFlows])->extends('layouts.apps');
    }
}
