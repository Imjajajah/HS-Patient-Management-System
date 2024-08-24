<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2>Patient Records</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Date Registered</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($patients as $patient)
                            <tr>
                                <td>{{ $patient->first_name }}</td>
                                <td>{{ $patient->last_name }}</td>
                                <td>{{ $patient->created_at->format('m/d/Y') }}</td>
                                <td>{{ $patient->patient_type }}</td>
                                <td>
                                    <button type="button" class="btn btn-square btn-success" onclick="window.location='{{ route('patients.show', ['patient_id' => $patient->patient_id]) }}'">View</button>
                                    <button type="button" class="btn btn-square btn-secondary">Edit</button>
                                    <button type="button" class="btn btn-square btn-danger">Delete</button>
                                </td>
                            </tr>
                            @endforeach

                            <tr>
                                <td>Garrett</td>
                                <td>Winters</td>
                                <td>2024/07/25</td>
                                <td>Out-Patient</td>
                                <td>
                                    <button type="button" class="btn btn-square btn-success">View</button>
                                    <button type="button" class="btn btn-square btn-secondary">Edit</button>
                                    <button type="button" class="btn btn-square btn-danger">Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Ashton</td>
                                <td>Cox</td>
                                <td>2024/01/12</td>
                                <td>In-Patient</td>
                                <td>
                                    <button type="button" class="btn btn-square btn-success">View</button>
                                    <button type="button" class="btn btn-square btn-secondary">Edit</button>
                                    <button type="button" class="btn btn-square btn-danger">Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Cedric</td>
                                <td>Kelly</td>
                                <td>2024/03/29</td>
                                <td>In-Patient</td>
                                <td>
                                    <button type="button" class="btn btn-square btn-success">View</button>
                                    <button type="button" class="btn btn-square btn-secondary">Edit</button>
                                    <button type="button" class="btn btn-square btn-danger">Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Airi</td>
                                <td>Satou</td>
                                <td>2023/11/28</td>
                                <td>Out-Patient</td>
                                <td>
                                    <button type="button" class="btn btn-square btn-success">View</button>
                                    <button type="button" class="btn btn-square btn-secondary">Edit</button>
                                    <button type="button" class="btn btn-square btn-danger">Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Brielle</td>
                                <td>Williamson</td>
                                <td>2023/12/02</td>
                                <td>Out-Patient</td>
                                <td>
                                    <button type="button" class="btn btn-square btn-success">View</button>
                                    <button type="button" class="btn btn-square btn-secondary">Edit</button>
                                    <button type="button" class="btn btn-square btn-danger">Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Herrod</td>
                                <td>Chandler</td>
                                <td>2024/08/06</td>
                                <td>In-Patient</td>
                                <td>
                                    <button type="button" class="btn btn-square btn-success">View</button>
                                    <button type="button" class="btn btn-square btn-secondary">Edit</button>
                                    <button type="button" class="btn btn-square btn-danger">Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Rhona</td>
                                <td>Davidson</td>
                                <td>2023/10/14</td>
                                <td>Out-Patient</td>
                                <td>
                                    <button type="button" class="btn btn-square btn-success">View</button>
                                    <button type="button" class="btn btn-square btn-secondary">Edit</button>
                                    <button type="button" class="btn btn-square btn-danger">Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Colleen</td>
                                <td>Hurst</td>
                                <td>2023/09/15</td>
                                <td>Out-Patient</td>
                                <td>
                                    <button type="button" class="btn btn-square btn-success">View</button>
                                    <button type="button" class="btn btn-square btn-secondary">Edit</button>
                                    <button type="button" class="btn btn-square btn-danger">Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Sonya</td>
                                <td>Frost</td>
                                <td>2023/12/13</td>
                                <td>In-Patient</td>
                                <td>
                                    <button type="button" class="btn btn-square btn-success">View</button>
                                    <button type="button" class="btn btn-square btn-secondary">Edit</button>
                                    <button type="button" class="btn btn-square btn-danger">Delete</button>
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
