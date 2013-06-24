<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Klinco   Crédito - Educación Financiera - Libertad</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<!-- Resources Slide -->
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<!-- hoja de estilos Slicebox -->
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<!-- hoja de estilos jquery-ui -->
		<link rel="stylesheet" href="style/jquery-ui.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
		<!-- API jquery -->
		<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>	
		<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>	
		<!-- javascript slicebox -->
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		
		<script src='http://connect.facebook.net/en_US/all.js'></script>
		
		
		
		<!-- componente jquery Dialog -->
		<script type="text/javascript">
		function showDialog()
		{
			$("#dialog-modal").dialog(
			{
				width: 400,
				height: 300,
				title: "Gracias por su Contacto",
				buttons: { "Compartir Facebook": function() { facebook_link(); }, "Compartir Twitter": function() { twitter_link(); } },
				open: function(event, ui)
				{
					var textarea = $('<textarea style="height: 276px;">');
				   
				}
			 });
		}
		</script>
		
		<script> 
			FB.init({appId: "264532197005460", status: true, cookie: true});
			function postToFeed() {
			// calling the API ...
			var obj = {
				method: 'feed',
				redirect_uri: 'http://klinco.klincoapp.co',
				link: 'https://developers.facebook.com/docs/reference/dialogs/',
				picture: 'http://fbrell.com/f8.jpg',
				name: 'Edsel Serrano',
				caption: 'Reference Documentation',
				description: 'Using Dialogs to interact with people.'
			};
			function callback(response) {
				document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
			}
			FB.ui(obj, callback);
			}
		</script>
		
		<script>
		
		function twitter_link(){
		
		window.open("https://twitter.com/intent/tweet?screen_name=pretxelcom",'','width=600,height=400');
		}
		</script>
		
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		
		<script>
		
		function facebook_link(){
		
		window.open("https://www.facebook.com/dialog/feed?app_id=264532197005460&link=https://developers.facebook.com/docs/reference/dialogs/&picture=http://fbrell.com/f8.jpg&name=Edsel%20Serrano&caption=Reference%20Documentation&description=Using%20Dialogs%20to%20interact%20with%20users.&redirect_uri=http://klinco.klincoapp.co",'','width=800,height=500');
		}
		
		</script>
		
		<!-- componente para la animación de imagenes -->
		<script type="text/javascript">
			$(function() {
				var Page = (function() {
					var $navArrows = $( '#nav-arrows' ).hide(),
						$navOptions = $( '#nav-options' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {
								$navArrows.show();
								$navOptions.show();
								$shadow.show();
							},
							orientation : 'h',
							cuboidsCount : 3
						} ),
						init = function() {
							initEvents();
						},
						initEvents = function() {
							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {
								slicebox.next();
								return false;
							} );
							$navArrows.children( ':last' ).on( 'click', function() {
								slicebox.previous();
								return false;
							} );
							$( '#navPlay' ).on( 'click', function() {
								slicebox.play();
								return true;
							} );
							$( '#navPause' ).on( 'click', function() {
								slicebox.pause();
								return false;
							} );
						};
						return { init : init };
				})();
				Page.init();
			});
		</script>
		<!-- componente para enviar correo electrónico -->
		<script>
		var ajax = {
			send: function(){
				var userEmail = $("input[name=email]").val();
				if (userEmail == ""){
					alert("FORMULARIO NO COMPLETO");
				}else{
					ajax.SetText("Sending...");
					$.post("sendmail_index.php", {email: userEmail}
					, function (data){
						if (data == "true"){
							alert("Mensaje Enviado");
							$("input[name=email]").val("");
						}else{
							alert(data);
						}
					});
				}
			},
			SetText: function(text){
				$("input[type=button]").val(text);
			}
		}
		</script>
	</head>
	<body>
	
	<div id="wrapper">
	
		<div id="container" align="center">
			<table>
				<tr>
					<td>
						<div class="wrapper">
							<ul id="sb-slider" class="sb-slider">
								<li>
									<a href="#" target="_blank"><img src="images/1.png" alt="image1" width="450px" height="550px"/></a>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/2.png" alt="image2" width="450px" height="550px" /></a>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/3.png" alt="image1" width="450px" height="550px"/></a>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/4.png" alt="image1" width="450px" height="550px"/></a>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/5.png" alt="image1" width="450px" height="550px"/></a>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/6.png" alt="image1" width="450px" height="550px"/></a>
								</li>
							</ul>
						</div><!-- /wrapper -->
					</td>
				<td>
			<div id="logo">
				<img id="img_logo" src="img/klinco_logo oscuro-04.png" width="300px">
			</div>
			
			<div id="suscribe">
					<div id="cont">
						<p>Ingresa tu email para notificarte noticias de Klinco</p>	
							<input type="email" class="txtbox" id="email" name="email" placeholder="Tu email aquí" required="required">
							<input type="submit" value="Enviar" onclick="ajax.send(); ">
							<div id="info" > </div>
						<div id="respuesta"></div>
					</div>
				</div>
				
				<p id='msg'></p>
				
				
				
				
				
				<a href="#" onclick="showDialog();" > Click HOLA </a><br>
				<a href="https://www.facebook.com/dialog/feed?app_id=264532197005460&link=https://developers.facebook.com/docs/reference/dialogs/&picture=http://fbrell.com/f8.jpg&name=Edsel%20Serrano&caption=Reference%20Documentation&description=Using%20Dialogs%20to%20interact%20with%20users.&redirect_uri=http://klinco.klincoapp.co" > Facebook </a>
				<br><a href="#" onclick="postToFeed();">send feed</a>
				
				<div id="dialog-modal" title="Gracias" style="display: none;">
				
				<p> GRACIAS POR ENVIAR TU CORREO </p> 
				
				
				<!-- <a href="https://twitter.com/intent/tweet?screen_name=pretxelcom" class="twitter-mention-button" data-size="large">Tweet to @pretxelcom</a> -->

				
				</div>
				
			</td>
		
		</tr>
		
</table>

<div id="descripcion">
					 <h1>Brinda educación y manejo de finanzas personales, para acceder al crédito ideal.</h1>
				</div>
				
				
				
				<div id="info" align="left">
					<div id="seccion-uno" class="mpo">
						<img src="">
						<h3 class="info-tit">Educación</h3>
						<p>La mejor experiencia para entender las prácticas más eficientes en el uso del dinero, un entrenamiento para mejorar tu relación con el dinero y el crédito.</p>
					</div>
					<div id="seccion-dos" class="mpo">
						<img src="">
						<h3 class="info-tit">Crédito</h3>
						<p>Entenderás los conceptos que involucran esta herramienta financiera y la mejor manera de obtenerlo con nosotros. Durante esta experiencia seguro obtendrás el mejor crédito a tu medida.</p>
					</div>
					<div id="seccion-tres" class="mpo">
						<img src="">
						<h3 class="info-tit">Libertad</h3>
						<p>Imagínate dominar tu economía con inteligencia financiera que te permita respirar tranquilidad y cumplir tus objetivos.</p>
					</div>
				</div>
				
					
	
				
			<!-- <form method="post" action="email.php">
  Email: <input name="email" id="email" type="text" /><br />

  Message:<br />
  <textarea name="message" id="message" rows="15" cols="40"></textarea><br />

  <input type="submit" value="Submit" />
</form> -->
				
				<div id="footer">
				<p>
					¿Tienes preguntas o comentarios?<a href="feedback.html"> ¡Háznoslo saber!</a>
				</p>
				<p>
					2013 - Klinco 
				</p>
				</div>	
				
			
				
			</div> 
			
			
		
		</div>
		
	</body>
</html>