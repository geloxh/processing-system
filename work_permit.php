<?php
// Optional: include your layout
// require_once __DIR__ . '/../layouts/dashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Work Permit Form</title>
    <link rel="stylesheet" href="/processing-system/public/css/work_permit.css">
</head>
<body>

<h2>Request for Work Permit Form</h2>

<form method="POST" action="/processing-system/public/submit-work_permit">

    <h3>Gatepass Information</h3>

    <label>Unit Owner/Tenant:</label>
    <input type="text" name="unit_owner" required>

    <label>Name of Bearer:</label>
    <input type="text" name="bearer_name" required>

    <label>Floor/Unit No:</label>
    <input type="text" name="unit_no">

    <label>Date:</label>
    <input type="date" name="date" required>

    <label>Type of Service:</label>
    <select name="service_type" required>
        <option value="">-- Select --</option>
        <option value="delivery">Delivery</option>
        <option value="pull_out">Pull-Out</option>
    </select>

    <h3>Gatepass Details</h3>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Quantity</th>
                <th>Description</th>
                <th>Time</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="number" name="quantity[]">
                </td>
                <td>
                    <input type="text" name="description[]">
                </td>
                <td>
                    <input type="time" name="time[]">
                </td>
                <td>
                    <input type="text" name="remarks[]">
                </td>
            </tr>
        </tbody>
    </table>

    <br>

    <h3>Approval</h3>

    <label>Approved By:</label>
    <input type="text" name="approved_by" placeholder="Authorized Signatory">

    <label>Noted By:</label>
    <input type="text" name="noted_by" placeholder="Property Manager/Engineer">

    <label>Released By:</label>
    <input type="text" name="released_by" placeholder="Building Security">

    <label>Released Details:</label>
    <input type="text" name="released_details" placeholder="Date and time of Release">

    <br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>