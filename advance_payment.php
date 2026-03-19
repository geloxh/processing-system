<?php
// Optional: include your layout
// require_once __DIR__ . '/../layouts/dashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Advance Payment Request Form</title>
    <link rel="stylesheet" href="/processing-system/public/css/advance.css">
</head>
<body>

<h2>Advance Payment Request Form</h2>

<form method="POST" action="/processing-system/public/submit-advance">

    <h3>Applicant Details</h3>

    <label>Applicant:</label>
    <input type="text" name="employee_name" required>

    <label>Department:</label>
    <input type="text" name="department" required>

    <label>Pages:</label>
    <input type="text" name="page_no" placeholder="Number of attached documents">

    <label>Date:</label>
    <input type="date" name="date" required>

    <label>Project Name:</label>
    <input type="text" name="project_name">

    <h3>Payment Details</h3>

    <label>Type of Payment:</label>
    <select name="payment_type" required>
        <option value="">-- Select --</option>
        <option value="Cash">Cash</option>
        <option value="Bank Transfer">Bank Transfer</option>
        <option value="Cheque">Cheque</option>
    </select>

    <label>Payee:</label>
    <input type="text" name="payee" required>

    <label>Account Name:</label>
    <input type="text" name="account_name">

    <label>Bank Name:</label>
    <input type="text" name="bank_name">

    <label>Bank Account No:</label>
    <input type="text" name="bank_account_no">

    <label>Address:</label>
    <input type="text" name="address">

    <label>Purpose:</label>
    <textarea name="purpose" rows="3"></textarea>

    <h3>Item Details</h3>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Item</th>
                <th>Description</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="item[]"></td>
                <td><input type="text" name="description[]"></td>
                <td>
                    <input type="number" step="0.01" name="unit_price[]" class="unit_price">
                </td>
                <td>
                    <input type="number" name="quantity[]" class="quantity">
                </td>
                <td>
                    <input type="number" step="0.01" name="amount[]" class="amount" readonly>
                </td>
            </tr>
        </tbody>
    </table>

    <br>

    <label>Total Amount:</label>
    <input type="number" step="0.01" name="total_amount" id="total_amount" readonly>

    <label>Total Amount (in words):</label>
    <input type="text" name="amount_words">

    <h3>Approval</h3>

    <label>Prepared By:</label>
    <input type="text" name="prepared_by">

    <label>Checked By:</label>
    <input type="text" name="checked_by">

    <label>Approved By:</label>
    <input type="text" name="approved_by">

    <label>Paid By:</label>
    <input type="text" name="paid_by">

    <br><br>

    <button type="submit">Submit</button>

</form>

<script>
document.addEventListener("input", function () {
    let unit  = document.querySelector(".unit_price");
    let qty   = document.querySelector(".quantity");
    let amt   = document.querySelector(".amount");
    let total = document.getElementById("total_amount");

    let unitVal = parseFloat(unit.value) || 0;
    let qtyVal  = parseFloat(qty.value) || 0;

    let amount = unitVal * qtyVal;

    amt.value   = amount.toFixed(2);
    total.value = amount.toFixed(2);
});
</script>

</body>
</html>