<?php
// Optional: include your layout
// require_once __DIR__ . '/../layouts/dashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Request for Reimbursement Form</title>
    <link rel="stylesheet" href="/processing-system/public/css/reimbursement.css">
</head>
<body>

<h2>Request for Reimbursement Form</h2>

<form method="POST" action="/processing-system/public/submit-reimbursement">

    <h3>Applicant Details</h3>

    <label>Name:</label>
    <input type="text" name="employee_name" required>

    <label>Department:</label>
    <input type="text" name="department" required>

    <label>Pages:</label>
    <input type="text" name="page_no" placeholder="Number of attached documents">

    <label>Date:</label>
    <input type="date" name="request_date" required>

    <h3>Reimbursement Details</h3>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Date</th>
                <th>SI/OR #</th>
                <th>Even</th>
                <th>Particulars</th>
                <th>Person/Place</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="number" name="item_no[]"></td>
                <td><input type="date" name="item_date[]"></td>
                <td><input type="text" name="invoice_number[]"></td>
                <td><input type="text" name="even[]"></td>
                <td><input type="text" name="particulars[]"></td>
                <td><input type="text" name="person_place[]"></td>
                <td><input type="number" step="0.01" name="amount[]"></td>
            </tr>
        </tbody>
    </table>

    <br>

    <label>Total Amount:</label>
    <input type="number" step="0.01" name="total_amount" readonly>

    <label>Total Amount (in words):</label>
    <input type="text" name="amount_words">

    <h3>Approval</h3>

    <label>Prepared By:</label>
    <input type="text" name="prepared_by">

    <label>Confirmed By:</label>
    <input type="text" name="confirmed_by">

    <label>Checked By:</label>
    <input type="text" name="checked_by">

    <label>Approved By:</label>
    <input type="text" name="approved_by">

    <br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>