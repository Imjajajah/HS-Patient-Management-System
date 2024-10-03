<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculation</title>
</head>
<body>
    <div>
        <label for="mdate">Date of Birth:</label>
        <input type="date" id="mdate" required>
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" id="age" placeholder="Age" readonly>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Event listener for the date change
            document.getElementById('mdate').addEventListener('input', function () {
                const dobValue = this.value; // This will be in YYYY-MM-DD format
                console.log('Selected Date of Birth:', dobValue); // For debugging

                if (dobValue) {
                    const dob = new Date(dobValue); // Create Date object from the input
                    console.log('DOB Date Object:', dob); // For debugging

                    // Calculate the age
                    const age = calculateAge(dob);
                    console.log('Calculated Age:', age); // For debugging

                    // Display the age
                    document.getElementById('age').value = age !== null ? `${age} years old` : '';
                } else {
                    document.getElementById('age').value = ''; // Clear the age input if no date is selected
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
    </script>
</body>
</html>
