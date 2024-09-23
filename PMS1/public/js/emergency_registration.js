document.addEventListener('DOMContentLoaded', function () {
    const isChecked = document.getElementById('unidentifiedCB').checked;
    document.getElementById('generateID-btn').disabled = !isChecked;

    console.log('Initial checkbox state:', isChecked ? 'Checked' : 'Unchecked');
    console.log('Initial button disabled state:', document.getElementById('generateID-btn').disabled ? 'Disabled' : 'Enabled');
});



document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('unidentifiedCB');
    const generateIDBtn = document.getElementById('generateID-btn');
    const sexSelect = document.querySelector('select[name="emergency_sex"]');
    const firstNameInput = document.querySelector('input[name="emergency_first_name"]');
    const lastNameInput = document.querySelector('input[name="emergency_last_name"]');

    // Initialize counter (for demonstration; should be retrieved from a server/database)
    let doeCounter = 0;

    checkbox.addEventListener('change', function () {
        const isChecked = this.checked;
        generateIDBtn.disabled = !isChecked;

        console.log('Checkbox state:', isChecked ? 'Checked' : 'Unchecked');
        console.log('Button disabled state:', generateIDBtn.disabled ? 'Disabled' : 'Enabled');
    });

    generateIDBtn.addEventListener('click', () => {
        if (sexSelect.value === 'Male') {
            firstNameInput.value = 'John';
        } else if (sexSelect.value === 'Female') {
            firstNameInput.value = 'Jane';
        } else {
            firstNameInput.value = '';
        }

        if (sexSelect.value) {
            doeCounter++;
            const paddedCounter = String(doeCounter).padStart(3, '0');
            lastNameInput.value = `Doe ${paddedCounter}`;
        } else {
            lastNameInput.value = '';
        }
    });

    // Initialize button state
    const isChecked = checkbox.checked;
    generateIDBtn.disabled = !isChecked;
});


document.addEventListener('DOMContentLoaded', function () {
    // Event listener for the date change
    document.getElementById('mdate').addEventListener('change', function () {
        const dob = new Date(this.value);
        console.log('Selected Date of Birth:', dob); // For debugging

        // Calculate the age
        const age = calculateAge(dob);

        // Display the age or leave blank
        document.getElementById('age').value = age ? `${age} years old` : '';
        console.log('Calculated Age:', age); // For debugging
    });
});

function calculateAge(dob) {
    if (!dob || isNaN(dob)) return null; // Check if date is valid

    const today = new Date();
    let age = today.getFullYear() - dob.getFullYear();
    const monthDiff = today.getMonth() - dob.getMonth();
    const dayDiff = today.getDate() - dob.getDate();

    // Adjust the age if the birthday hasn't occurred this year yet
    if (monthDiff < 0 || (monthDiff === 0 && dayDiff < 0)) {
        age--;
    }

    return age;
}




document.addEventListener('DOMContentLoaded', function () {
    // When the register button is clicked
    document.getElementById('registerBtn').addEventListener('click', function () {
        // Get the current date and time
        let currentDate = new Date();
        let dateStr = currentDate.toISOString().split('T')[0]; // format as YYYY-MM-DD
        let timeStr = currentDate.toTimeString().split(' ')[0].substring(0, 5); // format as HH:MM

        // Set the values in the date and time inputs
        document.getElementById('regDate').value = dateStr;
        document.getElementById('regTime').value = timeStr;

        // Show the modal
        $('#registerModal').modal('show');
    });
});

