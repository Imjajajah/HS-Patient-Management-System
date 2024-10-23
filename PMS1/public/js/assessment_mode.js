function makeAssessmentFormReadonly() {
    const inputs = document.querySelectorAll('.datetime-input, .assessment-input');
    inputs.forEach(input => {
        input.setAttribute('readonly', true); // Make inputs read-only
    });

    // Change header text to "View Mode"
    document.getElementById('assessmentInputHeader').innerText = 'View Mode';

    // Change card-input border color to blue (View Mode)
    const cardInput = document.querySelector('.assessment-card-input');
    cardInput.classList.remove('card-input-yellow'); // Remove yellow (Edit Mode)
    cardInput.classList.remove('card-input-green');  // Remove green (Input Mode)
    cardInput.classList.add('card-input-blue');      // Add blue for View Mode

    // Hide buttons and show the relevant ones
    document.getElementById('assessmentSaveBtn').style.display = 'none'; // Hide Save button
    document.getElementById('editSubmitAssessment').style.display = 'none'; // Hide Save Changes button
    document.getElementById('assessmentCancelBtn').style.display = 'none'; // Hide Clear button

    // Show the Back to Input Mode button
    document.getElementById('backToInputButtonAssessment').style.display = 'block'; // Show Back to Input Mode button
}

function enterAssessmentEditMode() {
    const inputs = document.querySelectorAll('.datetime-input, .assessment-input');
    inputs.forEach(input => {
        input.removeAttribute('readonly'); // Make inputs editable
    });

    // Change header text to "Edit Mode"
    document.getElementById('assessmentInputHeader').innerText = 'Edit Mode';

    // Change card-input border color to yellow (Edit Mode)
    const cardInput = document.querySelector('.assessment-card-input');
    cardInput.classList.remove('card-input-blue');  // Remove blue (View Mode)
    cardInput.classList.remove('card-input-green'); // Remove green (Input Mode)
    cardInput.classList.add('card-input-yellow');   // Add yellow for Edit Mode

    // Hide buttons and show the relevant ones
    document.getElementById('assessmentSaveBtn').style.display = 'none'; // Hide Save button
    document.getElementById('editSubmitAssessment').style.display = 'block'; // Show Save Changes button
    document.getElementById('assessmentCancelBtn').style.display = 'none'; // Hide Clear button
    document.getElementById('backToInputButtonAssessment').style.display = 'block'; // Show Back to Input Mode button
}

function showAssessmentInputMode() {
    const form = document.getElementById('assessmentForm');

    // Reset form action to store data
    form.action = '/emergency/ep-assessment/store';  // Set action to store route

    // Remove the hidden _method input for PATCH if it exists
    const methodInput = document.getElementById('_method');
    if (methodInput) {
        methodInput.remove(); // Remove _method so it submits as POST
    }

    const inputs = document.querySelectorAll('.assessment-input'); // Only clear non-date and non-time inputs
    inputs.forEach(input => {
        input.removeAttribute('readonly'); // Make inputs editable
        input.value = '';  // Clear fields for new input
    });

    // Change header text back to "Input Mode"
    document.getElementById('assessmentInputHeader').innerText = 'Input Mode';

    // Change card-input border color to green (Input Mode)
    const cardInput = document.querySelector('.assessment-card-input');
    cardInput.classList.remove('card-input-blue');  // Remove blue (View Mode)
    cardInput.classList.remove('card-input-yellow'); // Remove yellow (Edit Mode)
    cardInput.classList.add('card-input-green');    // Add green for Input Mode

    // Show relevant buttons and hide others
    document.getElementById('assessmentSaveBtn').style.display = 'block'; // Show Save button
    document.getElementById('editSubmitAssessment').style.display = 'none'; // Hide Save Changes button
    document.getElementById('assessmentCancelBtn').style.display = 'block'; // Show Clear button
    document.getElementById('backToInputButtonAssessment').style.display = 'none'; // Hide Back to Input Mode button
    document.getElementById('downloadFileBtn').style.display = 'none';
}

function populateFormAssessment(assessment) {
    // Set form action dynamically to the update route
    const form = document.getElementById('assessmentForm');
    form.action = `/emergency/ep-assessment/update/${assessment.ep_assessment_id}`;

    let methodInput = document.getElementById('_method');
    if (!methodInput) {
        methodInput = document.createElement('input');
        methodInput.type = 'hidden';
        methodInput.name = '_method';
        methodInput.id = '_method';
        form.appendChild(methodInput);
    }
    methodInput.value = 'PATCH'; // Ensure the form method is PATCH for update

    //
    document.getElementById('assessment-date-input').value = assessment.ep_assessment_date;
    document.getElementById('assessment-time-input').value = convertTo24Hour(assessment.ep_assessment_time);
    document.getElementById('assessmentInput').value = assessment.ep_assessment_assessments;
}

// Helper function to convert 12-hour time to 24-hour format
function convertTo24Hour(time) {
    let [hours, minutes] = time.split(':');
    let period = minutes.slice(-2); // Extract AM or PM
    minutes = minutes.slice(0, -2).trim(); // Remove AM/PM from minutes
    hours = parseInt(hours);

    if (period === 'PM' && hours !== 12) {
        hours += 12;
    } else if (period === 'AM' && hours === 12) {
        hours = 0;
    }

    // Format hours and minutes to HH:MM format
    hours = hours < 10 ? '0' + hours : hours;
    return `${hours}:${minutes}`;
}

function populateFormViewAssessment(assessment) {
    //
    document.getElementById('assessment-date-input').value = assessment.ep_assessment_date;
    document.getElementById('assessment-time-input').value = convertTo24Hour(assessment.ep_assessment_time);
    document.getElementById('assessmentInput').value = assessment.ep_assessment_assessments;
}


function changeFileInputToDownload() {
    // Hide the file input
   

    // Show the Download/Print buttons
    document.getElementById('downloadFileBtn').style.display = 'block';
}

// Simulate downloading the file (you can replace this with your own logic)
function downloadFile() {
    alert('Downloading file...');
    // Logic to download the file can be added here (e.g., using AJAX or linking to the file path)
}


function assessmentToggleLogs() {
    var logsSection = document.getElementById('assessmentLogsSection');
    var vitalSignsTable = document.getElementById('assessmentTableContainer');

    // Check if logs are currently visible
    if (logsSection.style.display === "none" || logsSection.style.display === "") {
        logsSection.style.display = "block"; // Show logs
        vitalSignsTable.style.display = "none"; // Hide the table
        document.getElementById('viewLogs').innerText = "View Assessment History"; // Update label text
    } else {
        logsSection.style.display = "none"; // Hide logs
        vitalSignsTable.style.display = "block"; // Show the table
        document.getElementById('viewLogs').innerText = "View Logs"; // Update label text
    }
}