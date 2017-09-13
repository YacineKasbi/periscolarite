<body>
<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Accueil<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trouver une baby-sitter <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="{{URL::to('createusuario')}}">Espace intervenant</a></li>
			<li class="divider"></li>
            <li><a href="#">1</a></li>
			<li class="divider"></li>
            <li><a href="#">2</a></li>
            <li class="divider"></li>
            <li><a href="#">3</a></li>
            <li class="divider"></li>
            <li><a href="#">4</a></li>
          </ul>
        </li>
		<li ><a href="#">Espace Intervenant<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>		
        <li ><a href="#">Espace client<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
        <li ><a href="#">Tarifs et devis<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
		<li ><a href="#"data-toggle="modal" data-target="#modalContact" class="menu__link">Nous contacter<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
      </ul>
    </div>
	</div>
</nav>

	<div class="container-fluid">
	<div class="row">
	  <div id="myCarousel" class="carousel slide col-sm-10" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		  <div class="item active">
			<img src="<?php echo base_url("assets/images/1.jpg");?>" alt="test" style="width:100%;">
		  </div>

		  <div class="item">
			<img src="<?php echo base_url("assets/images/2.gif");?>" alt="test" style="width:100%;">
		  </div>
		
		  <div class="item">
			<img src="<?php echo base_url("assets/images/3.jpg");?>"  alt="test"  style="width:100%;">
		  </div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	</div>
	</div>
	
	<div class="modal fade" id="modalContact" role="dialog">
             	<div class="modal-dialog modal-lg">                      
                          <!-- Modal content "nous contacter"-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h3 class="modal-title">Comment nous contacter?</h3>
                            </div>
                            <div class="modal-body">
                                <h5>Par Téléphone:</h5>
                                <p>Standard: 01 47 30 70 30</br>
                                Fax: 01 42 70 34 76</p>

                                <hr />

                                <h5>Par E-mail:</h5>
                                <p><a href="mailto:service-informatique@gardeperiscolaire.fr">service-informatique@gardeperiscolaire.fr</a></p>

                                <hr />

                                <!-- Plan d'accès -->
                                <h5>Plan d'accès:</h5>
                                <center>
                                    <iframe
									class="contact_frame"
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.0696744159236!2d2.2890219158082092!3d48.895009306081384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f832a65d555%3A0x2ea2951e60f45491!2s80+Rue+Jules+Guesde%2C+92300+Levallois-Perret!5e0!3m2!1sfr!2sfr!4v1491312058585"
									frameborder="0" style="border:0" allowfullscreen>
									</iframe>
                                </center>
                            </div>
                          </div>

                        </div>
                      </div>
</body>





