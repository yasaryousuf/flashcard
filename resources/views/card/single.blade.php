<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
<meta name="viewport" content="width=device-width">

<section style="height:40px;">&nbsp;</section>


	<style type="text/css">
.card-flip {
  perspective: 1000px;
}
.card-flip:hover .flip, .card-flip.hover .flip {
  transform: rotateY(180deg);
}
.card-flip, .front, .back {
  width: 100%;
  height: 480px;
}
.flip {
  transition: 0.6s;
  transform-style: preserve-3d;
  position: relative;
}
.front, .back {
  backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
}
.front {
  z-index: 2;
  transform: rotateY(0deg);
}
.back {
  transform: rotateY(180deg);
}
	
	</style>
</head>
<body>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-4">
        		<!-- Card Flip -->
				<div class="card-flip">
					<div class="flip">
						<div class="front">
							<!-- front content -->
							<div class="card mx-auto">
							  <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" data-holder-rendered="true">
							  <div class="card-block">
							    <h4 class="card-title text-center">Card Flip</h4>
							  </div>
							</div>
						</div>
						<div class="back">
							<!-- back content -->
							<div class="card">
							  <div class="card-block">
							    <h4 class="card-title">Card Flip</h4>
									<span class="badge badge-primary">Primary</span>
									<span class="badge badge-secondary">Secondary</span>
									<span class="badge badge-success">Success</span>
									<span class="badge badge-danger">Danger</span>
									<span class="badge badge-warning">Warning</span>
									<span class="badge badge-info">Info</span>
									<span class="badge badge-light">Light</span>
									<span class="badge badge-dark">Dark</span>
							  </div>
							  <div class="card-block">
							    <p class="card-text">Some.</p>
							    <p class="card-text">Some quick example .</p>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    <p class="card-text">Some quick.</p>
							    <a href="#" class="card-link">Card link</a>
							    <a href="#" class="card-link">Another link</a>
							  </div>
							</div>
						</div>
					</div>
				</div>
        		<!-- End Card Flip -->
			</div>
		</div>
	</div>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
<script type="text/javascript">
	document.querySelector(".card-flip").classList.toggle("flip");

/* 
 * Holder.js for demo image
 * Just for demo purpose
 */
Holder.addTheme('gray', {
  bg: '#777',
  fg: 'rgba(255,255,255,.75)',
  font: 'Helvetica',
  fontweight: 'normal'
});

</script>
</body>
</html>