@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    Create Employees
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf

            <div class="card-body">
                <div class="row">
                    @include('employees.fields')
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-gray-900 font-medium text-sm rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100">Save</button>
                <a href="{{ route('employees.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-gray-900 font-medium text-sm rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100">Cancel</a>
            </div>
        </form>

        </div>
    </div>
@endsection
