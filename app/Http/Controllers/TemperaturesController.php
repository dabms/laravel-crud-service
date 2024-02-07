<?php

namespace App\Http\Controllers;

use App\Contracts\TemperatureServiceInterface;
use App\Models\Temperatures;
use Illuminate\Http\Request;

class TemperaturesController extends Controller
{
    protected TemperatureServiceInterface $tempService;
    public function __construct(TemperatureServiceInterface $temperatureService)
    {
        $this->tempService = $temperatureService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $data = Temperatures::all(); // Ohne Service a.k.a. Repository

        $data = $this->tempService->getAll();

        return view('temperatures.index', [
            'temperatures' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('temperatures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            // Validierung
            'location' => ['required', 'string'],
            'temperature' => ['required', 'numeric'],
            'recorded_at' => ['required', 'date'],
        ]);

        $this->tempService->create($data);

        return redirect()->route('temperatures.index')->with('success', 'Measurement added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = $this->tempService->findById($id);

        return view('temperatures.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data= $this->tempService->findById($id);

        return view('temperatures.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            // Validierung
            'temperature' => 'required|numeric',
            'recorded_at' => 'required|date',
        ]);

        $this->tempService->update($id, $data);

        return redirect()->route('temperatures.index')->with('success', 'Measurement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $temperatures = $this->tempService->findById($id);
        $temperatures->delete();
        return redirect()->route('temperatures.index')->with('success', 'Temperature deleted successfully');
    }
}
