@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                        Edit Employee
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($employee, ['route' => ['employees.update', $employee->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('employees.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'inline-flex items-center px-4 py-2 bg-blue-600 text-gray-900 font-medium text-sm rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100']) !!}
                <a href="{{ route('employees.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-gray-900 font-medium text-sm rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100""> Cancel </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
