<!-- Name Field -->
<div class="mb-4">
    {!! Form::label('name', 'Name:', ['class' => 'block text-sm font-medium text-gray-700']) !!}
    {!! Form::text('name', null, [
        'class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50',
        'accept' => 'image/*',
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

@if(isset($company) && $company->logo)
    <div class="mb-4">
        <img src="{{ asset($company->logo) }}" alt="{{ $company->name }}" class="w-20 h-20 object-cover">
    </div>
@endif

<!-- Logo Field -->
<div class="mb-4">
    {!! Form::label('logo', 'Logo:', ['class' => 'block text-sm font-medium text-gray-700']) !!}
    {!! Form::file('logo', [
        'class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50',
    ]) !!}
</div>

<!-- Website Field -->
<div class="mb-4">
    {!! Form::label('website', 'Website:', ['class' => 'block text-sm font-medium text-gray-700']) !!}
    {!! Form::text('website', null, [
        'class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50',
        'maxlength' => 255,
    ]) !!}
</div>
