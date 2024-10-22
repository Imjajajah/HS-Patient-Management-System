function makeHistoryFormReadonly() {
    const inputs = document.querySelectorAll('.datetime-input, .diagnosis-input, .treatment-input, .surgeries-input, .medication-input');
    inputs.forEach(input => {
        input.setAttribute('readonly', true);
    });

    // Change header text to "View Mode"
    document.getElementById('historyInputHeader').innerText = 'View Mode';

    // Change card-input border color to blue (View Mode)
    const cardInput = document.querySelector('.history-card-input');
    cardInput.classList.remove('card-input-yellow'); // Remove yellow (Edit Mode)
    cardInput.classList.remove('card-input-green');  // Remove green (Input Mode)
    cardInput.classList.add('card-input-blue');      // Add blue for View Mode

    // Hide buttons and show the relevant ones
    document.getElementById('historySaveBtn').style.display = 'none'; // Hide Save button
    document.getElementById('editSubmitHistory').style.display = 'none'; // Hide Save Changes button
    document.getElementById('historyCancelBtn').style.display = 'none'; // Hide Clear button
    
    // Show the Back to Input Mode button
    document.getElementById('backToInputButtonHistory').style.display = 'block'; // Show Back to Input Mode button
}

function enterHistoryEditMode() {
    const inputs = document.querySelectorAll('.datetime-input, .diagnosis-input, .treatment-input, .surgeries-input, .medication-input');
    inputs.forEach(input => {
        input.removeAttribute('readonly');
    });

    // Change header text to "Edit Mode"
    document.getElementById('historyInputHeader').innerText = 'Edit Mode';

    // Change card-input border color to yellow (Edit Mode)
    const cardInput = document.querySelector('.history-card-input');
    cardInput.classList.remove('card-input-blue');  // Remove blue (View Mode)
    cardInput.classList.remove('card-input-green'); // Remove green (Input Mode)
    cardInput.classList.add('card-input-yellow');   // Add yellow for Edit Mode

    // Hide buttons and show the relevant ones
    document.getElementById('historySaveBtn').style.display = 'none'; // Hide Save button
    document.getElementById('editSubmitHistory').style.display = 'block'; // Show Save Changes button
    document.getElementById('historyCancelBtn').style.display = 'none'; // Hide Clear button
    document.getElementById('backToInputButtonHistory').style.display = 'block'; // Show Back to Input Mode button
}

function showHistoryInputMode() {
    const inputs = document.querySelectorAll('.diagnosis-input, .treatment-input, .surgeries-input, .medication-input');
    inputs.forEach(input => {
        input.removeAttribute('readonly'); // Make inputs editable
        input.value = '';  // Clear fields for new input, except date and time
    });

    // Change header text back to "Input Mode"
    document.getElementById('historyInputHeader').innerText = 'Input Mode';

    // Change card-input border color to green (Input Mode)
    const cardInput = document.querySelector('.history-card-input');
    cardInput.classList.remove('card-input-blue');  // Remove blue (View Mode)
    cardInput.classList.remove('card-input-yellow'); // Remove yellow (Edit Mode)
    cardInput.classList.add('card-input-green');    // Add green for Input Mode

    // Show relevant buttons and hide others
    document.getElementById('historySaveBtn').style.display = 'block'; // Show Save button
    document.getElementById('editSubmitHistory').style.display = 'none'; // Hide Save Changes button
    document.getElementById('historyCancelBtn').style.display = 'block'; // Show Clear button
    document.getElementById('backToInputButtonHistory').style.display = 'none'; // Hide Back to Input Mode button

    // Optionally, you can also call enterHistoryEditMode to switch to edit mode after clearing fields
    // enterHistoryEditMode();
}
