{{-- <script src="{{ asset('/js/emergency_registration.js') }}"></script> --}}


@extends('admin_med.layout.index')

@section('med_content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center my-4">
                <div class="col-lg-12">
                    @include('components.messages')
                    <div class="row align-items-center ">
                        <div class="col">
                            <h2 class="h3 mb-0 page-title">{{ __('Patient Records') }}</h2>
                        </div>
                        <div class="col-auto">

                            <button type="button" id="registerBtn" class="btn btn-square btn-outline-primary btn-lg"
                            data-toggle="modal" data-target="#exampleModalLong">{{ __('Register a Patient') }}</button>

                            @include('admin_med.patient.emergency.emergency_registration')
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            @include('admin_med.patient.emergency.emergency_table')
        </div>
    </div>
@endsection