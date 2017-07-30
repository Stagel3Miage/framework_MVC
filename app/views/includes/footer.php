		<footer class="footer-distributed">

			<div class="footer-left">

				<!--h3>AR<span>ME</span></h3-->
		<a class="logo img-responsive" href="#"><img src="<?php echo CSS_PATH; ?>image_association/logo/arme_logo_4.png" alt="logo"></a>

		
				<!--p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p-->

				<p class="footer-company-name">ARME &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>4 Rue René Char</span> 93000 Bobigny, France</p>
				</div>

				<!--div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div-->

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:arme@gmail.com">arme@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Suivez-nous sur : </span>
				</p>

				<div class="footer-icons">

					<a id="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
					<a id="twitter" href="https://twitter.com/?lang=fr"><i class="fa fa-twitter"></i></a>
					<a id="linkedin" href="https://fr.linkedin.com/"><i class="fa fa-linkedin"></i></a>
					<a id="google" href="https://www.google.fr"><i class="fa fa-google"></i></a>

				</div>

			</div>
			
			<div class="footer">
						<div class="copyright">&copy; Copyright 2017 ARME</div>
			</div>

		</footer>



<? php
if (isset($connect))
  mysqli_close($connect);
?>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo CSS_PATH; ?>/source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>


<script type="text/javascript" src="<?php echo CSS_PATH; ?>/source/js/myscript.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

  
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>


</body>

</html>