@extends('backend.layout.app')

@section('pageTitle',trans('Update Branch'))
@section('pageSubTitle',trans('Update'))

@section('content')
<div class="col-12">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('branch.update',encryptor('encrypt',$branch->id))}}" novalidate>
  @csrf
  @method('PATCH')
  
  <div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="company_id" class="form-label">Company Id</label>
    <input type="text" class="form-control" id="company_id" value="{{old('company_id',$branch->company_id)}}" name="company_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="branch_name" class="form-label">Branch Name</label>
    <input type="text" class="form-control" id="branch_name" value="{{ old('branch_name',$branch->branch_name)}}" name="branch_name">
    @if($errors->has('branch_name'))
      <span class="text-danger"> {{$errors->first('branch_name')}}</span>
    @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="branch_email" class="form-label">Contact Person</label>
    <input type="text" class="form-control" id="branch_email" value="{{old('branch_email',$branch->branch_email)}}" name="branch_email">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="branch_phone" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="branch_phone" value="{{old('branch_phone',$branch->branch_phone)}}" name="branch_phone">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="branch_address" class="form-label">Branch Address</label>
    <input type="text" class="form-control" id="branch_address" value="{{old('branch_address',$branch->branch_address)}}" name="branch_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="branch_city" class="form-label">Branch City</label>
    <input type="text" class="form-control" id="branch_city" value="{{old('branch_city',$branch->	branch_city)}}" name="branch_city">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="branch_state" class="form-label">Branch Division</label>
    <input type="text" class="form-control" id="branch_state" value="{{old('branch_state',$branch->branch_state)}}" name="branch_state">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="branch_pin" class="form-label">Branch Code</label>
    <input type="text" class="form-control" id="branch_pin" value="{{old('branch_pin',$branch->branch_pin)}}" name="branch_pin">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="branch_country" class="form-label">Branch Country</label>
    <input type="text" class="form-control" id="branch_country" value="{{old('branch_country',$branch->branch_country)}}" name="branch_country">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="logo_image" class="form-label">Logo Image</label>
    <input type="file" class="form-control" id="logo_image" value="{{old('logo_image',$branch->logo_image)}}" name="logo_image">
  </div>

</div>

<div class="row">
  <div class="col-12 d-flex justify-content-start">
      <button type="submit" class="btn btn-info ms-1 mt-1">Save</button>
  </div>
</div>
</form>
</div>
@endsection