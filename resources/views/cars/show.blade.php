
    <h1>Car Details</h1>
    <p><strong>Car Plate:</strong> {{ $car->car_plate }}</p>
    <p><strong>Car Model:</strong> {{ $car->car_model }}</p>
    <p><strong>Car Status:</strong> {{ $car->car_status }}</p>
    <p><strong>Rent Price Per Day:</strong> {{ $car->rent_price_per_day }}</p>
    <p><strong>Rent Price Per Hour:</strong> {{ $car->rent_price_per_hour }}</p>
    <a href="{{ route('cars.index') }}">Back to List</a>
