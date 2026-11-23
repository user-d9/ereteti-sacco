<?php
$page_title = 'Apply for membership';
include 'header.php';
?>
<main>
<p>  Any dairy farmer within reach of one of our three routes
 may apply to join Ereteti. You will need your national ID
 number and a phone we can reach you on. Once your
 membership number is issued you may deliver from that day,
 and you are paid once a month for the litres we acce pt</p>
 <fieldset>
<legend>Your details</legend>
<label for="firstname">First name</label>
<input type="text" id="firstname" name="firstname">
<br><label for="lastname">last name</label>
<input type="text"  id="last name"  name="last name"></br>
<label for="national_id">national_id</label>
<input type="text"  id="natioal_id" name="national_id" >

<label for="phone_field ">phone_field</label>
<input type="tel" id="phone_field" name="phone_field" placeholder="07xxxxxxxx" pattern="07[0-9]{10}" title="title="Six digits, starting 12"">


</fieldset>

</main>








<?php include 'footer.php'; ?>