<html>
<head>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<style type="text/css">
		html { height: 100%; }
		#flag { height: 100%; width: 100%; background: white; position: relative; }
		.stripe { height: 7.69%; width: 100%; background: #bb133e; }
		.white { background-color: #fff; }
		#stars { background: #002147; color: #fff; width: 40%; height: 53.83%; position: absolute; top: 0px; left: 0px; }
		.star-row { height: 11.11%; margin-top: -5px; }
		.star-row:nth-of-type(1) { margin-top: 27px; }
		.star { display: inline-block; width: 16.66%; text-align: center; font-size: 4vw; line-height: .5em;  }
		.wide:nth-of-type(1) { margin-left: 8%; }
	</style>
</head>
<body>
	<div id="flag"></div>
	<script type="text/javascript">
		$(document).ready(function() {
			flag();
			$(window).on('resize', flag);
			for (var i = 1; i <= 13; i++) {
				if (i%2==0) { stripe = 'white'; } else { stripe = ''}
  				$('#flag').append('<div class="stripe '+stripe+'"></div>');
			}
			$('#flag').append('<div id="stars"></div>');
			for (var r = 1; r <= 9; r++) {
  				$('#stars').append('<div id="star-row-'+r+'" class="star-row"></div>');
  				if (r%2 == 0) { stars = 5; starclass = 'wide'; } else { stars = 6; starclass = '' }
  				for (var s = 1; s <= stars; s++) {
  					$('#star-row-'+r+'').append('<div class="star '+starclass+'">&#9733;</div>');
  				}
			}
		});
		function flag() { var width = Math.ceil(($('#flag').outerWidth()/1.9),2); $('#flag').css({'height':''+width+'px'}); }
	</script>
</body>
</html>