<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Bed Availability</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .bed-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 rooms per row */
            gap: 10px;
        }
        .room {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        .available {
            background-color: #c8e6c9; /* Green for available */
        }
        .occupied {
            background-color: #ffcdd2; /* Red for occupied */
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .update-status {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Real-Time Bed Availability</h1>
        <div id="bed-grid" class="bed-grid">
            <!-- Dynamic content will be inserted here -->
        </div>
        <button id="update-status" class="update-status">Update Bed Status</button>
    </div>

    <script>
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
    </script>
</body>