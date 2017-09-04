<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<link rel="stylesheet" type="text/css" href="css\login.css">-->
	<!--<script type="text/javascript">
		//document.getElementById("username").style="background:"+bgcolor+";";
		/*
		function ClearCheckUsername(){
			var v = document.getElementById("username");
			if(v.value=="Username" || v.value=="username"){
				v.value="";
			}
		}
		function ClearCheckPassword(){
			var v = document.getElementById("password");
			if(v.value=="Password" || v.value=="password"){
				v.value="";
			}
		}
		*/
	</script>-->
</head>
<body id="body">
<center>
<?php
 include("mv.php");
?>

<div  class="content">


<!-- load from here -->
	
	<div id="login">  <!--form part-->
		<form action="#" method="post">
			<!--<select name="usertype" id="usertype" class="ComboBox">
			    <option value="admin">Admin</option>
				<option value="faculty">Faculty</option>
				<option value="management">Management</option>
				<option value="student">Student</option>
			</select><br><br>-->
			<input type="text" name="username" id="username" class="TextBox" placeholder="Username"><br><br>
			<input type="password" name="password" id="password" class="TextBox" placeholder="Password"><br><br>
			<input type="button" name="login" value="login" onclick="show()"> 
		</form>
		<!--<button type="button" onclick="show()">login</button>


	
<!-- load to here -->

</div>
</div>
<script>//ajax part
		function show(){
			var user=document.getElementById("username").value;
			var password=document.getElementById("password").value;
			//var usertype=document.getElementById("usertype").value;
			//var string='username='+user+'&password='+password+'&usertype='+usertype;
			
			var i=new XMLHttpRequest();
			i.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById("body").innerHTML = this.responseText;
				}
			};
			i.open("GET","conn2.php?username="+user+'&password='+password, true);
			i.send();
		}
	</script>




</center>
<br>
</body>
</html>
