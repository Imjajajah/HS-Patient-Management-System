
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->

<div>
    <div>
        <div class="row grid">
        
            <!-- Table in the left side -->
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Patient's Medical History</h4>
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

                        <div id="medical-history-container">
                            <table class="medical-history-table" id="medicalHistoryTable">
                                <thead class="medical-history-header">
                                    <tr class="medical-history-header">
                                        <th onclick="sortTable(0)">Date &#x25B2;&#x25BC;</th>
                                        <th>Diagnoses</th>
                                        <th>Treatments</th>
                                        <th>Surgeries</th>
                                        <th>Medications</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>10/10/2024</td>
                                    <td>Diagnoses</td>
                                    <td>Treatments</td>
                                    <td>Surgeries</td>
                                    <td>Medications</td>
                                    <td>
                                        <a href="javascript:void()" class="btn btn-square btn-primary mr-3"
                                            data-toggle="tooltip" type="button" data-placement="top" title="View"
                                            onclick="makeFormReadonly();">
                                            <i class="fa fa-eye color-muted"></i>
                                        </a>
                                        
                                       
                                        <a href="javascript:void()" class="btn btn-square btn-secondary mr-3"
                                            data-toggle="tooltip" type="button" data-placement="top" title="Edit"
                                            onclick="enterEditMode();">
                                            <i class="fa fa-pencil color-muted"></i>
                                        </a>
                                        
                                    </td>
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

