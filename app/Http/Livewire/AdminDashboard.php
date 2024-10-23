<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AdminDashboard extends Component
{
    public $data = [];
    public $labels = [];
    public $bicycleData = [];
    public $carData = [];
    public $motorcycleData = [];
    public $busData = [];
    public $trainData = [];
    public $truckData = [];

    public function mount()
    {
        $this->fetchApiData();
        $this->prepareChartData();
    }

    public function fetchApiData()
    {
        $response = Http::get('http://167.205.67.248:3001/count_viachle/');

        if ($response->successful()) {
            $this->data = $response->json();
        } else {
            $this->data = ['message' => 'Data gagal diambil'];
        }
    }

    public function prepareChartData()
    {
        foreach ($this->data as $item) {
            $this->labels[] = $item['uploaded'];
            $this->bicycleData[] = $item['bicycle'];
            $this->carData[] = $item['car'];
            $this->motorcycleData[] = $item['motorcycle'];
            $this->busData[] = $item['bus'];
            $this->trainData[] = $item['train'];
            $this->truckData[] = $item['truck'];
        }
    }

    public function render()
    {
        return view('livewire.admin-dashboard')->extends('layouts.apps');
    }
}
