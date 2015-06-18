<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES"> 
<!-- 
	¡Hola! Gracias por entrar a revisar este código. 
	Seguramente habrás ingresado al código fuente con una combinación de teclas, o desde el menú de desarrollador, dado a que desactivé el click derecho para colocar un menú contextual propio del sitio. 
	Te aclaro que muy pocas partes de código las he tomado de algunas páginas. 
	Sin embargo, la gran mayoría del sitio fue construida con código propio. Esto lo aclaro para que no creas que vivo de los demás códigos. 
	Mucho de ése código propio no lo verás, ya que es sobre PHP (para aquellos que no entiendan, los archivos PHP son procesados desde servidor. Por lo tanto, no se pueden ver los códigos de los PHP). 

	De todas formas estoy preparando otra versión del sitio. No utilizaré más este layout y pasaré a otro mejor diseñado, rompiendo así los años y años de reutilización de los mismos archivos. 

	En fin, quería aclarar un par de cosas antes que revisaras todo el código fuente. 

	Una vez más, gracias por revisar este código. 
	Atte. Fernando Osorio. 
 -->
<head>
<link rel="Shortcut Icon" href="FM5server.ico">
<Title>Fernando Osorio - Sitio personal</Title>
<link rel="stylesheet" type="text/css" href="index.css" />
	<!-- Que no corrompa los caracteres -->
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<!-- Una descripción para Google y etc... -->
	<meta name="description" content="Sitio web personal de Fernando Javier Osorio Lorenzo. También conocido como Fermoto5HD.">
	<!-- Levanta la librería jQuery -->
	<script type='text/javascript' src="jquery-2.1.0.min.js"></script>
	<!-- Levanta el script del formulario de contacto -->
	<script type='text/javascript' src="ajax.js"></script>
	<!-- Los dispositivos lo verán en escala 1.0, para que sea adaptado a su tamaño -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php 
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		function hora_local($zona_horaria = 0)
			{
				if ($zona_horaria > -12.1 and $zona_horaria < 12.1)
				{
					$hora_local = time() + ($zona_horaria * 3600);
					return $hora_local;
				}
				return 'error';
			}
		$horaact = date('H', hora_local(-1));
		if(($horaact == 00)||($horaact>00 && $horaact<05)||($horaact>19 && $horaact<23)||($horaact == 23)){
			include('Estilo_Noche.php');
		}
		elseif($horaact>04 && $horaact<20) {
			include('Estilo_Dia.php');
		}
		else{
			include('Estilo_Dia.php');
		}
		?>
<div id="Acciones_Inicio"><div id="TextoCentrado">
			<div id="Inicio_DesactivarBlur" onclick="Blur_Des()">Desactivar Blur</div>
			<div id="Inicio_ActivarBlur" style="display: none;" onclick="Blur_Act()">Activar Blur</div>
			</div>
		</div>
</head>
<body>
		<span id="fondo" style="background-image: url('Img/<?php 
		if(($horaact == 00)||($horaact>00 && $horaact<05)||($horaact>19 && $horaact<23)||($horaact == 23)){
			echo 'FondoNoche.jpg';
		}
		elseif($horaact>04 && $horaact<20) {
			echo 'FondoDia.jpg';
		}
		else{
			echo 'FondoDia.jpg';
		}
		?>
	')"></span>

	<center><div id="LogotipoPrincipal" alt="Fermoto5HD - Fernando Javier Osorio Lorenzo" style="
		background-size: cover; background-position: center; color: transparent; text-shadow: none; background-image: url('Img/Header.png'); position: relative; z-index: 99999 !important; transition-duration: 0.5s;">Fermoto5HD - Fernando Javier Osorio Lorenzo</div></center>
		<ul id="BarraDeNavegacion" style="display: none;"><div id="TextoCentrado">
			<li id="BotonInicio" onclick="Mostrar_Inicio()">Inicio</li>
			<li id="BotonAcerca" onclick="Mostrar_AcercaDeMi()">Acerca de mí</li>
			<li id="BotonCV" onclick="Mostrar_MisDatos()">Mis datos</li>
			<li id="BotonPortfolio" onclick="Mostrar_Portfolio()">Trabajos realizados</li>
			<li id="BotonContacto" onclick="Mostrar_Contacto()">Contacto</li>
			<li id="DesMacro" onclick="Blur_Des()">Desactivar blur</li>
			<li id="ActMacro" onclick="Blur_Act()" style="display: none;">Activar blur</li>
		</div></ul>
		<style type="text/css">
			#Acciones_Inicio{position: fixed; z-index: 100000000; width: 100%;}
			#Inicio_DesactivarBlur, #Inicio_ActivarBlur {
				margin: 8px;
				padding: 6px;
				float: right;
				text-shadow: none !important;
			}
		</style>
		
		<div id="ZonaCentral">
		
		
			<script>
			function Blur_Act() {
				document.getElementById("fondo").style.webkitFilter = "blur(6px)"; 
				document.getElementById("fondo").style.filter = "blur(6px)";  
				document.getElementById("fondo").style.filter = "url(blur.svg#blur)"; 
			    $("#DesMacro").show(); 
			    $("#Inicio_DesactivarBlur").show(); 
			    $("#ActMacro").hide();
			    $("#Inicio_ActivarBlur").hide(); 
			};
			function Blur_Des() {
				document.getElementById("fondo").style.webkitFilter = "none"; 
				document.getElementById("fondo").style.filter = "none"; 
			    $("#DesMacro").hide(); 
			    $("#Inicio_DesactivarBlur").hide(); 
			    $("#ActMacro").show();
			    $("#Inicio_ActivarBlur").show(); 
			};
			function Reestablecer_Barra() {
			    $("#BotonInicio").css("border-bottom", "2px solid transparent");
			    $("#BotonAcerca").css("border-bottom", "2px solid transparent");
			    $("#BotonCV").css("border-bottom", "2px solid transparent");
			    $("#BotonYouTube").css("border-bottom", "2px solid transparent");
			    $("#BotonPortfolio").css("border-bottom", "2px solid transparent");
			    $("#BotonContacto").css("border-bottom", "2px solid transparent");
			}
			function Ocultar_Todo() {
		  		$("#Inicio").fadeIn();
		  		$("#AcercaDe").fadeIn();
		  		$("#Curriculum").fadeIn();
				$("#YouTube").fadeIn();
	  			$("#Portfolio").fadeIn();
	  			$("#Contacto").fadeIn();

				$("#Inicio").css("display", "none");
			    $("#AcercaDe").css("display", "none");
			    $("#Curriculum").css("display", "none");
			    $("#YouTube").css("display", "none");
			    $("#Portfolio").css("display", "none");
			    $("#Contacto").css("display", "none");

	  			$("#BarraDeNavegacion").fadeIn();
	  			$("#Acciones_Inicio").fadeOut();
	  			$("#LogotipoPrincipal").css("margin-top", "30px");
			}

			function Mostrar_Inicio() {
	  			Ocultar_Todo();
				Reestablecer_Barra();

				$("#Inicio").css("display", "block");

	  			$("#BarraDeNavegacion").fadeOut();
	  			$("#Acciones_Inicio").fadeIn();

	  			$("#LogotipoPrincipal").css("margin-top", "0px");

			    window.scrollTo(0, 0);
			};
			function Mostrar_AcercaDeMi() {
	  			Ocultar_Todo();
				Reestablecer_Barra();
			    $("#AcercaDe").css("display", "block");
			    $("#BotonAcerca").css("background", "border-bottom", "2px solid rgb(200, 200, 200)");
			    window.scrollTo(0, 0);
			};
			function Mostrar_MisDatos() {
	  			Ocultar_Todo();
				Reestablecer_Barra();
			    $("#Curriculum").css("display", "block");
			    $("#BotonCV").css("background", "border-bottom", "2px solid rgb(200, 200, 200)");
			    window.scrollTo(0, 0);
			};
			function Mostrar_YouTube() {
	  			Ocultar_Todo();
				Reestablecer_Barra();
			    $("#YouTube").css("display", "block");
			    $("#BotonYouTube").css("border-bottom", "2px solid rgb(200, 200, 200)");
			    window.scrollTo(0, 0);
			};
			function Mostrar_Portfolio() {
	  			Ocultar_Todo();
				Reestablecer_Barra();
			    $("#Portfolio").css("display", "block");
			    $("#BotonPortfolio").css("border-bottom", "2px solid rgb(200, 200, 200)");
			    window.scrollTo(0, 0);
			};
			function Mostrar_Contacto() {
	  			Ocultar_Todo();
				Reestablecer_Barra();
			    $("#Contacto").css("display", "block");
			    $("#BotonContacto").css("border-bottom", "2px solid rgb(200, 200, 200)");
			    window.scrollTo(0, 0);
			};



			//[Informacion Clasificada]
			function Nagato() {
                setTimeout (location.href="Nagato.php", 1);
			};
			</script>

			<div class="seccion" id="Inicio">
				<style type="text/css">
					#Inicio_Link{display: inline-block; text-align: center; vertical-align: top; margin: 8px;}
					#Inicio_LinkIMG{text-align: center; width: 125px; height: 125px; border-radius: 100px; background-color: rgba(0, 0, 0, 0.5); overflow: hidden; vertical-align: middle;}
						#Inicio_LinkIMG_Texto{opacity: 0; text-align: center; width: 125px; height: 125px; border-radius: 100px; background-color: rgba(0, 0, 0, 0.75); color: rgb(255, 255, 255); vertical-align: middle; transition-duration: 0.5s;}
							#Inicio_LinkIMG_Espacio{height: 45%;}
						#Inicio_Link:hover #Inicio_LinkIMG_Texto{opacity: 1;}
					#Inicio_LinkTexto{display: none; text-align: center; width: 125px; vertical-align: middle;}
					@media (max-width: 780px) {
						#Aviso_Blur{display: none;}
						#Inicio_LinkTexto{display: block;}
						#Inicio_Link:hover #Inicio_LinkIMG_Texto{opacity: 0;}
					}
				</style>
				<div class="tituloseccion">¡Bienvenido a mi guarida (por decirlo de una manera)!</div>
				¿Querés saber algo de mí? ¡Pues éste es el lugar indicado! <br><center>
				<div id="Inicio_Link" onclick="Mostrar_AcercaDeMi()">
					<div id="Inicio_LinkIMG" style="background-image: url('Img/Inicio_AcercaDeMi.jpg'); background-position: center; background-size: cover;">
						<div id="Inicio_LinkIMG_Texto">
							<div id="Inicio_LinkIMG_Espacio"></div>
							Acerca de mí
						</div>
					</div>
					<div id="Inicio_LinkTexto">Acerca de mí</div>
				</div>
				<div id="Inicio_Link" onclick="Mostrar_MisDatos()">
					<div id="Inicio_LinkIMG" style="background-image: url('Img/Inicio_MisDatos.png'); background-position: center;">
						<div id="Inicio_LinkIMG_Texto">
							<div id="Inicio_LinkIMG_Espacio"></div>
							Mis datos
						</div>
					</div><div id="Inicio_LinkTexto">Mis datos</div>
				</div>
				<div id="Inicio_Link" onclick="Mostrar_Portfolio()">
					<div id="Inicio_LinkIMG" style="background-image: url('Img/Inicio_TrabajosRealizados.png'); background-position: center;">
						<div id="Inicio_LinkIMG_Texto">
							<div id="Inicio_LinkIMG_Espacio" style="height: 36.5%;"></div>
							Trabajos realizados
						</div>
					</div><div id="Inicio_LinkTexto">Trabajos realizados</div>
				</div>
				<div id="Inicio_Link" onclick="Mostrar_Contacto()">
					<div id="Inicio_LinkIMG" style="background-image: url('Img/Inicio_Contacto.png'); background-position: center;">
						<div id="Inicio_LinkIMG_Texto">
							<div id="Inicio_LinkIMG_Espacio"></div>
							Contacto
						</div>
					</div><div id="Inicio_LinkTexto">Contacto</div>
				</div>
				</center>
				<br>
				<div id="Aviso_Blur">Si la navegación te resulta dificultosa, podés desactivar el "blur" del fondo.</div>
			</div>
			<div class="seccion" id="AcercaDe">
				<div class="tituloseccion">Acerca de mí</div>
				Hola! Ante nada gracias por visitar mi página. <br>
				<br>Me llamo Fernando Osorio, vivo en Capital Federal, más precisamente en el barrio de Villa del Parque, en la Ciudad Autónoma de Buenos Aires, y hace poco empecé a cursar el primer año de la carrera de Tecnología Ferroviaria, en la UNSAM. 
				<br>
				<br>Mi objetivo es ingresar en el ámbito del transporte público, en especial el ámbito ferroviario, ya que me apasionan los ferrocarriles, en especial el sistema subterráneo de Buenos Aires. 
				<br>También me interesa el ámbito informático, ya que he dedicado la mayor parte de mi juventud en investigar y desarrollar mis habilidades para usarlas para el beneficio del cliente, tanto como el armado de una página web, el desarrollo de una aplicación, la configuración de cualquier computadora (desde una tablet PC, hasta una PC para funcionar como un kiosco de entretenimiento), como la solución de un problema que impida el normal funcionamiento del sistema. 
				<br>Soy de probar todas las versiones en desarrollo o en fase "beta", ya que me gusta experimentar y testear las novedades en ambientes muy inestables, propensos al error. Actualmente estoy utilizando todos los programas bajo Windows 10 Pro - Technical Preview 2 en una Exomate x352, y cada cierto tiempo, envío los feedbacks contribuyendo al desarrollo de dicho sistema operativo. 
				<br>
				<br>En mis tiempos libres veo series animadas japonesas (más conocido como "Animé"), por lo que podría decirse que soy un "Otaku" pero en menor escala, es decir, es un pasatiempo pero nada más allá. También podría decirse que soy un "Cazador de errores", donde paso el tiempo libre buscando errores en algunos sitios web y trato de sugerirles algunas correcciones para que funcionen correctamente. 
				<br>Y soy muy aficionado a la tecnología. Diariamente reviso los blogs tecnológicos más importantes a nivel mundial (ejemplo: The Verge) investigando las novedades más recientes sobre gadgets y dispositivos para recomendar, y de vez en cuando, asesoro a mis conocidos para que puedan elegir una opción decente de acuerdo tanto a sus necesidades como a su disponibilidad económica. 
				<br>
				<br>También estoy en constante aprendizaje sobre lenguajes de programación, en especial los lenguajes orientados al diseño de páginas web, y hasta hace poco empecé a aprender Java, con el objetivo de aprender a desarrollar (y depurar, ¿por qué no?) aplicaciónes para Android. Por supuesto, dichos conocimientos son aplicados en esta misma página. 
			</div>
			<div class="seccion" id="Curriculum">
				<script type="text/javascript">
					function BajarCV_PDF() { 
					    $("#descarga-PDF").show(); 
					    //setTimeout (location.href="CV.pdf", 1);
					};
					function CerrarPopUp() {
					    $("#BajandoPDF").hide(); 
					};
				</script>
				<div class="tituloseccion">Mis datos</div>
					<style type="text/css">
						#MisDatos_Boton{
							padding: 10px; margin: 10px; display: inline-block; 
							text-align: center; vertical-align: middle; 
							background: rgb(50, 50, 50); color: rgb(255, 255, 255); 
						}
						.misdatos-item{
							display: inline-block;
							width: 150px;
							height: 160px;
							margin-top: 20px;
							margin-bottom: 20px;
							vertical-align: top;
						}
							.misdatos-item-grafico{
								display: block;
								width: 125px;
								height: 125px;
								background-color: rgba(0, 0, 0, 0.5);
								border-radius: 125px;
								background-repeat: no-repeat;
								background-position: center;
								overflow: hidden;
							}
								.misdatos-item-grafico#PresentacionDinamica{background-image: url(Img/MisDatos_PresentacionDinamica.png);}
								.misdatos-item-grafico#BajarPDF{background-image: url(Img/MisDatos_BajarPDF.png);}
							.misdatos-item-texto{
								margin-top: 5px;
								vertical-align: middle;
								text-align: center;
							}
					</style>
					<div id="MisDatos_Inicio"> Bajate mi hoja de vida acá: 
						<center>
						<div class="misdatos-item" onclick="BajarCV_PDF()">
							<div class="misdatos-item-grafico" id="BajarPDF"></div>
							<div class="misdatos-item-texto">Bajar CV en PDF</div>
						</div></center>
					</div>
					<div id="descarga-PDF" style="display: none;">
						Si no se descarga <a href="Archivos/CV.pdf">hacé click acá</a>. 
						<br>
						¿Sin lector PDF? Te recomiendo <a href="http://www.sumatrapdfreader.org/free-pdf-reader-es.html">SumatraPDF (Open source)</a>. 
					</div>

					<style type="text/css">
						#CV_CursosRealizados_IMG{
							width: 200px; height: 200px; 
							background: rgb(0, 0, 50); 
							border-radius: 200px;
							margin-top: 40px;
							transition-duration: 0.5s !important;
						}
						#CV_CursosRealizados_TXT{height: 0px; opacity: 0; transition-duration: 0.5s !important;}

						#CV_CursosRealizados_IMG:hover + #CV_CursosRealizados_TXT{
							height: 40px; opacity: 1;
						}
						#CV_CursosRealizados_IMG:hover{
							margin-top: 0px;
							margin-bottom: 0px;
						}
						/* Datos vitales */
							#CV_Nacim, #CV_Edad {transition-duration: 0.5s !important;}
							#CV_NacEdad:hover #CV_Nacim{margin-top: -18px !important;}

							#CV_Bandera, #CV_NacText {transition-duration: 0.5s !important;}
							#CV_Nacion:hover #CV_Bandera{margin-top: -18px !important;}
					</style>
					<div id="CurriculumDinamico" style="display: none">
						Aviso: <br>Algunos datos no se muestran acá por motivos de evitar spam. <br>Para ver el resto de la información te sugiero que <div style="background-color: rgb(200, 200, 200); color: rgb(20, 20, 20); padding: 8px; max-width: 275px; display: inline-block;" onclick="BajarCV_PDF()">bajes el currículum en formato PDF</div>
						<br>
						<center><div style="width: 400px; height: 400px; border-radius: 300px; background-image: url('Img/Perfil.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;"></div></center>
						<div style="font-size: 40px; text-align: center;">Fernando Javier Osorio Lorenzo. </div>
						<div id="CV_DatosVitales" style="overflow: hidden; height: 50px; width: 900px; background: rgba(0, 0, 0, 0.5);">
							<div id="CV_NacEdad" style="width: 300px; height: 50px; display: inline-block;">
								<div id="CV_Nacim">
									<div style="width: 100px; display: inline-block;">Nacido el</div>
									<div style="width: 100px; display: inline-block;">5/NOV/1994</div>
								</div>
								<div id="CV_Edad">
									<div style="width: 100px; display: inline-block;">Edad actual</div>
									<div style="width: 100px; display: inline-block;">20 años</div>
								</div>
							</div>
							
							<div id="CV_Nacion" style="width: 300px; height: 50px; display: inline-block;">
								<div id="CV_Bandera">
									<div style="width: 100px; display: inline-block;">Nacido el</div>
									<div style="width: 100px; display: inline-block;">5/NOV/1994</div>
								</div>
								<div id="CV_NacText">
									<div style="width: 100px; display: inline-block;">Edad actual</div>
									<div style="width: 100px; display: inline-block;">20 años</div>
								</div>
							</div>
						</div>
						<br>
						Nací el 5 de Noviembre de 1994, véase, tengo 20 años. <br>
						Nacionalidad: Argentino. <br>
						Contacto vía E-mail: Fermoto5HD{arroba}outlook.com . 
						<br>
						Estudios realizados: <br>
						- 2000-2007: Estudios Primarios - Esc. N°1 D.E. 17 "Dr. Antonio Dellepiane" <br>
						- 2008-2013: Estudios Secundarios, Título técnico con orientación a Computación - ENET N°24 D.E. 17 "Defensa de Buenos Aires" <br>
						<br>
						Estudios en curso: <br>
						- Tecnicatura Universitaria en Tecnología Ferroviaria - Universidad Nacional de San Martín, sede Constitución. <br>
						<br>
						Cursos realizados (todos finalizados en el Centro de Formación Profesional N°28): <br>
						<center>
							<div style="display: inline-block;">
								<div id="CV_CursosRealizados_IMG"></div>
								<div id="CV_CursosRealizados_TXT">Seguridad Informática</div>
							</div>
						</center>
						- Seguridad Informática. <br>
						- Redes I. <br>
						- Diseño Gráfico I (Vectorización en Corel Draw). <br>
						- Diseño Gráfico II (Retoque digital con orientación publicitaria, en Adobe Photoshop). <br>
						<br>
						<br>
						Experiencia laboral: <br>
						En 2013: <br>
						- Data entry: Gobierno de la Ciudad de Buenos Aires, programa "Aprender Trabajando", por temporada. <br>
						<br>
						En 2014: <br>
						- Web Designer: Factor RH Creativo, desde diciembre 2013 hasta la actualidad. 
						</div>
			</div>
			<style type="text/css">
				.portfolio-item{display: inline-block; transition-duration: 0.5s; margin: 0; padding: 0; vertical-align: middle;}
					.portfolio-item-grafico{width: 250px; height: 250px; background-color: rgba(0, 0, 0, 0.5); vertical-align: middle; overflow: hidden; transition-duration: 0.5s;}
					.portfolio-item-espacio{height: 48%; vertical-align: middle;}
					.portfolio-item-texto{display: none; width: 250px; height: 250px; background-color: rgba(0, 0, 0, 0.5); color: rgb(255, 255, 255); transition-duration: 0.5s;}
					.portfolio-item:hover .portfolio-item-texto{display: block; transition-duration: 0.5s;}
			</style>
			<div class="seccion" id="Portfolio">
				<div class="tituloseccion">Trabajos realizados:</div>
				<center>
				<div class="portfolio-item">
					<div class="portfolio-item-grafico">	
						<div class="portfolio-item-texto">
							<div class="portfolio-item-espacio"></div>
							Factor RH Creativo<br>
							HTML5+CSS3+Responsive
						</div>
					</div>
				</div>
				<div class="portfolio-item">
					<div class="portfolio-item-grafico">	
						<div class="portfolio-item-texto">
							<div class="portfolio-item-espacio"></div>
							Programá tu Futuro - Club Baldomero<br>HTML5+CSS3+AJAX+Responsive
						</div>
					</div>
				</div>
				<div style="font-size: 30px;">Pronto más información de estos dos trabajos.</div>
				</center>
				<div class="Links">
				</div>
			</div>
			<div class="seccion" id="YouTube" style="display: none;">
				<div class="tituloseccion">Canal de YouTube</div>
				Actualmente cuento con un canal de YouTube, el cual se destaca por subir videos relacionados al ámbito ferroviario. <br>
				<br>
				Funfact: Nunca mostré esta sección. :P 
			</div>
			<div class="seccion" id="Contacto" style="display: none;">
				<style type="text/css">
					#Contacto_Social{
						margin: 8px;
						display: inline-block;
						width: 100px; height: 100px; 
						border-radius: 100px;
						background-color: rgba(20, 20, 20, 0.5);
						overflow: hidden;
						background-position: center;
					}
				</style>
				<script type="text/javascript">
					function Social_Facebook(){setTimeout (location.href="http://facebook.com/Fermoto5HD", 1);}
					function Social_Twitter(){setTimeout (location.href="http://twitter.com/Fermoto5HD", 1);}
					function Social_GooglePlus(){setTimeout (location.href="https://plus.google.com/u/0/117999670362964140369", 1);}
					function Correo(){setTimeout (location.href="mailto:Fermoto5HD@outlook.com", 1);}
				</script>
				<div class="tituloseccion">Contacto</div>
					¿Querés preguntarme sobre algo en particular? Escribime y te respondo en el día. 

					Podés contactarme por las vías sociales: 
					<center>
						<div id="Contacto_Social" style="background-image: url('Img/Social_Facebook.png')" onclick="Social_Facebook()"></div>
						<div id="Contacto_Social" style="background-image: url('Img/Social_Twitter.png'); background-size: cover;" onclick="Social_Twitter()"></div>
						<div id="Contacto_Social" style="background-image: url('Img/Social_Google+.png')" onclick="Social_GooglePlus()"></div>
						<div id="Contacto_Social" style="background-image: url('Img/Correo.png')" onclick="Correo()"></div>
					</center>
					<br><br>
					En la próxima versión implemento un formulario de contacto. 
					<br>
					<style type="text/css">
					input, textarea {
						width: 100%;
						padding: 5px;
						background: rgba(255, 255, 255, 0.5);
						color: rgb(0, 0, 0);
						border: 1px solid rgba(255, 255, 255, 0.25); 				
						-moz-user-select: text !important;
						-web-kit-user-select: text !important;
					}
					input#Contacto_EnviarFormulario {
						padding: 10px;
						background: rgba(255, 255, 255, 0.5);
						color: rgb(0, 0, 0);
					}
					#Formulario_Aviso{
						margin: 10px; 
						padding: 5px;
						background: rgba(0, 0, 0, 0.5); 
						color: rgb(255, 255, 255);
						border-radius: 5px;
						text-shadow: none;
					}
					</style>
					<br>
					</div>
			</div>
	</div>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="app.js"></script>
    <script type='text/javascript' src='jclock.js'></script>
    <script type='text/javascript' src='reloj.js'></script>
</body>
<?php include ('ClickDerecho.php'); ?>
</HTML>
<!--
	Gracias por terminar de revisar este código fuente! 
	Atte. Fernando Osorio. 
 -->