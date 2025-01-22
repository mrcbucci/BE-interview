<!-- Name Field -->
<div class="col-sm-12">
    <strong>{!! Form::label('name', 'Name:') !!}</strong>
    <p>{{ $company->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    <strong>{!! Form::label('email', 'Email:') !!}</strong>
    <p>{{ $company->email }}</p>
</div>

<!-- Logo Field -->
<div class="col-sm-12">
    <strong>{!! Form::label('logo', 'Logo:') !!}</strong>
    @if ($company->logo)
        <img src="{{ asset($company->logo) }}" alt="Logo" class=" object-cover" style="max-width: 80px; max-height: 80px;">
    @endif
</div>

<!-- Website Field -->
<div class="col-sm-12">
    <strong>{!! Form::label('website', 'Website:') !!}</strong>
    <p>{{ $company->website }}</p>
</div>

