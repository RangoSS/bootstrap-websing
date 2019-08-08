<?php
 include "hedds.php";
?>
<br>


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!--<link rel="stylesheet" type="text/css" href="css/styleMap.css">-->
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');
</style> 

<div class="container mb-2">
	<div class="row">
		<div class="col-sm-6">
			<div class="contact-form">
		<h2 class="subtitle">How can we help you.</h2>
		<form action="">
			<input class="form-control mb-2" type="text" name="name" id="name" placeholder="Your Name" />
			<input class="form-control mb-2" type="email" name="e-mail" id="e-mail" placeholder="Your E-mail Adress" />
			<input class="form-control mb-2" type="tel" name="phone" id="phone" placeholder="Your Phone Number"/>
			<textarea class="form-control rounded-0 mb-2" name="textmessage" id="textmessage" rows="8" placeholder="Your Message"></textarea>
			<button type="button" class="btn btn-success xm" onclick="validate();">Get a Call Back</button>
		</form>
	</div>
		</div>
		<div class="col-sm-6">
		<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3583.1410005078696!2d28.08181811502787!3d--26.0941179,28.084031799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9572c8bce82929%3A0x898a8c52f90b3014!2s14A+Charles+Cres%2C+Strathavon%2C+Sandton%2C+2031!5e0!3m2!1sen!2sza!4v1561470960369!5m2!1sen!2sza" width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
		</div>
	</div>
</div>

</body>
<footer>
	<?php include "foot.php" ?>
</footer>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		 // Attach the event handler for the keyboard keyup
    $('#name').keyup(function() {
        var $th = $(this);
        // run the expression and replace with nothing
        $th.val( $th.val().replace(/[^a-zA-Z0-9]/g, function(){ return ''; }) );
    });
	});

	function validate(){
	
		var name=document.getElementById("name").value;
		var email=document.getElementById("e-mail").value;
		var phone=document.getElementById("phone").value;
		var textmessage=document.getElementById("textmessage").value;

		

      console.log(name);
      console.log(email);
      console.log(phone);
      console.log(textmessage);
	}
</script>