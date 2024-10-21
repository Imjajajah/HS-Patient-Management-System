window.onload = function() {
    setCurrentDate();
    setCurrentTime();
};

function setCurrentDate() {
    const dateInput = document.getElementById('datetime-input');
    const now = new Date();
    const formattedDate = now.toISOString().split('T')[0]; // Format: YYYY-MM-DD
    if (dateInput) { // Ensure element is found
        dateInput.value = formattedDate;
    }
}

function setCurrentTime() {
    const timeInput = document.getElementById('datetime-input-time');
    const now = new Date();
    const formattedTime = now.toTimeString().split(' ')[0].substring(0, 5); // Format: HH:MM
    if (timeInput) { // Ensure element is found
        timeInput.value = formattedTime;
    }
}