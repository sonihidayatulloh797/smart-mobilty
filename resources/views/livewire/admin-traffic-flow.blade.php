<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="fw-bold">Manajemen Kamera</h4>
                    <div class="overflow-x-auto">
                        <table class="w-full border border-gray-300" style="width: 100%">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th class="border border-gray-300 px-4 py-2">Uploaded</th>
                                    <th class="border border-gray-300 px-4 py-2">Bicycle</th>
                                    <th class="border border-gray-300 px-4 py-2">Car</th>
                                    <th class="border border-gray-300 px-4 py-2">Motorcycle</th>
                                    <th class="border border-gray-300 px-4 py-2">Bus</th>
                                    <th class="border border-gray-300 px-4 py-2">Train</th>
                                    <th class="border border-gray-300 px-4 py-2">Truck</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trafficFlows as $flow)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $flow->uploaded }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $flow->bicycle }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $flow->car }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $flow->motorcycle }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $flow->bus }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $flow->train }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $flow->truck }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
