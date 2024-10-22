function makeReviewFormReadonly() {
    const inputs = document.querySelectorAll('.datetime-input, .diagnosis-input, .prognosis-input, .impairments-evaluation-input, .activity-restriction-input, .personal-factor-input, .environmental-factor-input');
    inputs.forEach(input => {
        input.setAttribute('readonly', true); // Make inputs read-only
    });

    // Change header text to "View Mode"
    document.getElementById('reviewInputHeader').innerText = 'View Mode';

    // Change card-input border color to blue (View Mode)
    const cardInput = document.querySelector('.review-card-input'); // Assuming the entire card body is treated as card input
    cardInput.classList.remove('card-input-yellow'); // Remove yellow (Edit Mode)
    cardInput.classList.remove('card-input-green');  // Remove green (Input Mode)
    cardInput.classList.add('card-input-blue');      // Add blue for View Mode

    // Hide buttons and show the relevant ones
    document.getElementById('reviewSaveBtn').style.display = 'none'; // Hide Save button
    document.getElementById('editSubmitReview').style.display = 'none'; // Hide Save Changes button
    document.getElementById('reviewCancelBtn').style.display = 'none'; // Hide Clear button

    // Show the Back to Input Mode button
    document.getElementById('backToInputButtonReview').style.display = 'block'; // Show Back to Input Mode button
}

function enterReviewEditMode() {
    const inputs = document.querySelectorAll('.datetime-input, .diagnosis-input, .prognosis-input, .impairments-evaluation-input, .activity-restriction-input, .personal-factor-input, .environmental-factor-input');
    inputs.forEach(input => {
        input.removeAttribute('readonly'); // Make inputs editable
    });

    // Change header text to "Edit Mode"
    document.getElementById('reviewInputHeader').innerText = 'Edit Mode';

    // Change card-input border color to yellow (Edit Mode)
    const cardInput = document.querySelector('.review-card-input');
    cardInput.classList.remove('card-input-blue');  // Remove blue (View Mode)
    cardInput.classList.remove('card-input-green'); // Remove green (Input Mode)
    cardInput.classList.add('card-input-yellow');   // Add yellow for Edit Mode

    // Hide buttons and show the relevant ones
    document.getElementById('reviewSaveBtn').style.display = 'none'; // Hide Save button
    document.getElementById('editSubmitReview').style.display = 'block'; // Show Save Changes button
    document.getElementById('reviewCancelBtn').style.display = 'none'; // Hide Clear button
    document.getElementById('backToInputButtonReview').style.display = 'block'; // Show Back to Input Mode button
}

function showReviewInputMode() {
    const inputs = document.querySelectorAll('.diagnosis-input, .prognosis-input, .impairments-evaluation-input, .activity-restriction-input, .personal-factor-input, .environmental-factor-input'); // Only clear relevant inputs
    inputs.forEach(input => {
        input.removeAttribute('readonly'); // Make inputs editable
        input.value = '';  // Clear fields for new input
    });

    // Change header text back to "Input Mode"
    document.getElementById('reviewInputHeader').innerText = 'Input Mode';

    // Change card-input border color to green (Input Mode)
    const cardInput = document.querySelector('.review-card-input');
    cardInput.classList.remove('card-input-blue');  // Remove blue (View Mode)
    cardInput.classList.remove('card-input-yellow'); // Remove yellow (Edit Mode)
    cardInput.classList.add('card-input-green');    // Add green for Input Mode

    // Show relevant buttons and hide others
    document.getElementById('reviewSaveBtn').style.display = 'block'; // Show Save button
    document.getElementById('editSubmitReview').style.display = 'none'; // Hide Save Changes button
    document.getElementById('reviewCancelBtn').style.display = 'block'; // Show Clear button
    document.getElementById('backToInputButtonReview').style.display = 'none'; // Hide Back to Input Mode button
}
