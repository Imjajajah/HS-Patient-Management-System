<link rel="stylesheet" href="{{ asset('/css/vitalsigns.css') }}">
<script src="{{ asset('js/patient_charts.js') }}"></script>
<script src="{{ asset('js/charts_mode.js') }}"></script>
<script src="{{ asset('js/charts_graph.js') }}"></script>
<script src="{{ asset('js/charts_reminder.js') }}"></script>
<script src="{{ asset('js/charts_vital_colors.js') }}"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->


<div>
    <div>

        <div class="row justify-content-center my-4">
            <div class="col-lg-12">
                <div class="row align-items-center ">

                </div>
            </div>
        </div>

        <div class="row grid">
            <div class="col-xl-4 col-xxl-12">
                <div class="card-input">

                    @include('admin_med.patient.chart_tabs.doctor.assessment')
                    

                </div>
            </div>


            <!-- Table in the left side -->
            <div class="col-xl-8 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Assessment History</h4>
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

                        <div id="vitalSignsTableContainer">
                            <table class="table-left" id="vitalSignsTable">
                                <thead class="vital-signs-table-header">
                                    <tr class="vital-signs-header">
                                        <th onclick="sortTable(0)">Date &#x25B2;&#x25BC;</th>
                                        <th>Doctor</th>
                                        <th>Summary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="vital-signs-table-body">
                                        <td>Date</td>
                                        <td>Doctor</td>
                                        <td>Summary</td>
                                        <td>
                                            <a href="javascript:void()" class="btn btn-square btn-primary mr-3"
                                                data-toggle="tooltip" type="button" data-placement="top" title="View"
                                                onclick="">
                                                <i class="fa fa-eye color-muted"></i>
                                            </a>
                                            {{-- Show the register button only if the user has an admin or medical staff role --}}
                                            
                                            <a href="javascript:void()" class="btn btn-square btn-secondary mr-3"
                                                data-toggle="tooltip" type="button" data-placement="top" title="Edit"
                                                onclick="">
                                                <i class="fa fa-pencil color-muted"></i>
                                            </a>
                                           
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <canvas id="vitalSignsChart" style="display: none;"></canvas>

                    </div>

                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <div class="tooltip-container" style="position: relative; display: inline-block;">
                            <label class="view-logs-label" id="viewLogs" for="tooltip" onclick="toggleLogs()">
                                <strong>View Logs</strong>
                            </label>
                        </div>

                        <div>
                            <button type="button" id="viewGraph-btn" class="btn btn-secondary btn view-graph" data-dismiss="modal">View Graph</button>
                            <button type="submit" id="print-btn" class="btn btn-primary print-charts">Print</button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- End of Table in the left side -->

        </div>

    </div>
</div>
