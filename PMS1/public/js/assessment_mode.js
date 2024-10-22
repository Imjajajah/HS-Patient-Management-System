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
}
