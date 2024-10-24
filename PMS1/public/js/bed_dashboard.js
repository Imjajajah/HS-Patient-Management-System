// Initial bed data (this could be replaced with an API call later)
const beds = [
    { room_number: '101', status: 'available', patient_name: '' },
    { room_number: '102', status: 'occupied', patient_name: 'John Doe' },
    { room_number: '103', status: 'available', patient_name: '' },
    { room_number: '104', status: 'occupied', patient_name: 'Jane Smith' },
    { room_number: '105', status: 'available', patient_name: '' },
    { room_number: '106', status: 'occupied', patient_name: 'Mary Johnson' },
    { room_number: '107', status: 'available', patient_name: '' },
    { room_number: '108', status: 'occupied', patient_name: 'Michael Brown' },
];

// Function to render the bed status grid
function renderBedGrid() {
    const bedGrid = document.getElementById('bed-grid');
    bedGrid.innerHTML = ''; // Clear existing grid

    beds.forEach(bed => {
        const roomDiv = document.createElement('div');
        roomDiv.classList.add('room');
        roomDiv.classList.add(bed.status === 'available' ? 'available' : 'occupied');
        roomDiv.innerHTML = `
            <h3>Room ${bed.room_number}</h3>
            <p>Status: ${bed.status === 'available' ? 'Available' : 'Occupied'}</p>
            ${bed.patient_name ? `<p>Patient: ${bed.patient_name}</p>` : ''}
        `;
        bedGrid.appendChild(roomDiv);
    });
}

// Function to simulate updating bed statuses
function updateBedStatuses() {
    // Simulate random changes in bed statuses
    const randomIndex = Math.floor(Math.random() * beds.length);
    beds[randomIndex].status = beds[randomIndex].status === 'available' ? 'occupied' : 'available';
    beds[randomIndex].patient_name = beds[randomIndex].status === 'occupied' ? 'Patient ' + (Math.floor(Math.random() * 100) + 1) : '';
    renderBedGrid(); // Re-render the grid after updating
}

// Render the initial bed grid
renderBedGrid();

// Add event listener to the update button
document.getElementById('update-status').addEventListener('click', updateBedStatuses);
