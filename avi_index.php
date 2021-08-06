<!DOCTYPE html>
<html>
<head>
	<title>Exam Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.16/css/bootstrap-multiselect.css" integrity="sha512-DJ1SGx61zfspL2OycyUiXuLtxNqA3GxsXNinUX3AnvnwxbZ+YQxBARtX8G/zHvWRG9aFZz+C7HxcWMB0+heo3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js" integrity="sha512-vSyPWqWsSHFHLnMSwxfmicOgfp0JuENoLwzbR+Hf5diwdYTJraf/m+EKrMb4ulTYmb/Ra75YmckeTQ4sHzg2hg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.css" integrity="sha512-2sFkW9HTkUJVIu0jTS8AUEsTk8gFAFrPmtAxyzIhbeXHRH8NXhBFnLAMLQpuhHF/dL5+sYoNHWYYX2Hlk+BVHQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stude.css">
    <link rel="stylesheet" type="text/css" href="coreg.css">
</head>
<style>
        .mul-select{
            width: 100%;
        }

    </style>
<body>
<div class="container">
		<ul class="nav nav-tabs nav-justified">
  			<!-- <li class="nav-item"><a class="nav-link"  data-bs-toggle="tab" href="#home">Home</a></li> -->
  			<li class="nav-item"><a class="nav-link"  data-bs-toggle="tab" href="#reg">Student Registration</a></li>
  			<li class="nav-item"><a class="nav-link"  data-bs-toggle="tab" href="#othr">Coach Registration</a></li>
  </li>
		</ul>
		<div class="tab-content">
			<!-- div class="tab-pane active" id="home">
				<h3>Home</h3>
				<p>
					Cricket is a beautiful "bat and ball" game. And with an estimated 1 billion fans worldwide, it is the second-most popular sport in the world behind soccer. To the uninitiated, however, cricket can seem like a far-away universe.

						One day, you score a hundred, and in the next game, you go for a duck.

						One day, you take five wickets, and another, you concede 100 runs without bagging a scalp. 

						One day, you make a stunning catch, and the next, you make a simple drop that decides the fate of a match.
				</p>
			</div> -->
			<div class="tab-pane" id="reg">
				<h3>Student Registration</h3>
				<form action="stureg.php" method="POST">
					<div class="mb-4">
						<label for="exampleFormControlInput1" class="form-label">Student Name</label>
        				<input class="form-control" type="text" id="sname" name="sname" placeholder="Full Name" aria-label="default input example"><br>
        				<label for="exampleFormControlInput1" class="form-label">Parent Name</label>
        				<input class="form-control" type="text" id="pname" name="pname" placeholder="Full Name" aria-label="default input example"><br>
        				<label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
 		 				<input type="date" class="form-control" id="dob" name="dob">
 		 				<br>
        				<label for="exampleFormControlInput1" class="form-label">Email address</label>
 		 				<input type="text" class="form-control" id="emid" name="emld" placeholder="name@domain.com">
 		 				<br>
 		 				<label for="exampleFormControlInput1" class="form-label">Class</label>
 		 				<div class="page">
  						<div class="select-dropdown" >
   						<select id="standr" name="standr" onchange="makeDept(this.value)">
   							<option value="">No Class</option>
      						<option value="1">1</option>
      						<option value="2">2</option>
     						<option value="3">3</option>
     						<option value="4">4</option>
      						<option value="5">5</option>
     						<option value="6">6</option>
     						<option value="7">7</option>
      						<option value="8">8</option>
     						<option value="9">9</option>
     						<option value="10">10</option>
      						<option value="11">11</option>
     						<option value="12">12</option>
    					</select>
 					 </div>
					</div>
					<select id="deptSelect" size="1" name="depts">
              		<option value="" disabled selected>Choose deperment</option>
              			<option></option>
            			</select><br>
 		 				<label for="exampleFormControlInput1" class="form-label">Section</label>
 		 				<div class="page">
  						<div class="select-dropdown">
   						<select id="sect" name="sect">
   							<option value="">No section</option>
      						<option value="A">A</option>
      						<option value="B">B</option>
     						<option value="C">C</option>
    					</select>
 					 </div>
					</div>
 		 				<label for="exampleFormControlTextarea1" class="form-label">Address</label>
  						<textarea class="form-control" id="address" name="address" rows="3" placeholder="Your full address needed"></textarea>
						<br>
						<label for="exampleFormControlInput1" class="form-label">State:</label>
						<select id="countrySelect" name="states" size="1" onchange="makeSubmenu(this.value)">
							<option value="" disabled selected>Choose State</option>
							<option>Odisha</option>
							<option>Maharashtra</option>
							<option>Kerala</option>
							<option>West_Bengal</option>
							<option>Karnataka</option>
							<option>Uttarpradesh</option>
							<option>Bihar</option>
							</select>
							<label for="exampleFormControlInput1" class="form-label">City:</label>
						<select id="citySelect" size="1" name="citys">
							<option value="" disabled selected>Choose City</option>
							<option></option>
						</select>
						<br>
 		 				<label for="exampleFormControlInput1" class="form-label">Pincode</label>
 		 				<input type="number" class="form-control" id="pcode" name="pcode" placeholder="Pin/Zip Code"><br>
 		 				<label>Gender :
	
						<label for="male">Male<input type="radio" class="subs" id="subs" name="subs"  value="male"></label>
	
						<label for="female">Female<input type="radio" class="subs" id="subs" name="subs" value="female"></label><br></label>
						<br><br>
						<input type="checkbox" class="myCheckBox" id="terms_and_conditions" value="1">&nbsp;Accept All terms and condition
						<br>
						
						<br>
						<button type="submit" name="" class="btn btn-primary" onclick="return stuvld()" id="submit_button" disabled>Submit</button>
					</div>
					<div id="snackbar">Registerd successful</div>
				</form>
			</div>
			<div class="tab-pane" id="othr">
				<h3>Coach Registration</h3>
				<form action="coreg.php" method="POST">
					<div class="mb-3">
        				<label for="exampleFormControlInput1" class="form-label">Full Name</label>
        				<input class="form-control" type="text" id="name" name="fname" placeholder="Full Name" aria-label="default input example"><br>
        				<label for="exampleFormControlInput3" class="form-label">Email address</label>
 		 				<input type="text" class="form-control" id="emild" name="emild" placeholder="name@domain.com">
 		 				<br>
 		 				<label for="exampleFormControlInput1" class="form-label">Total Experience</label>
 		 				<input type="number" class="form-control" id="exprc" name="exprc" placeholder="enter number of year">
 		 				<br>
 		 				<label for="exampleFormControlTextarea1" class="form-label">Address</label>
  						<textarea class="form-control" id="addressy" name="address" rows="3" placeholder="Your full address needed"></textarea>
						<br>
						<label class="col-md-4 control-label" for="rolename">Choose subject(Multiple)</label>
    						<div class="col-md-4">
        						<select id="dates-field2" name="subj[]" class="multiselect-ui form-control" multiple="multiple" >
            							<option value="" disabled>No subject</option>
            							<option value="bengali">Bengali</option>
            							<option value="history">History</option>
            							<option value="physical_sc">Physical science</option>
            							<option value="life_sc">Life science</option>
            							

        						</select>
        								 
    						</div>
    						<br>
    						<input type="checkbox" class="myCheckBox" id="terms_and_conditions1" value="1">&nbsp;Accept All terms and condition
						<br>
						<button type="submit" name="" class="btn btn-primary" onclick="return cochvld()" id="submit_button1" disabled>Submit</button>
					</div>
					<div id="snackbarT">Registerd successful</div>
				</form>
			</div>
		</div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="cochreg.js"></script>
<script src="stude.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.16/js/bootstrap-multiselect.min.js" integrity="sha512-ljeReA8Eplz6P7m1hwWa+XdPmhawNmo9I0/qyZANCCFvZ845anQE+35TuZl9+velym0TKanM2DXVLxSJLLpQWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	 var classByDept = {
11: ["Science","Arts","commarce"],
12: ["Science","Arts","commarce"]

}
function makeDept(value) {
if(value.length==0) document.getElementById("standr").innerHTML = "<option></option>";
else {
var deptOptions = "";
for(deptId in classByDept[value]) {
deptOptions+="<option>"+classByDept[value][deptId]+"</option>";
}
document.getElementById("deptSelect").innerHTML = deptOptions;
}
}
var citiesByState = {
Odisha: ["Bhubaneswar","Puri","Cuttack"],
Maharashtra: ["Mumbai","Pune","Nagpur"],
Kerala: ["Kochi","Kozhikode","Thiruvananthapuram"],
West_Bengal: ["Kolkata","North 24 pgs","Nadia"],
Karnataka: ["Bengaluru","Hubli‑Dharwad","Mysore"],
Uttarpradesh: ["Kanpur","Mirzapur","Varanasi"],
Bihar: ["Patna","Siwan","Jasidh"]

}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = citiesOptions;
}
}
$('#terms_and_conditions').click(function(){
    //If the checkbox is checked.
    if($(this).is(':checked')){
        //Enable the submit button.
        $('#submit_button').attr("disabled", false);
    } else{
        //If it is not checked, disable the button.
        $('#submit_button').attr("disabled", true);
    }
});
$('#terms_and_conditions1').click(function(){
    //If the checkbox is checked.
    if($(this).is(':checked')){
        //Enable the submit button.
        $('#submit_button1').attr("disabled", false);
    } else{
        //If it is not checked, disable the button.
        $('#submit_button1').attr("disabled", true);
    }
});
</script>
</html>