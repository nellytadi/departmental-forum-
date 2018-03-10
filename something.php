<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">


	function validate(){
		if(document.getElementById("question").value=="")
		{
			alert("Please enter question!");
			return false;
		}
		return true;
	}

		
		function something(){
			alert("i have been clicked");

		}
			document.write('do you realy care?');
	
	var character="Today is micheal's birthday\\";

	document.write(character+"<br>");
	var firststring="first string ";
	var secondstring="second string";
	var combined=firststring+secondstring;
	document.write(combined+"<br>");
	document.write("Length of the string is: "+combined.length+"<br>");
	document.write("6th to 16th character is:"+combined.substring(6,15)+"<br>");
	document.write("last character is:"+combined.charAt(combined.length-2)+"<br>");
	document.write("postion of S: "+combined.indexOf('s')+"<br>");

	</script>
</head>
<body>
                <button onclick="something()">click here to go back</button>
                			<form action="#" method="POST">

	<textarea type="text" name="question" id="question" class="form-control" style="height: 50px;">

			</textarea>
			<input type="submit" name="submit" onclick="validate()">
			</form>
</body>
</html>