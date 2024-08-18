<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syncore Medical Hospital</title>
    <link rel="icon" href="/build/assets/syncore.png">

    <!-- <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/stylebuilder/static/form-common.css?v=80facca" /> -->
    <style type="text/css">
        @media print {
            * {
                -webkit-print-color-adjust: exact !important;
                color-adjust: exact !important;
            }

            .form-section {
                display: inline !important
            }

            .form-pagebreak {
                display: none !important
            }

            .form-section-closed {
                height: auto !important
            }

            .page-section {
                position: initial !important
            }
        }
    </style>
    <link type="text/css" rel="stylesheet"
        href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.55928&themeRevisionID=63997999613766562e95ef1b" />
    <!-- <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.55928" />
    <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.55928" /> -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">




</head>

<body>
<div class="Patient-Records">
    <table class="Patient-Records-Table" border="1">
        <tr>
            <th>
                <div class="Patient-Name-Header">Patient Name</div>
            </th>
            <th class="Registration-Date">
                <div class="Registration-Date-Header">Registration Date</div>
            </th>
            <th class="Patient-Status">
                <div class="Patient-Status-Header">Status</div>
            </th>
            <th class="Patient-Action">Actions</th>
        </tr>
        
        @foreach($patients as $patient)
        <tr>
            <td class="Patient-Name-Data">{{ $patient->first_name }} {{ $patient->middle_name }} {{ $patient->last_name }}</td>
            <td class="Registration-Date-Data">{{ $patient->created_at->format('m/d/Y') }}</td>
            <td class="Status-Data">{{ $patient->patient_type }}</td>
            <td class="Patient-Action">
                <!-- Add actions here, e.g., view, edit, delete -->
                <a class="patient-view" href="{{ route('patients.show', ['patient_id' => $patient->patient_id]) }}">View</a>
                <a class="patient-edit" href="">Edit</>
                <a class="delete" href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="add-patient">
        <button class="add-patient-button"> Add New Patient </button>
    </div>
</div>

</body>

</html>
