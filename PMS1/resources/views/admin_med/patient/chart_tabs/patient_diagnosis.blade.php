<link rel="stylesheet" href="{{ asset('/css/vitalsigns.css') }}">
<script src="{{ asset('js/patient_charts.js') }}"></script>
<script src="{{ asset('js/charts_mode.js') }}"></script>
<script src="{{ asset('js/charts_graph.js') }}"></script>
<script src="{{ asset('js/charts_reminder.js') }}"></script>
<script src="{{ asset('js/charts_vital_colors.js') }}"></script>
<script src="{{ asset('js/review_mode.js') }}"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->


<div>
    <div>

        <div class="row grid">
            <div class="col-xl-4 col-xxl-12">
                <div class="review-card-input card-input-green">

                    @include('admin_med.patient.chart_tabs.doctor.diagnosis_input')


                </div>
            </div>


            <!-- Table in the left side -->
            <div class="col-xl-8 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Patient's Vital Signs</h4>
                    </div>

                    <div class="card-body">
                        <div id="logsSection" style="display: none;">
                            <h5>Activity Logs</h5>
                            <ul id="logEntries">
                                @forelse ($emergency_patient->emergency_logs as $log)
                                    <li>
                                        @php
                                            $formattedDate = \Carbon\Carbon::parse($log->emergency_date_logs)->format('m/d/Y');
                                            $user = $log->users;
                                            $userRole = $user->authorization->role_name ?? 'N/A'; // Get role from authorization
                                            $userName = $user->name ?? 'Unknown User';
                                            $action = strtolower($log->action); // 'inputted' or 'edited'
                                        @endphp

                                        @if ($log->action === 'inputted')
                                            {{ $formattedDate }}, {{ $log->emergency_time_logs }} -
                                            {{ $userRole }} - {{ $userName }} inputted new vital signs.
                                        @else
                                            {{ $formattedDate }}, {{ $log->emergency_time_logs }} -
                                            {{ $userRole }} - {{ $userName }} edited patient -
                                            {{ $log->patient_name }}. {{ $log->message }}
                                        @endif
                                        <p></p>
                                    </li>
                                @empty
                                    <li>No logs available for this patient.</li>
                                @endforelse
                            </ul>
                        </div>

                        <div id="diagnosis-and-procedure-container">
                            <table class="chart-tab-table-left" id="diagnosisAndProcedureTable">
                                <thead class="chart-tab-table-header">
                                    <tr class="chart-tab-header">
                                        <th onclick="sortTable(0)">Date &#x25B2;&#x25BC;</th>
                                        <th>Doctor</th>
                                        <th>Evaluation</th>
                                        <th>Prognosis</th>
                                        <th>Diagnosis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($emergency_patient->diagnosis_and_procedures && $emergency_patient->diagnosis_and_procedures->isNotEmpty())
                                        @foreach ($emergency_patient->diagnosis_and_procedures as $procedure)
                                            <tr class="chart-tab-table-body">
                                                <td>{{ \Carbon\Carbon::parse($procedure->diagnosis_and_procedure_date)->format('m/d/Y') }},
                                                    {{ $procedure->diagnosis_and_procedure_time }}
                                                </td>
                                                <td>{{ $procedure->users->name ?? 'N/A' }}</td> <!-- Doctor's Name -->
    
                                                <td>
                                                    {{
                                                        Str::limit(
                                                            ($procedure->impairment ?? '') .
                                                            ($procedure->activity_restriction ? ', ' . $procedure->activity_restriction : '') .
                                                            ($procedure->personal_factor ? ', ' . $procedure->personal_factor : '') .
                                                            ($procedure->environmental_factor ? ', ' . $procedure->environmental_factor : ''),
                                                            10, // Limit to 100 characters
                                                            '...' // Optional suffix to indicate more text
                                                        )
                                                    }}
                                                </td>
                                                <td>{{ Str::limit($procedure->prognosis, 10, '...') }}</td>
                                                <td>{{ Str::limit($procedure->diagnosis, 10, '...') }}</td>
                                                

                                                <td>
                                                    

                                                    <a href="javascript:void(0)" class="btn btn-square btn-primary mr-3"
                                                        data-toggle="tooltip" data-placement="top" title="View"
                                                        onclick="makeReviewFormReadonly();">
                                                        <i class="fa fa-eye color-muted"></i>
                                                    </a>

                                                    <a href="javascript:void(0)" class="btn btn-square btn-secondary mr-3"
                                                        data-toggle="tooltip" data-placement="top" title="Edit"
                                                        onclick="enterReviewEditMode();">
                                                        <i class="fa fa-pencil color-muted"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6">No diagnosis and procedure records found.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>


                    </div>

                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <div class="tooltip-container" style="position: relative; display: inline-block;">
                            <label class="view-logs-label" id="viewLogs" for="tooltip" onclick="toggleLogs()">
                                <strong>View Logs</strong>
                            </label>
                        </div>

                        <div>
                            <button type="submit" id="print-btn" class="btn btn-primary print-charts">Print</button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- End of Table in the left side -->

        </div>

    </div>
</div>

