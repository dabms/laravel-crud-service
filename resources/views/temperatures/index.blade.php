<h1>Temperatures - Index</h1>

<a href="{{ route('temperatures.create') }}">Create a new record</a>

@foreach($temperatures as $temperature)
    <h3>Location: {{ $temperature->location }}</h3>
    <p>Temperature in Celsius: {{ $temperature->temperature }} recorded at: {{ $temperature->recorded_at }}</p>
    <a href="{{ route('temperatures.show', $temperature->id) }}">Show</a>

    <hr />
@endforeach
