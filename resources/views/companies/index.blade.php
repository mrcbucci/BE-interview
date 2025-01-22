@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-semibold text-gray-900">Companies</h1>
                <a href="{{ route('companies.create') }}" 
                   class="inline-flex items-center px-4 py-2 bg-blue-600 text-gray-900 font-medium text-sm rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100">
                    Add New
                </a>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @include('flash::message')
                <div>
                    @include('companies.table')
                </div>
            </div>
        </div>
    </div>
@endsection
