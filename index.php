<? include('function.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multiper Insertion using PHP, Ajax, MySql</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!--Font awsome stylesheet link-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
	function _(id){ return document.getElementById(id); }
	function submitForm(){
		_("mybtn").disabled = true;
		_("status").innerHTML = 'please wait ...';
		var formdata = new FormData();
		formdata.append( "n", _("n").value );
		formdata.append( "e", _("e").value );
		formdata.append( "m", _("m").value );
		var ajax = new XMLHttpRequest();
		ajax.open( "POST", "insert.php" );
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				if(ajax.responseText == "success"){
					_("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
				} else {
					_("status").innerHTML = ajax.responseText;
					_("mybtn").disabled = false;
				}
			}
		}
		ajax.send( formdata );
	}
</script>
</head>
<body>
	
<div class="container">

<form id="my_form" onsubmit="submitForm(); return false;">
  <p><input id="n" placeholder="Name" required></p>
  <p><input id="e" placeholder="Email Address" type="email" required></p>
  <textarea id="m" placeholder="write your message here" rows="10" required></textarea>
  <p><input id="mybtn" type="submit" value="Submit Form"> <span id="status"></span></p>
</form>
	


</div><!--finished container -->











<!-- App Script -->
<script type="text/javascript" src="index.js"></script>

</body>
</html>

