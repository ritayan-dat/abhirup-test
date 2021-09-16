<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> <!-- bts cdn -->
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> <!-- /*jquery*/ -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!-- js cdn -->
	
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.0-rc.2/jquery-ui.js" integrity="sha256-bLjSmbMs5XYwqLIj5ppZFblCo0/9jfdiG/WjPhg52/M=" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
<form>
<p>Date: <input type="text" id="datepicker"  placeholder="Dob" /></p>
<p>Pincode:<input type="text" class="number" placeholder="Area Zip" /></p>
<p>Number of dependent:<input type="text" class="number" placeholder="No. of dependent" /></p>
<p>Loan amount:<input type="text" class="number" placeholder="Amount" /></p>
<p>Salary:<input type="number" onkeypress="return event.charCode >= 46" min="1" placeholder="Income"/></p>
</form>
</body>
</html>
<script type="text/javascript">
	$(function() {
    $( "#datepicker" ).datepicker({  maxDate: new Date() });
  });
	$('.number').keypress(function(event) {
    if(event.which < 48
    || event.which > 59) {
        event.preventDefault();
    } // prevent if not number/dot

    if(event.which == 48
    && $(this).val().indexOf('.') != -1) {
        event.preventDefault();
    } // prevent if already dot
});

</script>