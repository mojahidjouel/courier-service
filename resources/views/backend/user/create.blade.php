@extends('backend.layout.app')

@section('title',trans('Create Users'))

@section('content')

<div class="row">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('user.store')}}" novalidate>
  @csrf
<div class="row">
  <div class="col-md-6 col-12 position-relative">
    <label for="roleId" class="form-label">Role <i class="text-danger">*</i></label>
    <select class="form-control" name="roleId" id="roleId">
      <option value="">Select Role</option>
      @forelse($role as $r)
          <option value="{{$r->id}}" {{ old('roleId')==$r->id?"selected":""}}> {{ $r->type}}</option>
      @empty
          <option value="">No Role found</option>
      @endforelse
      </select>
      @if($errors->has('roleId'))
      <span class="text-danger"> {{ $errors->first('roleId') }}</span>
      @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="userName_en" class="form-label">Name (English) <i class="text-danger">*</i></label>
    <input type="text" class="form-control" id="userName_en" value="{{ old('userName_en')}}" name="userName_en">
    @if($errors->has('userName_en'))
        <span class="text-danger"> {{ $errors->first('userName_en') }}</span>
    @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="userName_bn" class="form-label">Name (Bangla)</label>
    <input type="text" class="form-control" id="userName_bn" value="{{ old('userName_bn')}}" name="userName_bn">
    @if($errors->has('userName_bn'))
        <span class="text-danger"> {{ $errors->first('userName_bn') }}</span>
    @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="EmailAddress" class="form-label">Email<i class="text-danger">*</i></label>
    <input type="text" class="form-control" id="EmailAddress" value="{{ old('EmailAddress')}}" name="EmailAddress">
    @if($errors->has('EmailAddress'))
        <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
    @endif
  </div>
  
  <div class="col-md-6 col-12 position-relative">
    <label for="contactNumber_en" class="form-label">Contact Number (English)<i class="text-danger">*</i></label>
    <input type="text" class="form-control" id="contactNumber_en" value="{{ old('contactNumber_en')}}" name="contactNumber_en">
    @if($errors->has('contactNumber_en'))
        <span class="text-danger"> {{ $errors->first('contactNumber_en') }}</span>
    @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contactNumber_bn" class="form-label">Contact Number (Bangla)</label>
    <input type="text" class="form-control" id="contactNumber_bn" value="{{ old('contactNumber_bn')}}" name="contactNumber_bn">
  @if($errors->has('contactNumber_bn'))
      <span class="text-danger"> {{ $errors->first('contactNumber_bn') }}</span>
  @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="status" class="form-label">Status</label>
    <select id="status" class="form-control" name="status">
    <option value="1" @if(old('status')==1) selected @endif>Active</option>
    <option value="0" @if(old('status')==0) selected @endif>Inactive</option>
</select>
  @if($errors->has('status'))
      <span class="text-danger"> {{ $errors->first('status') }}</span>
  @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="fullAccess" class="form-label">Full Access</label>
    <select id="fullAccess" class="form-control" name="fullAccess">
    <option value="0" @if(old('fullAccess')==0) selected @endif>No</option>
    <option value="1" @if(old('fullAccess')==1) selected @endif>Yes</option>
  </select>
  @if($errors->has('fullAccess'))
      <span class="text-danger"> {{ $errors->first('fullAccess') }}</span>
  @endif
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-12 position-relative">
    <label for="password" class="form-label">Password<i class="text-danger">*</i></label>
    <input type="password" class="form-control" id="password" name="password">
    @if($errors->has('password'))
        <span class="text-danger"> {{ $errors->first('password') }}</span>
    @endif
  </div>
  
  <div class="col-md-6 col-12 position-relative">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control" id="image" placeholder="Image" name="image">
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