<body class="is-preload">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

                <!-- Header start-->
                <?php require 'heder.html.php'; ?>
                <!-- heer end-->
				

                <!-- Footer -->
                <?php require 'futer.html.php'; ?>
                <!-- foter end-->
					
			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>