@extends('backend.layout.app')

@section('title',trans('Show Company'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body bg-info">
            <h4>Company Name</h4>
            <h4 class="card-title">{{$company->company_name}}</h4>

            <h4>contact Number:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$company->contact_number}}</p>

            <h4>Contact Person:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$company->company_email}}</p>

            <h4>Company Address:</h4>           
            <p class="card-subtitle mb-2 text-muted">{{$company->company_address}}</p>

            <h4>Company City:</h4>           
            <p class="card-subtitle mb-2 text-muted">{{$company->company_city}}</p>

            <h4>Company Division:</h4>           
            <p class="card-subtitle mb-2 text-muted">{{$company->company_state}}</p>

            <h4>Company Code: </h4>           
            <p class="card-subtitle mb-2 text-muted">{{$company->company_pin}}</p>

            <h4>Company Country:</h4>           
            <p class="card-subtitle mb-2 text-muted">{{$company->company_country}}</p>

            <h4>Logo Image: </h4>
            <img src="{{asset('public/uploads/company/'.$company->logo_image)}}" width="100" alt="">
         </div>
        </div>
        <div class="p-2 w-20 mx-auto">
          <a class="btn btn-primary form-control" href="{{route('company.index')}}"><b>View All Company</b></a>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection