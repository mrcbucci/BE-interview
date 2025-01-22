@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="flex justify-between items-center">
                    <h1>Employee Details</h1>
                    <a class="inline-flex items-center px-4 py-2 bg-blue-600 text-gray-900 font-medium text-sm rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100"
                       href="{{ route('employees.index') }}">Back</a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('employees.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
