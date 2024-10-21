document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('unidentifiedCB');
    const generateIDBtn = document.getElementById('generateID-btn');
    const sexSelect = document.querySelector('select[name="emergency_sex"]');
    const firstNameInput = document.querySelector('input[name="emergency_first_name"]');
    const lastNameInput = document.querySelector('input[name="emergency_last_name"]');
    const messageElement = document.getElementById('sex-selection-message'); // New message element

    // Initialize counter (for demonstration; should be retrieved from a server/database)
    let doeCounter = 0;

    // Initialize button state
    updateButtonState();

    checkbox.addEventListener('change', function () {
        updateButtonState();
    });

    generateIDBtn.addEventListener('click', () => {
        // Check if sex is selected before proceeding
        if (!sexSelect.value) {
            messageElement.textContent = "Please select patient's sex before generating an ID."; // Show warning message
            messageElement.style.color = "red"; // Change text color to red
            return; // Stop the function if sex is not selected
        } else {
            messageElement.textContent = ""; // Clear the message if sex is selected
        }

        // Set first name based on selected sex
        if (sexSelect.value === 'Male') {
            firstNameInput.value = 'John Doe';
        } else if (sexSelect.value === 'Female') {
            firstNameInput.value = 'Jane Doe';
        } else {
            firstNameInput.value = '';
        }

        // Fetch a unique ID and set it in the relevant input fields
        fetch('/generate-unique-id')
            .then(response => response.json())
            .then(data => {
                document.getElementById('patientTemporaryID').value = data.id;
                lastNameInput.value = data.id; // Set the value to the last name input
            })
            .catch(error => console.error('Error:', error));
    });

    function updateButtonState() {
        const isChecked = checkbox.checked;
        generateIDBtn.disabled = !isChecked;
        console.log('Checkbox state:', isChecked ? 'Checked' : 'Unchecked');
        console.log('Button disabled state:', generateIDBtn.disabled ? 'Disabled' : 'Enabled');
    }
});



document.addEventListener('DOMContentLoaded', function () {
    // Event listener for the date change
    document.getElementById('birthOfDate').addEventListener('input', function () {
        const dobValue = this.value; // This will be in YYYY-MM-DD format
        console.log('Selected Date of Birth:', dobValue); // For debugging

        if (dobValue) {
            const dob = new Date(dobValue); // Create Date object from the input
            console.log('DOB Date Object:', dob); // For debugging

            // Calculate the age
            const age = calculateAge(dob);
            console.log('Calculated Age:', age); // For debugging

            // Display the age
            document.getElementById('patientAge').value = age !== null ? `${age}` : '';
        } else {
            document.getElementById('patientAge').value = ''; // Clear the age input if no date is selected
        }
    });
});

function calculateAge(dob) {
    if (!dob || isNaN(dob.getTime())) return null; // Check if date is valid

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


function validateBloodPressure() {
    const bpInput = document.getElementById('bloodPressure').value;
    const bpError = document.getElementById('bpError');

    // Regular expression for matching blood pressure format (e.g., 100/80)
    const bpPattern = /^\d{2,3}\/\d{2,3}$/;

    if (!bpPattern.test(bpInput)) {
        // If input doesn't match, show error message
        bpError.style.display = 'block';
    } else {
        // Hide the error message if input is valid
        bpError.style.display = 'none';
    }
}


function validateTemperature() {
    const temperature = document.getElementById('temperature').value;
    const temperatureError = document.getElementById('temperatureError');

    // Regular expression for matching temperature between 24.0 and 45.0
    const tempPattern = /^(2[4-9](\.\d)?|3[0-9](\.\d)?|4[0-5](\.\d)?)$/;

    if (!tempPattern.test(temperature)) {
        // If input doesn't match, show error message
        temperatureError.style.display = 'block';
    } else {
        // Hide the error message if input is valid
        temperatureError.style.display = 'none';
    }
}

function validateHeartRate() {
    const heartRate = document.getElementById('heartRate').value;
    const heartRateError = document.getElementById('heartRateError');

    // Regular expression for matching heart rate between 60 and 100 (inclusive)
    const hrPattern = /^(6[0-9]|[7-9][0-9]|100)$/;

    if (!hrPattern.test(heartRate)) {
        // If input doesn't match, show error message
        heartRateError.style.display = 'block';
    } else {
        // Hide the error message if input is valid
        heartRateError.style.display = 'none';
    }
}

function validatePulseRate() {
    const pulseRate = document.getElementById('pulseRate').value;
    const pulseRateError = document.getElementById('pulseRateError');

    // Regular expression for matching pulse rate between 60 and 100 (inclusive)
    const prPattern = /^(6[0-9]|[7-9][0-9]|100)$/;

    if (!prPattern.test(pulseRate)) {
        // If input doesn't match, show error message
        pulseRateError.style.display = 'block';
    } else {
        // Hide the error message if input is valid
        pulseRateError.style.display = 'none';
    }
}

function validateRespirationRate() {
    const respirationRate = document.getElementById('respirationRate').value;
    const respirationRateError = document.getElementById('respirationRateError');

    // Regular expression for matching respiration rate between 12 and 20 (inclusive)
    const rrPattern = /^(1[2-9]|20)$/;

    if (!rrPattern.test(respirationRate)) {
        // If input doesn't match, show error message
        respirationRateError.style.display = 'block';
    } else {
        // Hide the error message if input is valid
        respirationRateError.style.display = 'none';
    }
}

