



function makeFormReadonly() {
    const inputs = document.querySelectorAll('.step-form-horizontal input, .step-form-horizontal textarea');
    inputs.forEach(input => {
        input.setAttribute('readonly', true);
    });

    const selects = document.querySelectorAll('.step-form-horizontal select');
    selects.forEach(select => {
        select.setAttribute('disabled', true);
    });

    // Change header text to "View Mode"
    document.getElementById('inputHeader').innerText = 'View Mode';

    // Change card-input border color to blue
    const cardInput = document.querySelector('.card-input');
    cardInput.classList.remove('card-input-yellow'); // Remove yellow if in edit mode
    cardInput.classList.remove('card-input-green'); // Remove yellow if in edit mode
    cardInput.classList.add('card-input-blue'); // Add blue class for view mode

    // Hide the Close and Save buttons
    document.querySelector('.btn-secondary.btn.sweet-confirm').style.display = 'none'; // Hide Close button
    document.querySelector('.btn-primary.ms-3').style.display = 'none'; // Hide Save button

    // Hide the Save Changes button
    document.getElementById('editSubmit').style.display = 'none'; // Hide Save Changes button

    // Show the Back to Input Mode button
    document.getElementById('backToInputButton').style.display = 'block';
}

function enterEditMode() {
    const inputs = document.querySelectorAll('.step-form-horizontal input, .step-form-horizontal textarea');
    inputs.forEach(input => {
        input.removeAttribute('readonly');
    });

    const selects = document.querySelectorAll('.step-form-horizontal select');
    selects.forEach(select => {
        select.removeAttribute('disabled');
    });

    // Change header text to "Edit Mode"
    document.getElementById('inputHeader').innerText = 'Edit Mode';

    // Change card-input border color to yellow
    const cardInput = document.querySelector('.card-input');
    cardInput.classList.remove('card-input-blue'); // Remove blue if in view mode
    cardInput.classList.add('card-input-yellow'); // Add yellow class for edit mode

    // Hide the "Save" button and show "Save Changes" button
    document.getElementById('save-btn').style.display = 'none'; // Hide the "Save" button
    document.getElementById('editSubmit').style.display = 'block'; // Show "Save Changes" button

    // Hide the Close button and show the Back to Input Mode button
    document.querySelector('.btn-secondary.btn.sweet-confirm').style.display = 'none'; // Hide the Close button
    document.getElementById('backToInputButton').style.display = 'block'; // Show the Back to Input Mode button
}

function showInputMode() {
    const inputs = document.querySelectorAll('.step-form-horizontal input, .step-form-horizontal textarea');
    inputs.forEach(input => {
        input.removeAttribute('readonly');
    });

    const selects = document.querySelectorAll('.step-form-horizontal select');
    selects.forEach(select => {
        select.removeAttribute('disabled');
    });

    // Change header text back to "Input Mode"
    document.getElementById('inputHeader').innerText = 'Input Mode';

    // Change card-input border color to green
    const cardInput = document.querySelector('.card-input');
    cardInput.classList.remove('card-input-blue'); // Remove blue if in view mode
    cardInput.classList.remove('card-input-yellow'); // Remove yellow if in edit mode
    cardInput.classList.add('card-input-green'); // Add green class for input mode

    // Show the Close and Save buttons
    document.querySelector('.btn-secondary.btn.sweet-confirm').style.display = 'block'; // Show Close button
    document.getElementById('save-btn').style.display = 'block'; // Show Save button again

    // Hide the Save Changes button
    document.getElementById('editSubmit').style.display = 'none'; // Hide Save Changes button

    // Hide the Back to Input Mode button
    document.getElementById('backToInputButton').style.display = 'none'; // Hide Back to Input Mode button
}