<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@extends('admin_med.layout.index')

@section('med_content')
    <div class="content-body">
        <div class="container-fluid">
            {{-- Show the register button only if the user has an admin or medical staff role --}}
            @if (auth()->check() && in_array(auth()->user()->authorization->role_name, ['Admin', 'Medical staff']))
                @include('admin_med.patient.emergency.register_button')
            @endif


            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class=" display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Last name</th>
                                            <th>First name</th>
                                            <th>Bed Number</th>
                                            <th>Priority Level</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($emergency_patients as $emergency_patient)
                                            <tr>
                                                <td>{{ $emergency_patient->emergency_last_name }}</td>
                                                <td>{{ $emergency_patient->emergency_first_name }}</td>
                                                <td>10</td>
                                                <td>{{ $emergency_patient->priority_level }}</span></td>

                                                <td>
                                                    <a href="javascript:void()" class="btn btn-square btn-primary mr-4"
                                                        data-toggle="tooltip" type="button" data-placement="top" title="View"
                                                        onclick="window.location='{{ route('patients.emergency_patient_show', ['emergency_patient_id' => $emergency_patient->emergency_patient_id]) }}'">
                                                        <i class="fa fa-eye color-muted"></i> </a>
                                                    <!-- <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                        data-toggle="tooltip" type="button" data-placement="top" title="Edit"
                                                        onclick="window.location='{{ route('patients.emergency_patient_edit', ['emergency_patient_id' => $emergency_patient->emergency_patient_id]) }}'"><i
                                                            class="fa fa-pencil color-muted"></i> </a> -->

                                                    <button type="button" id="registerBtn" class="btn btn-square btn-success"
                                                        data-toggle="modal" data-target="#patientAdmissionModal"> <i class="fa fa-user-plus color-success"></i></button>

                                                        @include('admin_med.patient.registerm')
                                                    
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
    </div>
@endsection
