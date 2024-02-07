<h1>Temperatures - Show</h1>

<a href="{{ route('temperatures.index') }}">Back</a>

<ul>
    <li>{{ $data->location }}</li>
    <li>{{ $data->temperature }}</li>
    <li>{{ $data->recorded_at }}</li>
</ul>

<a href="{{ route('temperatures.edit', $data->id) }}">Edit</a>

{{-- Delete Form --}}
<form method="POST" action="/temperatures/{{ $data->id }}" >
    @csrf
    @method('DELETE')

    <button class="">Delete</button>
</form>
