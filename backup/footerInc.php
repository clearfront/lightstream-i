<!--</div>-->

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script> 
-->

<script src="js/vendor/jquery-1.9.1.min.js"></script>




<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script> 


<script src="js/vendor/bootstrap.min.js"></script> 
<script src="js/plugins.js"></script> 



<script src="js/bootstrap-modalmanager.js" type="text/javascript" charset="utf-8"></script>

<script src="js/bootstrap-modal.js" type="text/javascript" charset="utf-8"></script>


<script src="js/main.js"></script> 


<script>
	$(window).scroll(function() {
		$('.animated').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideUp");
			}
		});
	});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
  ga('create', 'UA-52133071-1', 'lightstream-i.com');
  ga('send', 'pageview');

</script></body>
</html>