@extends('layouts.app')
@section('content')
   <div class="container d-flex">
    <div class="container-fluid">
        <div class="pt-4 container content-justify-center">
            <h4>Welcome To Abbm Research Provisory Gateway System</h4>
            <a href="{{ route('payment') }} " class="btn btn-primary" type="button">Proceed Now</a>
        </div>
        
    </div>
   </div>
@endsection
