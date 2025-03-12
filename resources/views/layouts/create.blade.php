@extends('layouts.app')

@section('content')
    <h1>Új jármű hozzáadása</h1>
    <form action="{{ route('vehicles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="make" class="form-label">Márka</label>
            <input type="text" class="form-control" id="make" name="make" required>
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Modell</label>
            <input type="text" class="form-control" id="model" name="model" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Év</label>
            <input type="number" class="form-control" id="year" name="year" required>
        </div>
        <div class="mb-3">
            <label for="license_plate" class="form-label">Rendszám</label>
            <input type="text" class="form-control" id="license_plate" name="license_plate" required>
        </div>
        <button type="submit" class="btn btn-success">Mentés</button>
    </form>
@endsection
