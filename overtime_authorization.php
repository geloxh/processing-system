<?php
// Optional: include your layout
// require_once __DIR__ . '/../layouts/dashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Overtime Authorization Form</title>
    <link rel="stylesheet" href="/processing-system/public/css/overtime.css">
</head>
<body>

<h2>Overtime Authorization Form</h2>

<form method="POST" action="/processing-system/public/submit-overtime">

    <h3>Applicant Details</h3>

    <label>Employee Name:</label>
    <input type="text" name="employee_name" required>

    <label>Date:</label>
    <input type="date" name="request_date" required>

    <label>Department:</label>
    <input type="text" name="department" required>

    <h3>OT Request Details</h3>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Date</th>
                <th>Reason/s</th>
                <th>Hours Covered</th>
                <th>Total Hours</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="date" name="ot_date[]" required>
                </td>
                <td>
                    <input type="text" name="reason[]">
                </td>
                <td>
                    <input type="text" name="hours_covered[]" placeholder="Indicate OT time">
                </td>
                <td>
                    <input type="number" name="hours_total[]" step="0.1">
                </td>
            </tr>
        </tbody>
    </table>

    <br>

    <label>Total Hours Rendered:</label>
    <input type="number" name="total_hours" step="0.1" readonly>

    <h3>Approval</h3>

    <label>Prepared By:</label>
    <input type="text" name="prepared_by" placeholder="Name and Signature">

    <label>Approved By:</label>
    <input type="text" name="approved_by" placeholder="Immediate Head">

    <br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>