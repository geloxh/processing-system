<?php 
// Optional: include your layout
// require_once __DIR__ . '/../layouts/dashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Request Form</title>
    <link rel="stylesheet" href="/processing-system/public/css/vehicle_request.css">
</head>
<body>

<h2>Vehicle Request Form</h2>

<form method="POST" action="/processing-system/public/submit-vehicle_request">

    <h3>Applicant Details</h3>

    <label>Car/Plate Number:</label>
    <input type="text" name="car_available" required>

    <label>Date:</label>
    <input type="date" name="date" required>

    <label>Applicant:</label>
    <input type="text" name="employee_name" required>

    <label>Department:</label>
    <input type="text" name="department" required>

    <label>Total Mileage:</label>
    <input type="number" name="total_mileage" required>

    <label>Schedule Time:</label>
    <input type="text" name="schedule_time" placeholder="Departure and arrival time">

    <label>Type of Trip:</label>
    <select name="trip_type" required>
        <option value="">-- Select --</option>
        <option value="journey">Journey</option>
        <option value="round">Round Trip</option>
        <option value="single">Single</option>
    </select>

    <h3>Destination Details</h3>

    <label>Destination 1:</label>
    <input type="text" name="destination_1">
    <label>Purpose:</label>
    <input type="text" name="purpose_1">

    <label>Destination 2:</label>
    <input type="text" name="destination_2">
    <label>Purpose:</label>
    <input type="text" name="purpose_2">

    <label>Destination 3:</label>
    <input type="text" name="destination_3">
    <label>Purpose:</label>
    <input type="text" name="purpose_3">

    <label>Destination 4:</label>
    <input type="text" name="destination_4">
    <label>Purpose:</label>
    <input type="text" name="purpose_4">

    <label>Notes:</label>
    <input type="text" name="notes">

    <h3>Approval</h3>

    <label>Prepared By:</label>
    <input type="text" name="prepared_by">

    <label>Confirmed By:</label>
    <input type="text" name="confirmed_by">

    <label>Checked By:</label>
    <input type="text" name="checked_by">

    <label>Driver:</label>
    <input type="text" name="driver">

    <br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>