<h1>Temperatures - Create</h1>

<form action="/temperatures" method="POST">
    @csrf

    <div class="form-container">
        <label for="location">Location:</label>
        <input type="text" name="location" id="location" />
    </div>

    <div class="form-container">
        <label for="temperature">Temperature:</label>
        <input type="text" name="temperature" id="temperature" />
    </div>

    <div class="form-container">
        <label for="recorded_at">Recorded at:</label>
        <input type="date" name="recorded_at" id="recorded_at" />
    </div>

    <input type="submit" value="Save">
</form>
