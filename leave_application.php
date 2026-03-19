<!DOCTYPE html>
<html>
<head>
    <title>Leave Application Form</title>
    <link rel="stylesheet" href="../views/leave_application.css">
</head>
<body>

<h2>Leave Application Form</h2>

<form method="POST" action="/processing-system/public/submit-leave_application">

    <h3>Leave Details</h3>

    <label>Name:</label>
    <input type="text" name="employee_name" required>

    <label>Department:</label>
    <input type="text" name="department" required>

    <label>ID No:</label>
    <input type="text" name="page_no" placeholder="Optional">

    <label>Date:</label>
    <input type="date" name="date" required>

    <h3>Leave Date</h3>

    <label>From:</label>
    <input type="date" name="from_date">

    <label>To:</label>
    <input type="date" name="to_date">

    <label>Number of Leave Days:</label>
    <input type="number" name="num_of_leave">

    <h3>Leave Description</h3>

    <label>Type of Leave:</label>
    <select name="leave_type" required>
        <option value="">Select type</option>
        <option value="vacation">Vacation</option>
        <option value="sick">Sick</option>
        <option value="parental">Parental</option>
        <option value="other">Other</option>
    </select>

    <label>In case of Vacation:</label>
    <select name="vacation_leave">
        <option value="">Select Location</option>
        <option value="local">Local</option>
        <option value="abroad">Abroad</option>
    </select>

    <label>In case of Sick:</label>
    <select name="sick_leave">
        <option value="">Select Recovery</option>
        <option value="hospital">Hospital</option>
        <option value="out_patient">Out Patient</option>
    </select>

    <label>Payment Term:</label>
    <select name="payment_term" required>
        <option value="">Select Pay Option</option>
        <option value="paid">Paid Leave</option>
        <option value="unpaid">Unpaid Leave</option>
    </select>

    <h3>Approval</h3>

    <label>Applicant:</label>
    <input type="text" name="prepared_by">

    <label>Checked By:</label>
    <input type="text" name="checked_by">

    <label>Approved By:</label>
    <input type="text" name="approved_by">

    <br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>