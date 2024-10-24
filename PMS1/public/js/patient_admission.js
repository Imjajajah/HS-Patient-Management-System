document.addEventListener('DOMContentLoaded', function () {
    let currentStep = 0;
    const steps = document.querySelectorAll('.step');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    const submitBtn = document.getElementById('submitBtn');
    const form = document.getElementById('registrationForm'); // Reference to the form

    function showStep(stepIndex) {
        steps.forEach((step, index) => {
            step.style.display = (index === stepIndex) ? 'block' : 'none';
        });

        prevBtn.style.display = (stepIndex === 0) ? 'none' : 'inline';
        nextBtn.style.display = (stepIndex === steps.length - 1) ? 'none' : 'inline';
        submitBtn.style.display = (stepIndex === steps.length - 1) ? 'inline' : 'none';
    }

    function validateCurrentStep() {
        const inputs = steps[currentStep].querySelectorAll('input[required], select[required]');
        let isValid = true;
    
        inputs.forEach(input => {
            if (input.type === 'text' || input.type === 'select-one') {
                if (input.value.trim() === '') {  // Check if the input is empty
                    isValid = false;
                    input.classList.add('is-invalid'); // Highlight the invalid input field
                } else {
                    input.classList.remove('is-invalid'); // Remove the invalid state
                }
            }
        });
    
        return isValid;
    }

    nextBtn.addEventListener('click', (event) => {
        // First validate the current step's input fields
        if (!validateCurrentStep()) {
            // Prevent going to the next step if validation fails
            Swal.fire({
                icon: 'error',
                title: 'Incomplete Fields',
                text: 'Please fill out all required fields before proceeding!',
            });
            return;  // Exit the function and do not proceed
        }
    
        // If validation passes, go to the next step
        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    });

    prevBtn.addEventListener('click', () => {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    });

    // Initial step display
    showStep(currentStep);

    // Prevent closing the modal on clicking inside it
    document.getElementById('patientAdmissionModal').addEventListener('click', function (event) {
        event.stopPropagation();
    });
});
