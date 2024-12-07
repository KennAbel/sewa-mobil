<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
   <h1>Cars List</h1>
    
    <table>
        <thead>
            <tr >
                <th >Car Plate</th>
                <th>Car Model</th>
                <th>Car Status</th>
                <th>Rent Price Per Day</th>
                <th>Rent Price Per Hour</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr >
                    <td><a href="{{ route('cars.show', $car->id) }}">{{ $car->car_plate }}</a></td>
                    <td>{{ $car->car_model }}</td>
                    <td>{{ $car->car_status }}</td>
                    <td>{{ $car->rent_price_per_day }}</td>
                    <td>{{ $car->rent_price_per_hour }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>


    
</x-app-layout>
