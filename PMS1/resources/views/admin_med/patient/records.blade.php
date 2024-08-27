@extends('admin_med.layout.index')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center my-4">
                <div class="col-lg-12">
                    <div class="row align-items-center ">
                        <div class="col">
                            <h2 class="h3 mb-0 page-title">{{ __('Patient Records') }}</h2>
                        </div>
                        <div class="col-auto">
                            <a href="{{ url('register') }}">
                                <button type="button"
                                    class="btn btn-square btn-outline-primary btn-lg">{{ __('Register a Patient') }}</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class=" display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Date Registered</th>
                                            <th>Last name</th>
                                            <th>First name</th>
                                            <th>Type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        {{-- @foreach ($patients as $patient)
                                            <tr>
                                                <td>{{ $patient->created_at->format('m/d/Y') }}</td>
                                                <td>{{ $patient->last_name }}</td>
                                                <td>{{ $patient->first_name }}</td>
                                                <td>{{ $patient->patient_type }}</td>
                                                <td>
                                                    <a href="javascript:void()" class="btn btn-square btn-success mr-4"
                                                        data-toggle="tooltip" type="button" data-placement="top"
                                                        title="View"
                                                        onclick="window.location='{{ route('patients.show', ['patient_id' => $patient->patient_id]) }}'">
                                                        <i class="fa fa-eye color-muted"></i> </a>
                                                    <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                        data-toggle="tooltip" type="button" data-placement="top"
                                                        title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                                    <a href="javascript:void()" class="btn btn-square btn-danger"
                                                        data-toggle="tooltip" type="button" data-placement="top"
                                                        title="Close"><i class="fa fa-close color-danger"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach --}}

                                        <tr>
                                            <td>2024/07/25</td>
                                            <td>Winters</td>
                                            <td>Garrett</td>
                                            <td>Out-Patient</td>
                                            <td>
                                                <a href="javascript:void()" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2024/01/12</td>
                                            <td>Cox</td>
                                            <td>Ashton</td>
                                            <td>In-Patient</td>
                                            <td>
                                                <a href="javascript:void()" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2024/03/29</td>
                                            <td>Kelly</td>
                                            <td>Cedric</td>
                                            <td>In-Patient</td>
                                            <td>
                                                <a href="javascript:void()" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2023/11/28</td>
                                            <td>Satou</td>
                                            <td>Airi</td>
                                            <td>Out-Patient</td>
                                            <td>
                                                <a href="javascript:void()" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2023/12/02</td>
                                            <td>Williamson</td>
                                            <td>Brielle</td>
                                            <td>Out-Patient</td>
                                            <td>
                                                <a href="javascript:void()" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2024/08/06</td>
                                            <td>Chandler</td>
                                            <td>Herrod</td>
                                            <td>In-Patient</td>
                                            <td>
                                                <a href="javascript:void()" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2023/10/14</td>
                                            <td>Davidson</td>
                                            <td>Rhona</td>
                                            <td>Out-Patient</td>
                                            <td>
                                                <a href="javascript:void()" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2023/09/15</td>
                                            <td>Hurst</td>
                                            <td>Colleen</td>
                                            <td>Out-Patient</td>
                                            <td>
                                                <a href="javascript:void()" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2023/12/13</td>
                                            <td>Frost</td>
                                            <td>Sonya</td>
                                            <td>In-Patient</td>
                                            <td>
                                                <a href="javascript:void()" class="btn btn-square btn-success mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="View">
                                                    <i class="fa fa-eye color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i> </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top"
                                                    title="Close">
                                                    <i class="fa fa-close color-danger"></i></a>
                                            </td>
                                        </tr>
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
    </div>
@endsection
