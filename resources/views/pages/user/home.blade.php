@extends('layouts.common.app')

@section('main')
<div class="container">
    <h1 class="text-center mb-4">Welcome to the Car Selling Platform</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="row">
        <!-- Sell Cars Records Card -->
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header bg-danger text-white">
                    <h5 class="mb-0 text-center">Sell Cars Records</h5>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-light text-center">
                            <tr>
                                <th>Actions</th>
                                <th>Transmission</th>
                                <th>Year</th>
                                <th>Car Model</th>
                                <th>Car Type</th>
                                <th>Kilometers</th>
                                <th>Number</th>
                                <th>Email</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($sellCars->isEmpty())
                            <tr>
                                <td colspan="9" class="text-center">No car records found.</td>
                            </tr>
                            @else
                            @foreach($sellCars as $car)
                            <tr>
                                <td>
                                    <a href="{{ route('sellcars.show', $car->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <form action="{{ route('sellcars.destroy', $car->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?');">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $car->transmissions == 1 ? 'Automatic' : 'Manual' }}</td>
                                <td>{{ $car->year }}</td>
                                <td>{{ $car->car_model }}</td>
                                <td>{{ $car->car_type }}</td>
                                <td>{{ $car->kilometrs }}</td>
                                <td>{{ $car->number }}</td>
                                <td>{{ $car->email }}</td>
                                <td>{{ $car->name }}</td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Contact Records Card -->
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0 text-center">Contact Records</h5>
                </div>
                <div class="card-body table-responsive">
                    @if ($contacts->isEmpty())
                    <p class="text-center">No contact records found.</p>
                    @else
                    <table class="table table-bordered">
                        <thead class="bg-light text-center">
                            <tr>
                                <th>Actions</th>
                                <th>Created At</th>
                                <th>Message</th>
                                <th>Subject</th>
                                <th>Number</th>
                                <th>Email</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>
                                    <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?');">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $contact->created_at->format('Y-m-d H:i:s') }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->number }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection