<!-- AQUÍ COMIENZA EL MENÚ CONTEXTUAL -->
	<!-- Código que dará funcionamiento al menú contextual -->
	<script type="text/javascript">
		/***************************/  
		//Esto ha sido creado por un tercero, sólo le he aplicado algunas traducciones: 
		//@Author: Adrian "yEnS" Mato Gondelle
		//@website: http://yensdesign.com
		//@email: yensamg@gmail.com  
		//@license: Feel free to use it, but keep this credits please!  
		/***************************/  


		//Esto actuará cuando la página esté lista.
		$(document).ready(function(){
			
		//Variables que se usarán en todo el script
		var menuId = "MenuContextual";
		var menu = $("#"+menuId);

		//Inhabilita el menú propietario del navegador
		$(document).bind("contextmenu", function(e){
			menu.css({'display':'block', 'left':e.pageX, 'top':e.pageY});
			return false;
		});
			
		//Cuando el menú está visible, estos dos métodos lo ocultan de nuevo. 
			//Con botón izquierdo quita el menú
			$(document).click(function(e){
				if(e.button == 0 && e.target.parentNode.parentNode.id != menuId){
					menu.css("display", "none");
				}
			});
			//También con la tecla ESC
			$(document).keydown(function(e){
				if(e.keyCode == 27){
					menu.css("display", "none");
				}
			});
			
		//Opciones del menú
			menu.click(function(e){
				//No hace nada al estar desactivado
				if(e.target.className == "disabled"){
					return false;
				}
				//Sino, quita el menú
				else{
					menu.css("display", "none");
				}
			});
		});
	</script>
	<!-- Estilos que le doy al menú, incluso para que quede por encima de la página -->
	<style type="text/css" media="screen">
		/* Esto quita las vinietas */
			ul{
				list-style: none;
				list-style-type: none;
				list-style-position: outside;
			}
		/* Estilos del menú */
			#MenuContextual{
				display: none;
				width: auto;
				padding: 2px;
				background: rgba(0, 0, 0, 0.9);
				color: rgb(255, 255, 255) !important;
				border: none;
				border-radius: 0px;
				position: absolute;
				z-index: 999999999;
			}
			#MenuContextual ul{
				font-family: Museo Sans, Arial, Helvetica, sans-serif;
				color: rgb(255, 255, 255) !important;
				background: none;
				border: none;
				border-radius: 0px;
			}
			#MenuContextual ul li{
				line-height: 1.5em;
				padding: 5px 10px 5px 10px;
				font-size: 14px;
				border-radius: 0px;
				color: rgb(255, 255, 255) !important;
			}
			#MenuContextual ul li:hover{
				background-color: rgb(255, 255, 255);
				color: rgb(0, 0, 0) !important;
			}
			#MenuContextual ul li a{
				color: #6d6d6d;
				display: block;
			}
			#MenuContextual ul li.disabled, #MenuContextual ul li.disabled a{
				color: rgba(255, 255, 255, 0.4);
				cursor: default;
			}
			#MenuContextual ul li.disabled:hover{
				background: none;
			}
			#MenuContextual ul li{
				background-position: 3px 6px;
				background-repeat: no-repeat;
			}
	</style>
	<div id="MenuContextual">
		<ul>
			<li id="Item" class="Inicio" onClick="Mostrar_Inicio();" style="display: none;">Volver al inicio</li>
			<li id="Item" onClick="Mostrar_AcercaDeMi();">Acerca de</li>
			<li id="Item" onClick="Mostrar_MisDatos();">Mis datos</li>
			<li id="Item" onClick="Mostrar_Portfolio();">Portfolio</li>
			<li id="Item" onClick="Mostrar_Contacto();">Contacto</li>
		</ul>
	</div>