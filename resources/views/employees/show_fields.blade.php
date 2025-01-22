<!-- First Name Field -->
<div class="col-sm-12">
    <strong>{!! Form::label('first_name', 'First Name:') !!}</strong>
    <p>{{ $employee->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="col-sm-12">
    <strong>{!! Form::label('last_name', 'Last Name:') !!}</strong>
    <p>{{ $employee->last_name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    <strong>{!! Form::label('email', 'Email:') !!}</strong>
    <p>{{ $employee->email }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    <strong>{!! Form::label('phone', 'Phone:') !!}</strong>
    <p>{{ $employee->phone }}</p>
</div>

<!-- Company Id Field -->
<div class="col-sm-12">
    <strong>{!! Form::label('company_id', 'Company Id:') !!}</strong>
    <p>{{ $employee->company->name }}</p>
</div>

