<?php
$page_title = 'Apply for membership';
include 'includes/header.php';
?>
<main>
<p>Any dairy farmer within reach of one of our three routes
may apply to join Ereteti. You will need your national ID
number and a phone we can reach you on. Once your
membership number is issued you may deliver from that day,
and you are paid once a month for the litres we accept.</p>

<form action="process-register.php" method="get">
<fieldset>
<legend>Your details</legend>

<label for="first_name">First name</label>
<input type="text" id="first_name" name="first_name" required>
<br>
<label for="last_name">Last name</label>
<input type="text" id="last_name" name="last_name" required>
<br>
<label for="national_id">National ID</label>
<input type="text" id="national_id" name="national_id">
<br>
<label for="phone">Phone</label>
<input type="tel" id="phone" name="phone" placeholder="07xxxxxxxx"
       pattern="07[0-9]{8}" title="10 digits, starting 07" required>
<br>
<label for="route">Route</label>
<select id="route" name="route">
<option value="1">Kiserian</option>
<option value="2">Ngong</option>
<option value="3">Rongai</option>
</select>
<br>
<button type="submit">Apply to join</button>

</fieldset>
</form>
</main>

<?php include 'includes/footer.php'; ?>