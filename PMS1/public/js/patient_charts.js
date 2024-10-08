function showNormalRange(inputId, element) {
    let message = '';
    switch (inputId) {
        case 'bpInput':
            message = `Normal BP: ${normalRanges.bp.systolicMin}/${normalRanges.bp.diastolicMin} to ${normalRanges.bp.systolicMax}/${normalRanges.bp.diastolicMax}`;
            break;
        case 'hrInput':
            message = `Normal HR: ${normalRanges.hr.min}-${normalRanges.hr.max}`;
            break;
        case 'prInput':
            message = `Normal PR: ${normalRanges.pr.min}-${normalRanges.pr.max}`;
            break;
        case 'tempInput':
            message = `Normal Temp: ${normalRanges.temp.min}-${normalRanges.temp.max} °C`;
            break;
        case 'o2Input':
            message = `Normal O2Sat: ${normalRanges.o2.min}-${normalRanges.o2.max}%`;
            break;
        case 'painScaleInput':
            message = `Pain Scale: ${normalRanges.painScale.min}-${normalRanges.painScale.max}`;
            break;
        case 'respPatternInput':
            message = `Normal Resp Rate: ${normalRanges.respRate.min}-${normalRanges.respRate.max}`;
            break;
        case 'bmiInput':
            message = `Normal BMI: ${normalRanges.bmi.min}-${normalRanges.bmi.max}`;
            break;
    }

    // Set the tooltip content
    element.setAttribute('title', message);
    
    // Initialize the Bootstrap tooltip
    $(element).tooltip('show');
}

// Add event listeners to input fields to show tooltips on focus
document.querySelectorAll('input').forEach(input => {
    input.addEventListener('focus', function () {
        showNormalRange(this.id, this); // Pass the id instead of name
    });
});

// Form validation on submission
document.querySelector('form').addEventListener('submit', function (event) {
    let valid = true;
    
    // Loop through all input fields to check if they are filled
    document.querySelectorAll('input').forEach(input => {
        if (!input.value) {
            valid = false;
            input.classList.add('is-invalid');
        } else {
            input.classList.remove('is-invalid');
        }
    });

    if (!valid) {
        event.preventDefault(); // Prevent form submission
        alert('Please fill out all fields.');
    }
});

// Initialize all tooltips on page load
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});