<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <!-- complementos -->
    <script src="js/complementos.js"></script>
	<script src="js/jquery.nicescroll.js"></script>

	<script src="js/dropzone.js"></script>

	<!--EFECTO SCROLL-->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-smoove/0.2.8/jquery.smoove.min.js"></script>
	<script type="text/javascript" src="js/jquery.smoove.js"></script>
	<script type="text/javascript" src="js/jquery-loader.js"></script>
	
	<!-- bxSlider Javascript file -->
	<script src="js/jquery.bxslider.min.js"></script>

	<!--SCRIPT PROPIOS-->
	<script>		
	    $(document).ready(
	    	function() { 
	    		//INICIALIZAR NICESCROLL
	    		$("html").niceScroll({cursorwidth:"12px" , zindex:"9999" , cursorborder:"0px" , cursorborderradius:"0px" , cursorcolor:"#90A4AE", background:"#CFD8DC", autohidemode:false});

				//Iniciar selectores
				$('select').material_select();

				//INICIALIZAR MODALES
				$('.modal-trigger').leanModal();

				//CALENDARIO
				$('.datepicker').pickadate({
					selectMonths: true, // Creates a dropdown to control month
					selectYears: 15 // Creates a dropdown of 15 years to control year
				});


				//ICONO MOBILE
				$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
					$(this).toggleClass('open');
				});

				//MENU MOBILE
			    $("#nav-icon3").click(function(){
					$("#menu").fadeToggle('medium')
				})
				
				//LOGIN-PASSWORD
			    $("#returnPassword").click(
			    	function(){			    		
			    		$("#loginContainer").hide("slow");
			    		$("#passwordContainer").show("slow");
			    	}
			    );

			    //PASSWORD-LOGIN
			    $("#returnLogin").click(
			    	function(){			    		
			    		$("#passwordContainer").hide("slow");
			    		$("#loginContainer").show("slow");
			    	}
			    );

			    //CONTACTO
			    $("#btn-contacto").click(function(){
					$("#contactoContainer").fadeToggle('medium')
				})

				//ANIMACION ENTRE ANCLAS
		    	$(function(){
					$('a[href*=#]').click(function() {
					 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
					     && location.hostname == this.hostname) {

					         var $target = $(this.hash);

					         $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

					         if ($target.length) {

					             var targetOffset = $target.offset().top;

					             $('html,body').animate({scrollTop: targetOffset}, 1000);

					             return false;

					        }
					   }
					});
				})

				//DETALLES DEL PLAN PARA MOBILE
			    $(".btn-plan").click(function(){
					$(this).parent().prev().css("height", "auto");
				})

				//LOGIN-PLANES
			    $("#loginTraditional").click(
			    	function(){			    		
			    		$("#typeLogin").hide("slow");
			    		$("#accessTraditional").show("slow");
			    	}
			    );

			    $("#returnLogin2").click(
			    	function(){			    		
			    		$("#accessTraditional").hide("slow");
			    		$("#typeLogin").show("slow");
			    	}
			    );

			    //ANIMACION SCROLL
			    $(".news").smoove({
			    	offset:'9%'
			    });


			    //OPCIONES DEL PERFIL DE USUARIO LOGUEADO
			    $("#profile-principal").click(
			    	function(){
			    		$("#profile-principal").addClass("active");
			    		$("#profile-about").removeClass("active");
			    		$("#profile-manager").removeClass("active");
			    		$("#profile-information").removeClass("active");
			    		$("#profile-plan").removeClass("active");
			    		$("#profile-password").removeClass("active");

			    		$("#container-about").hide("slow");
			    		$("#container-manager").hide("slow");
			    		$("#container-information").hide("slow");
			    		$("#container-password").hide("slow");
			    		$("#container-principal").fadeIn(2000);
			    	}
			    );

			    /*PASAR DE PRINCIPAL A SOBRE LA EMPRESA*/
			    $("#next1").click(
			    	function(){
			    		$("#profile-about").addClass("active");
			    		$("#profile-principal").removeClass("active");
			    		$("#profile-manager").removeClass("active");
			    		$("#profile-information").removeClass("active");
			    		$("#profile-plan").removeClass("active");
			    		$("#profile-password").removeClass("active");

			    		$("#container-principal").hide("slow");
			    		$("#container-about").fadeIn(2000);
			    	}
			    );

			    $("#profile-about").click(
			    	function(){
			    		$("#profile-about").addClass("active");
			    		$("#profile-principal").removeClass("active");
			    		$("#profile-manager").removeClass("active");
			    		$("#profile-information").removeClass("active");
			    		$("#profile-plan").removeClass("active");
			    		$("#profile-password").removeClass("active");

			    		$("#container-principal").hide("slow");
			    		$("#container-manager").hide("slow");
			    		$("#container-information").hide("slow");
			    		$("#container-password").hide("slow");
			    		$("#container-about").fadeIn(2000);
			    	}
			    );

			    /*REGRESAR DE SOBRE LA EMPRESA A PRINCIPAL*/
			    $("#left1").click(
			    	function(){
			    		$("#profile-principal").addClass("active");
			    		$("#profile-about").removeClass("active");
			    		$("#profile-manager").removeClass("active");
			    		$("#profile-information").removeClass("active");
			    		$("#profile-plan").removeClass("active");
			    		$("#profile-password").removeClass("active");
			    		
			    		$("#container-about").hide("slow");
			    		$("#container-principal").fadeIn(2000);
			    	}
			    );

			    /*PASAR DE SOBRE LA EMPRESA A REPRESENTANTE LEGAL*/
			    $("#next2").click(
			    	function(){
			    		$("#profile-manager").addClass("active");
			    		$("#profile-about").removeClass("active");
			    		$("#profile-principal").removeClass("active");
			    		$("#profile-information").removeClass("active");
			    		$("#profile-plan").removeClass("active");
			    		$("#profile-password").removeClass("active");
			    		
			    		$("#container-about").hide("slow");
			    		$("#container-manager").fadeIn(2000);
			    	}
			    );

			    $("#profile-manager").click(
			    	function(){
			    		$("#profile-manager").addClass("active");
			    		$("#profile-about").removeClass("active");
			    		$("#profile-principal").removeClass("active");
			    		$("#profile-information").removeClass("active");
			    		$("#profile-plan").removeClass("active");
			    		$("#profile-password").removeClass("active");

			    		$("#container-principal").hide("slow");
			    		$("#container-about").hide("slow");
			    		$("#container-information").hide("slow");
			    		$("#container-password").hide("slow");
			    		$("#container-manager").fadeIn(2000);
			    	}
			    );

			    /*REGRESAR DE REPRESENTANTE LEGAL A SOBRE LA EMPRESA*/
			    $("#left2").click(
			    	function(){
			    		$("#profile-about").addClass("active");
			    		$("#profile-principal").removeClass("active");
			    		$("#profile-manager").removeClass("active");
			    		$("#profile-information").removeClass("active");
			    		$("#profile-plan").removeClass("active");
			    		$("#profile-password").removeClass("active");
			    		
			    		$("#container-manager").hide("slow");
			    		$("#container-about").fadeIn(2000);
			    	}
			    );

			    /*PASAR DE REPRESENTANTE LEGAL A INFORMACION LEGAL*/
			    $("#next3").click(
			    	function(){
			    		$("#profile-information").addClass("active");
			    		$("#profile-about").removeClass("active");
			    		$("#profile-manager").removeClass("active");
			    		$("#profile-principal").removeClass("active");
			    		$("#profile-plan").removeClass("active");
			    		$("#profile-password").removeClass("active");
			    		
			    		$("#container-manager").hide("slow");
			    		$("#container-information").fadeIn(2000);
			    	}
			    );

			    $("#profile-information").click(
			    	function(){
			    		$("#profile-information").addClass("active");
			    		$("#profile-about").removeClass("active");
			    		$("#profile-manager").removeClass("active");
			    		$("#profile-principal").removeClass("active");
			    		$("#profile-plan").removeClass("active");
			    		$("#profile-password").removeClass("active");

			    		$("#container-principal").hide("slow");
			    		$("#container-manager").hide("slow");
			    		$("#container-about").hide("slow");
			    		$("#container-password").hide("slow");
			    		$("#container-information").fadeIn(2000);
			    	}
			    );

			    /*REGRESAR DE INFORMACION LEGAL A REPRESENTANTE LEGAL*/
			    $("#left3").click(
			    	function(){
			    		$("#profile-manager").addClass("active");
			    		$("#profile-about").removeClass("active");
			    		$("#profile-information").removeClass("active");
			    		$("#profile-principal").removeClass("active");
			    		$("#profile-plan").removeClass("active");
			    		$("#profile-password").removeClass("active");
			    		
			    		$("#container-information").hide("slow");
			    		$("#container-manager").fadeIn(2000);
			    	}
			    );

			    $("#profile-password").click(
			    	function(){
			    		$("#profile-password").addClass("active");
			    		$("#profile-about").removeClass("active");
			    		$("#profile-manager").removeClass("active");
			    		$("#profile-information").removeClass("active");
			    		$("#profile-plan").removeClass("active");
			    		$("#profile-principal").removeClass("active");

			    		$("#container-principal").hide("slow");
			    		$("#container-manager").hide("slow");
			    		$("#container-information").hide("slow");
			    		$("#container-about").hide("slow");
			    		$("#container-password").fadeIn(2000);
			    	}
			    );


			    //PASADORES DE RUEDA DE NEGOCIOS
			    //OCULTO OTROS CONTENEDORES
			   	$("#ruedasParticiparContainer").hide();
			    $("#ruedasCreadasContainer").hide();

			    //TODAS LAS RUEDAS
			    $("#ruedasTodo").click(
			    	function(){
			    		$("#ruedasParticiparContainer").hide();
			    		$("#ruedasCreadasContainer").hide();
			    		$("#ruedasTodasContainer").fadeIn(2000);

			    		//REMOVER CLASES ACTIVE
			    		$('#ruedasTodo').addClass('active');
			    		$('#ruedasParticipar').removeClass('active');
			    		$('#ruedasCreadas').removeClass('active');
			    	}
			    );

			    //PARTICIPANDO EN RUEDAS
			    $("#ruedasParticipar").click(
			    	function(){
			    		$("#ruedasTodasContainer").hide();
			    		$("#ruedasCreadasContainer").hide();
			    		$("#ruedasParticiparContainer").fadeIn(2000);

			    		//REMOVER CLASES ACTIVE
			    		$('#ruedasParticipar').addClass('active');
			    		$('#ruedasTodo').removeClass('active');
			    		$('#ruedasCreadas').removeClass('active');
			    	}
			    );

			    //RUEDAS CREADAS
			    $("#ruedasCreadas").click(
			    	function(){
			    		$("#ruedasTodasContainer").hide();
			    		$("#ruedasParticiparContainer").hide();
			    		$("#ruedasCreadasContainer").fadeIn(2000);

			    		//REMOVER CLASES ACTIVE
			    		$('#ruedasCreadas').addClass('active');
			    		$('#ruedasParticipar').removeClass('active');
			    		$('#ruedasTodo').removeClass('active');
			    	}
			    );

			    //INICIANDO GALERIA DE RUEDA DE NEGOCIOS
			    $('.bxslider').bxSlider({
			    	pagerCustom: '#bx-pager',

			    	prevSelector: '#slider-prev',
				    prevText: "<img id='theImg' src='img/left.png'/>",

				    nextSelector: '#slider-next',
				    nextText: "<img id='theImg' src='img/right.png'/>"
			    });

			    //MOSTRAR ALERTAS
			    $(".alert-A").click(function(){
					$(".alert-container").fadeToggle('medium')
				})

			    //OCULTAR ALERTAS
			    $(".ocultar-n").click(function(){ 
			    	$(this).parent().fadeOut(); 
			    })
	    	}
	    );
	</script>


	<!--SCRIPT PARA DROPZONE--> 
    <script>
      Dropzone.options.dropzone = {
          paramName: "file", // The name that will be used to transfer the file
          maxFilesize: 2, // MB
          autoProcessQueue:false,
          thumbnailHeight:120,
          thumbnailWidth:120,
          maxFiles:4,
            init: function() {
                  $('.dz-message').remove()
                  this.on("maxfilesexceeded", function(file) {
                        this.removeAllFiles();
                        this.addFile(file);
                  });
                  var _this = this;

                  // Setup the observer for the button.
                  $("a#clear-dropzone").on("click", function() {
                    // Using "_this" here, because "this" doesn't point to the dropzone anymore
                    _this.removeAllFiles();
                    // If you want to cancel uploads as well, you
                    // could also call _this.removeAllFiles(true);
                  });                  
            },
            accept: function(file, done) {
              console.log(file.previewElement)
                $(file.previewElement).attr('data-info',$('.dz-preview').length)
                //thumbnail(file)

                $(".dz-progress").remove();
                $(".dropzone-message").remove();
                $(".dz-details").remove();
                $(".dz-success-mark").remove();
                $(".dz-error-mark").remove();
                 done();

            },
        };   
    </script>