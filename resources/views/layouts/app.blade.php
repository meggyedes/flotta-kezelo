@extends('layouts.app')

@section('content')
    <h1>Járművek</h1>
    <a href="{{ route('vehicles.create') }}" class="btn btn-primary mb-3">Új jármű hozzáadása</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Márka</th>
                <th>Modell</th>
                <th>Év</th>
                <th>Rendszám</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->make }}</td>
                    <td>{{ $vehicle->model }}</td>
                    <td>{{ $vehicle->year }}</td>
                    <td>{{ $vehicle->license_plate }}</td>
                    <td>
                        <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-warning btn-sm">Szerkesztés</a>
                        <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
