<!-- First Name Field -->
<div class="mb-4">
    {!! Form::label('first_name', 'First Name:', ['class' => 'block text-sm font-medium text-gray-700']) !!}
    {!! Form::text('first_name', null, [
        'class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50',
        'required',
        'maxlength' => 255,
    ]) !!}
</div>

<!-- Last Name Field -->
<div class="mb-4">
    {!! Form::label('last_name', 'Last Name:', ['class' => 'block text-sm font-medium text-gray-700']) !!}
    {!! Form::text('last_name', null, [
        'class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50',
        'required',
        'maxlength' => 255,
    ]) !!}
</div>

<!-- Email Field -->
<div class="mb-4">
    {!! Form::label('email', 'Email:', ['class' => 'block text-sm font-medium text-gray-700']) !!}
    {!! Form::email('email', null, [
        'class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50',
        'maxlength' => 255,
    ]) !!}
</div>

<!-- Phone Field -->
<div class="mb-4">
    {!! Form::label('phone', 'Phone:', ['class' => 'block text-sm font-medium text-gray-700']) !!}
    {!! Form::text('phone', null, [
        'class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50',
        'maxlength' => 255,
    ]) !!}
</div>

<!-- Company Selection Field -->
<div class="mb-4">
    {!! Form::label('company_id', 'Company:', ['class' => 'block text-sm font-medium text-gray-700']) !!}
    {!! Form::select('company_id', $companies->pluck('name', 'id'), null, [
        'class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50',
        'required',
    ]) !!}
</div>
