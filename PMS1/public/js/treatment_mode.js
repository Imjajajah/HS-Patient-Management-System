function makeTreatmentFormReadonly() {
    const inputs = document.querySelectorAll('.datetime-input, .weight-input'); // Adjusted to relevant input classes
    inputs.forEach(input => {
        input.setAttribute('readonly', true); // Make inputs read-only
    });

    // Change header text to "View Mode"
    document.getElementById('treatmentInputHeader').innerText = 'View Mode';

    // Change card-input border color to blue (View Mode)
    const cardInput = document.querySelector('.treatment-card-input'); // Assuming the entire card body is treated as card input
    cardInput.classList.remove('card-input-yellow'); // Remove yellow (Edit Mode)
    cardInput.classList.remove('card-input-green');  // Remove green (Input Mode)
    cardInput.classList.add('card-input-blue');      // Add blue for View Mode

    // Hide buttons and show the relevant ones
    document.getElementById('treatmentSaveBtn').style.display = 'none'; // Hide Save button
    document.getElementById('editSubmitTreatment').style.display = 'none'; // Hide Save Changes button
    document.getElementById('treatmentCancelBtn').style.display = 'none'; // Hide Print button

    // Show the Back to Input Mode button
    document.getElementById('backToInputButtonTreatment').style.display = 'block'; // Show Back to Input Mode button
}

function enterTreatmentEditMode() {
    const inputs = document.querySelectorAll('.datetime-input, .weight-input'); // Adjusted to relevant input classes
    inputs.forEach(input => {
        input.removeAttribute('readonly'); // Make inputs editable
    });

    // Change header text to "Edit Mode"
    document.getElementById('treatmentInputHeader').innerText = 'Edit Mode';

    // Change card-input border color to yellow (Edit Mode)
    const cardInput = document.querySelector('.treatment-card-input');
    cardInput.classList.remove('card-input-blue');  // Remove blue (View Mode)
    cardInput.classList.remove('card-input-green'); // Remove green (Input Mode)
    cardInput.classList.add('card-input-yellow');   // Add yellow for Edit Mode

    // Hide buttons and show the relevant ones
    document.getElementById('treatmentSaveBtn').style.display = 'none'; // Hide Save button
    document.getElementById('editSubmitTreatment').style.display = 'block'; // Show Save Changes button
    document.getElementById('treatmentCancelBtn').style.display = 'none'; // Hide Print button
    document.getElementById('backToInputButtonTreatment').style.display = 'block'; // Show Back to Input Mode button
}

function showTreatmentInputMode() {
    const inputs = document.querySelectorAll('.weight-input'); // Only clear relevant inputs
    inputs.forEach(input => {
        input.removeAttribute('readonly'); // Make inputs editable
        input.value = '';  // Clear fields for new input
    });

    // Change header text back to "Input Mode"
    document.getElementById('treatmentInputHeader').innerText = 'Input Mode';

    // Change card-input border color to green (Input Mode)
    const cardInput = document.querySelector('.treatment-card-input');
    cardInput.classList.remove('card-input-blue');  // Remove blue (View Mode)
    cardInput.classList.remove('card-input-yellow'); // Remove yellow (Edit Mode)
    cardInput.classList.add('card-input-green');    // Add green for Input Mode

    // Show relevant buttons and hide others
    document.getElementById('treatmentSaveBtn').style.display = 'block'; // Show Save button
    document.getElementById('editSubmitTreatment').style.display = 'none'; // Hide Save Changes button
    document.getElementById('treatmentCancelBtn').style.display = 'block'; // Show Print button
    document.getElementById('backToInputButtonTreatment').style.display = 'none'; // Hide Back to Input Mode button
}


function treatmentToggleLogs() {
    var logsSection = document.getElementById('treatmentLogsSection');
    var vitalSignsTable = document.getElementById('treatmentTableContainer');

    // Check if logs are currently visible
    if (logsSection.style.display === "none" || logsSection.style.display === "") {
        logsSection.style.display = "block"; // Show logs
        vitalSignsTable.style.display = "none"; // Hide the table
        document.getElementById('viewLogs').innerText = "View Treatment History"; // Update label text
    } else {
        logsSection.style.display = "none"; // Hide logs
        vitalSignsTable.style.display = "block"; // Show the table
        document.getElementById('viewLogs').innerText = "View Logs"; // Update label text
    }
}


