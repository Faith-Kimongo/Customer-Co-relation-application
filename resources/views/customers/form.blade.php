@extends('layout')
@section('content')
<form action="/customers" method="POST">
<div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') ?? $customer->name }}" class="form-control">
        <div>{{ $errors->first('name') }}</div>
</div>   

<div class="form-group">
        <label for="name">Email</label>
        <input type="text" name="email" value="{{ old('email') ?? $customer->email }}" class="form-control">
        <div>{{ $errors->first('email') }}</div>
</div>

<div class="form-group">
    <label for="active">Status</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select customer status</option>

        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>

        @endforeach
        
    </select>
</div>

<div class="form-group">
    <label for="company_id">Company</label>
    <select name="company_id" id="company_id" class="form-control">
        @foreach ($companies as $Company)
            <option value="{{ $Company->id }}" {{ $Company->id == $customer->Company_id ? 'selected' : ''}}>{{ $Company->name }}</option>
        @endforeach
        
    </select>
</div>
@csrf
<button type="submit" class="btn btn-primary">Save Customer</button>

</form>
@endsection