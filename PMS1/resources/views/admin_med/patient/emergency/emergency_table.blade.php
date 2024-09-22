<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#emergency1">Emergency Patients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#inpatient1">In-Patients</a>
                    </li>
                </ul>

                <div class="tab-content">

                    <div class="tab-pane fade show active" id="emergency1" role="tabpanel">
                        <div class="pt-4">
                            <div class="table-responsive">
                                <table id="example2" class=" display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Last name</th>
                                            <th>First name</th>
                                            <th>Priority Level</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    @foreach ($emergency_patients as $emergency_patient)
                                        <tr>
                                            <td>{{ $emergency_patient->emergency_last_name }}</td>
                                            <td>{{ $emergency_patient->emergency_first_name }}</td>
                                            <td>{{ $emergency_patient->priority_level }}</span></td>
                                            <td>{{ $emergency_patient->status }}</span></td>
                                            <td>
                                                <a href="javascript:void()" class="btn btn-square btn-primary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="View"
                                                    onclick="window.location='{{ route('patients.emergency_patient_show', ['emergency_patient_id' => $emergency_patient->emergency_patient_id]) }}'">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Edit"
                                                    onclick="window.location='{{ route('patients.edit', ['patient_id' => $emergency_patient->emergency_patient_id]) }}'"><i
                                                        class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Close"><i
                                                        class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                        {{-- <tr>
                                            <td>Satou</td>
                                            <td>Airi</td>
                                            <td>Non-Urgent</td>
                                            <td>Waiting for doctor</td>
                                            <td>
                                                <a href="{{ url('emergency_view') }}" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="{{ url('edit') }}" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Williamson</td>
                                            <td>John</td>
                                            <td>Urgent</td>
                                            <td>Waiting for doctor</td>
                                            <td>
                                                <a href="{{ url('view') }}" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="{{ url('edit') }}" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Chandler</td>
                                            <td>Herrod</td>
                                            <td>Less Urgent</td>
                                            <td>Waiting for doctor</td>
                                            <td>
                                                <a href="{{ url('view') }}" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="{{ url('edit') }}" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Davidson</td>
                                            <td>Rhona</td>
                                            <td>Non-Urgent</td>
                                            <td>Waiting for doctor</td>
                                            <td>
                                                <a href="{{ url('view') }}" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="{{ url('edit') }}" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

<<<<<<< HEAD:PMS1/resources/views/admin_med/patient/emergency/emergency_table.blade.php
                    @include('admin_med.patient.emergency.inpatient_table')
                    
=======
                    <div class="tab-pane fade" id="medRecord1" role="tabpanel">
                        @include('admin_med.patient.inpatient_table')
                    </div>

>>>>>>> 4ac2ac497f5d95569ab1f988c9152d1dd4951747:PMS1/resources/views/admin_med/patient/emergency_table.blade.php
                </div>
            </div>
        </div>
    </div>
</div>
