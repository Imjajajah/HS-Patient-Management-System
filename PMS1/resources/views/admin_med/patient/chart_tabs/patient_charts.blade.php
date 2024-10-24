<link rel="stylesheet" href="{{ asset('/css/vitalsigns.css') }}">
<link rel="stylesheet" href="{{ asset('/css/logs.css') }}">
<script src="{{ asset('js/patient_charts.js') }}"></script>
<script src="{{ asset('js/charts_mode.js') }}"></script>
<script src="{{ asset('js/charts_graph.js') }}"></script>
<script src="{{ asset('js/charts_reminder.js') }}"></script>
<script src="{{ asset('js/charts_vital_colors.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script src="{{ asset('js/data_validation.js') }}"></script>
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->


<div>
    <div>

        <div class="row grid">
            <div class="col-xl-4 col-xxl-12">
                <div class="card-input">

                    @include('admin_med.patient.chart_tabs.nurse.nurse_vs_input')
                    {{-- @include('admin_med.patient.chart_tabs.doc_vs') --}}

                </div>
            </div>


            <!-- Table in the left side -->
            <div class="col-xl-8 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Patient's Vital Signs</h4>

                        {{-- Show the register button only if the user has an admin or medical staff role --}}
                        @if (auth()->check() && in_array(auth()->user()->authorization->role_name, ['Admin', 'Medical staff']))
                            <div class="reminder-settings d-flex align-items-center">
                                <div class="toggle-container">
                                    <label for="reminderToggle">Reminder:</label>
                                    <label class="switch">
                                        <input type="checkbox" id="reminderToggle" checked>
                                        <span class="slider ">
                                            <span class="slider-text" id="sliderText">Auto</span>
                                        </span>
                                    </label>
                                </div>
                                

                                <div id="manualReminder" class="ms-3">
                                    <input type="number" id="manualMinutes" class="form-control" placeholder="Enter minutes" min="1" disabled>
                                </div>
                            </div>
                        @endif

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
                            <table class="chart-tab-table-left" id="vitalSignsTable">
                                <thead class="chart-tab-table-header">
                                    <tr class="chart-tab-header">
                                        <th onclick="sortTable(0)">Diagnosis Date &#x25B2;&#x25BC;</th>
                                        <th>BP</th>
                                        <th>HR</th>
                                        <th>Temp</th>
                                        <th>O2Sat</th>
                                        <th>PS</th>
                                        <th>RR</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emergency_patient->vital_signs as $vitals)
                                        <tr class="chart-tab-table-body">
                                            <td>{{ \Carbon\Carbon::parse($vitals->diagnosis_date)->format('m/d/Y') }}, {{ $vitals->diagnosis_time }}</td>
                                            <td data-bp="{{ $vitals->B_P ?? 'N/A' }}">{{ $vitals->B_P ?? 'N/A' }}</td>
                                            <td data-hr="{{ $vitals->heart_rate ?? 'N/A' }}">{{ $vitals->heart_rate ?? 'N/A' }}</td>
                                            <td data-temp="{{ $vitals->temperature ?? 'N/A' }}">{{ $vitals->temperature ?? 'N/A' }}</td>
                                            <td data-o2="{{ $vitals->oxygen_saturation ?? 'N/A' }}">{{ $vitals->oxygen_saturation ?? 'N/A' }}</td>
                                            <td>{{ isset($vitals->pain_scale) ? $vitals->pain_scale . '/10' : 'N/A' }}</td>
                                            <td data-rr="{{ $vitals->respiratory_rate ?? 'N/A' }}">{{ $vitals->respiratory_rate ?? 'N/A' }}</td>
                                            <td>
                                                <a href="javascript:void()" class="btn btn-square btn-primary mr-3"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="View"
                                                    onclick="populateFormView({{ json_encode($vitals) }}); makeFormReadonly();">
                                                    <i class="fa fa-eye color-muted"></i>
                                                </a>
                                                {{-- Show the register button only if the user has an admin or medical staff role --}}
                                                @if (auth()->check() && in_array(auth()->user()->authorization->role_name, ['Admin', 'Medical staff']))
                                                <a href="javascript:void()" class="btn btn-square btn-secondary mr-3"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Edit"
                                                    onclick="populateForm({{ json_encode($vitals) }}); enterEditMode();">
                                                    <i class="fa fa-pencil color-muted"></i>
                                                </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <canvas id="vitalSignsChart" style="display: none;"></canvas>

                        <!-- <div>
                            <canvas id="heartRespRateChart" style="display: none;"></canvas>
                        </div>

                        <div>
                            <canvas id="temperatureChart" style="display: none;"></canvas>
                        </div>

                        <div>
                            <canvas id="bloodPressureChart" style="display: none;"></canvas>
                        </div> -->

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

