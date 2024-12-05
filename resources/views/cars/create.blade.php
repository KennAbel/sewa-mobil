
    <h1>Add Car</h1>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <label for="car_plate">Car Plate:</label>
        <input type="text" name="car_plate" id="car_plate" required>
        <label for="car_model">Car Model:</label>
        <input type="text" name="car_model" id="car_model" required>
        <label for="car_status">Car Status:</label>
        <input type="text" name="car_status" id="car_status" required>
        <label for="rent_price_per_day">Rent Price Per Day:</label>
        <input type="number" step="0.01" name="rent_price_per_day" id="rent_price_per_day" required>
        <label for="rent_price_per_hour">Rent Price Per Hour:</label>
        <input type="number" step="0.01" name="rent_price_per_hour" id="rent_price_per_hour" required>
        <button type="submit">Add Car</button>
    </form>
