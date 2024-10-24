<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diagnostic Test Order</title>
</head>
<body>
    <h2>Diagnostic Test Order</h2>

    <!-- Use optional chaining or null coalescing to prevent errors -->
    <p>Patient Name: {{ $ep_assessment->emergency_patients->emergency_first_name }} {{ $ep_assessment->emergency_patients->emergency_middle_name }} {{ $ep_assessment->emergency_patients->emergency_last_name }} {{ $ep_assessment->emergency_patients->emergency_extension }}</p>
    <p>Patient ID: {{ $ep_assessment->emergency_patient_id }}</p>
    <p>Doctor: {{ $ep_assessment->users->name ?? 'N/A' }}</p>
    <p>Test Type: {{ $ep_assessment->ep_assessment_test }}</p>
    <p>Test Instructions: {{ $ep_assessment->ep_assessment_test_instruction }}</p>
    <p>Priority: {{ $ep_assessment->ep_assessment_priority }}</p>
    <p>Clinical Reason: {{ $ep_assessment->ep_assessment_assessments }}</p>

    <p>Please process this diagnostic test as soon as possible.</p>
</body>
</html>
