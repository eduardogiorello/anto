
<!DOCTYPE html>
<html lang="en">
<head>
<title>AntojArte | Inicio </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="tortas, postres, cupcake, popcake, mesa dulce, tartas, reposteria, macarons" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
<link href="http://localhost/anto/vistas/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap css -->
<link href="http://localhost/anto/vistas/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://localhost/anto/vistas/css/services.css" rel="stylesheet" type="text/css" media="all" /><!-- services css -->

<link href="http://localhost/anto/vistas/css/font-awesome.css" rel="stylesheet"> <!-- fontawesome css -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!--//fonts-->

</head>
<body>
<?php
   /*=============================================
	Módulos fijos superiores
	=============================================*/

	include "paginas/modulos/header.php";

	
   /*=============================================
	Navegacion entre paginas
	=============================================*/
	if(isset($_GET['pagina'])){
		
		if($_GET['pagina'] == 'about'){
			include_once 'paginas/pagina.about.php';
			
		} elseif($_GET['pagina'] == 'services'){
			include_once 'paginas/services.php';

		} elseif($_GET['pagina'] == 'index'){
		   include_once 'paginas/inicio.php';
		}
	} else{
		include_once 'paginas/inicio.php';
	}




	/*=============================================
	Módulos fijos inferiores
	=============================================*/

	include "vistas/paginas/modulos/footer.php";





?>
<!-- Supportive js -->
<script type="text/javascript" src="http://localhost/anto/vistas/js/jquery-2.1.4.min.js"></script>
<!-- //Supportive js -->
<!-- stats -->
<script src="http://localhost/anto/vistas/js/jquery.waypoints.min.js"></script>
	<script src="http://localhost/anto/vistas/js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

<!-- banner bottom video script -->
<script src="http://localhost/anto/vistas/js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
</script>
<!-- //banner bottom video script -->

<!-- testimonials plugin script -->
	<script src="http://localhost/anto/vistas/js/jquery.wmuSlider.js"></script> 
	<script>
		$('.example1').wmuSlider();         
	</script> 
<!-- testimonials plugin script -->

<!-- smooth scrolling js -->
<script src="http://localhost/anto/vistas/js/SmoothScroll.min.js"></script>
<!-- smooth scrolling js -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="http://localhost/anto/vistas/js/move-top.js"></script>
<script type="text/javascript" src="http://localhost/anto/vistas/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

	<!-- here starts scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			
										
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->

<!-- move to top-js-files -->
	<script type="text/javascript" src="http://localhost/anto/vistas/js/move-top.js"></script>
	<script type="text/javascript" src="http://localhost/anto/vistas/js/easing.js"></script>
<!-- //move to top-js-files -->

<script type="text/javascript" src="http://localhost/anto/vistas/js/bootstrap.js"></script><!-- bootstrap js file -->

</body>
</html>