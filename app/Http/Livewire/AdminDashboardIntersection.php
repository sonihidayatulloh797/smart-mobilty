<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\VehicleIntersection; // Pastikan model ini di-import

class AdminDashboardIntersection extends Component
{
    public $labels = [];
    public $bicycleData = [];
    public $carData = [];
    public $motorcycleData = [];
    public $busData = [];
    public $trainData = [];
    public $truckData = [];

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        // Mengambil data dari database
        $intersections = VehicleIntersection::select('month', 'type', 'count')->get();

        // Jika tidak ada data, isi dengan nilai default
        if ($intersections->isEmpty()) {
            $this->labels = ['No Data'];
            $this->bicycleData = [0];
            $this->carData = [0];
            $this->motorcycleData = [0];
            $this->busData = [0];
            $this->trainData = [0];
            $this->truckData = [0];
            return;
        }

        $intersections = $intersections->groupBy('month');

        foreach ($intersections as $month => $data) {
            $this->labels[] = $month;

            foreach ($data as $item) {
                switch ($item->type) {
                    case 'Bicycle':
                        $this->bicycleData[] = $item->count;
                        break;
                    case 'Car':
                        $this->carData[] = $item->count;
                        break;
                    case 'Motorcycle':
                        $this->motorcycleData[] = $item->count;
                        break;
                    case 'Bus':
                        $this->busData[] = $item->count;
                        break;
                    case 'Train':
                        $this->trainData[] = $item->count;
                        break;
                    case 'Truck':
                        $this->truckData[] = $item->count;
                        break;
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.admin-dashboard')->extends('layouts.apps');
    }
}
