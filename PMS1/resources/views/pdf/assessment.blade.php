<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment PDF</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1, h2 { text-align: center; }
        p { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Patient Assessment</h1>
    <h2>Details</h2>

    <p>Patient Name: {{ $assessment->emergency_patients->emergency_first_name }} {{ $assessment->emergency_patients->emergency_middle_name }} {{ $assessment->emergency_patients->emergency_last_name }} {{ $assessment->emergency_patients->emergency_extension }}</p>
    <p>Patient ID: {{ $assessment->emergency_patient_id }}</p>
    <p>Doctor: {{ $assessment->users->name ?? 'N/A' }}</p>
    <p>Test Type: {{ $assessment->ep_assessment_test }}</p>
    <p>Test Instructions: {{ $assessment->ep_assessment_test_instruction }}</p>
    <p>Priority: {{ $assessment->ep_assessment_priority }}</p>
    <p>Clinical Reason: {{ $assessment->ep_assessment_assessments }}</p>
    <p>Date: {{ $assessment->ep_assessment_date }}</p>
    <p>Time: {{ $assessment->ep_assessment_time }}</p>

    <p>Please process this diagnostic test as soon as possible.</p>
</body>
</html>
