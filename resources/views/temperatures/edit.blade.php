<h1>Temperatures - Edit</h1>

<a href="{{ route('temperatures.show', $data->id) }}">Back</a>
<a href="{{ route('temperatures.index') }}">Index</a>


<form action="/temperatures/{{ $data->id }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="form-container">
        <label for="location">Location:</label>
        <input type="text" name="location" id="location" value="{{ $data->location }}"/>
    </div>

    <div class="form-container">
        <label for="temperature">Temperature:</label>
        <input type="text" name="temperature" id="temperature" value="{{ $data->temperature}}"/>
    </div>

    <div class="form-container">
        <label for="recorded_at">Recorded at:</label>
        {{--    Eloquent-Modelle verwenden Carbon-Instanzen für Datumsfelder. Diese bieten eine Vielzahl von Methoden
                für Datumsmanipulation und -formatierung bieten.    --}}
        <input type="date" name="recorded_at" id="recorded_at"
               value="{{ \Carbon\Carbon::parse($data->recorded_at)->format('Y-m-d') }}"/>
    </div>

    <input type="submit" value="Update">
</form>
