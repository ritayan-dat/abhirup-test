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
<style type="text/css">
	.ui-datepicker {
    /*background: transparent;*/
    background: white;
    color: red;
}
#error{
	var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

</style>
<body>
<form class="text-center border border-light p-5">
	<div class="form-group">
		<!-- user form -->
		<p>Date: <input type="text" id="datepicker"  placeholder="Dob" /></p>
		<p>Pincode:<input type="text" class="zipnumber" placeholder="Area Zip" /></p>
		<p>Number of dependent:<input type="text" class="number" placeholder="No. of dependent" /></p>
		<p>Loan amount:<input type="text" class="number" placeholder="Amount" /></p>
		<p>Salary:<input type="number" onkeypress="return event.charCode >= 47" min="1" placeholder="Income"/></p>
		<!-- web admin -->
		<p>Monthly Income:<input type="number" onkeypress="return event.charCode >= 47" min="1" placeholder="Income"/></p>
		<p>Monthly Rent:<input type="number" onkeypress="return event.charCode >= 47" min="1" placeholder="Rent"/></p>
		<p>Work exp:<input type="number" onkeypress="return event.charCode >= 46" min="0.5" placeholder="Experince of work"/></p>
		<p>Vehicle price<input type="number" onkeypress="return event.charCode >= 47" min="1" placeholder="price"/></p>
		<p>Aadhar card:<input type="text" class="number" placeholder="Aadhar number" /></p>
		<p>PAN Card:<input type="text" class="panid" placeholder="pan card" /></p>
		<p>Bank a/c no:<input type="text" class="number" placeholder="A/c no." /></p>
		<p>IFSC code:<input type="text" class="panid" placeholder="IFSC CODE" /></p>		
		<p>MICR code:<input type="text" class="number" placeholder="MICR code" /></p>
		<p>Mobile Number:<input type="text" class="mobile-valid" placeholder="Cell number"></p>
		<p>Email Id:<input id="email_address" placeholder="Email id"><span id="error" style="display:none;color:red;">Wrong email</span></p>
		<!-- web super admin -->
		<p>Cheque Number:<input type="text" class="cheque-valid" placeholder="Cheque number"></p>
		<p>NEFT/RTGS Date: <input type="text" id="datepicker-future"  placeholder="Date" /></p>
		<!-- few things same as web like web admin -->
	</div>

</form>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
	$(function() {
    $( "#datepicker" ).datepicker({  maxDate: new Date() });
  });
	$(function() {
    $( "#datepicker-future" ).datepicker({  minDate: new Date() });
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
	$('.zipnumber').on('keypress', function(e) {

            var $this = $(this);
            var regex = new RegExp("^[0-9\b]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            // for 6 digit number only
            if ($this.val().length > 5) {
                e.preventDefault();
                return false;
            }
            if (e.charCode < 54 && e.charCode > 47) {
                if ($this.val().length == 0) {
                    e.preventDefault();
                    return false;
                } else {
                    return true;
                }

            }
            if (regex.test(str)) {
                return true;
            }
            e.preventDefault();
            return false;
        });
$(".panid").keydown(function (e){
		var k = e.keyCode || e.which;
		var ok = k >= 65 && k <= 90 || // A-Z
			k >= 96 && k <= 105 || // a-z
			k >= 35 && k <= 40 || // arrows
			k == 9 || //tab
			k == 46 || //del
			k == 8 || // backspaces
			(!e.shiftKey && k >= 48 && k <= 57); // only 0-9 (ignore SHIFT options)

		if(!ok || (e.ctrlKey && e.altKey)){
			e.preventDefault();
		}
	});
$('.mobile-valid').on('keypress', function(e) {

            var $this = $(this);
            var regex = new RegExp("^[0-9\b]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            // for 10 digit number only
            if ($this.val().length > 9) {
                e.preventDefault();
                return false;
            }
            if (e.charCode < 54 && e.charCode > 47) {
                if ($this.val().length == 0) {
                    e.preventDefault();
                    return false;
                } else {
                    return true;
                }

            }
            if (regex.test(str)) {
                return true;
            }
            e.preventDefault();
            return false;
        });
$('.cheque-valid').on('keypress', function(e) {

            var $this = $(this);
            var regex = new RegExp("^[0-9\b]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            // for 6 digit number only
            if ($this.val().length > 5) {
                e.preventDefault();
                return false;
            }
            if (e.charCode < 54 && e.charCode > 47) {
                if ($this.val().length == 0) {
                    e.preventDefault();
                    return false;
                } else {
                    return true;
                }

            }
            if (regex.test(str)) {
                return true;
            }
            e.preventDefault();
            return false;
        });
$('#email_address').on('keypress', function() {
    var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
    if(!re) {
        $('#error').show();
    } else {
        $('#error').hide();
    }
})

   });		
</script>