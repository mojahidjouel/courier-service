@extends('backend.layout.app')

@section('title',trans('Create Asset'))

@section('content')

<div class="row">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('asset.store')}}" novalidate>
  @csrf
<div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" value="{{ old('name')}}" name="name">
    @if($errors->has('name'))
      <span class="text-danger"> {{ $errors->first('name') }}</span>
  @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="registration_number	" class="form-label">Registration_Number</label>
    <input type="text" class="form-control" id="registration_number" value="{{ old('registration_number	')}}" name="registration_number	">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="driver_id" class="form-label">Driver_Id	</label>
    <input type="text" class="form-control" id="driver_id" value="{{ old('driver_id	')}}" name="driver_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="registration_card" class="form-label">Registration_Card</label>
    <input type="text" class="form-control" id="registration_card" value="{{ old('registration_card')}}" name="registration_card">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="gml" class="form-label">Gac Marine Logistics</label>
    <input type="text" class="form-control" id="gml" value="{{ old('gml')}}" name="gml">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="cml" class="form-label">Core Management Logistics</label>
    <input type="text" class="form-control" id="cml" value="{{ old('cml')}}" name="cml">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="hml" class="form-label">High/Medium/Low_Cost(HML)</label>
    <input type="text" class="form-control" id="hml" value="{{ old('hml')}}" name="hml">
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