

<?php
	function carrega_pagina($projeto_nome,$projeto_desc,$projeto_data_inicio,$projeto_data_fim,$projeto_linguagem,$projeto_widget,$projeto_git,$v){

		if (preg_match("/Novato/i", $v)) {
		$metricas = "DUPLICACAO,COMENTARIO,SEGURANCA,PERFORMANCE";
     	$escreve = "<b>Perfil :</b> Novato </br></br> <b>Metricas Recomendadas:</b> $metricas";
} 
	else if (preg_match("/Excesso/i", $v)) {
		$metricas = "DUPLICACAO,ERROR,SEGURANCA,COMPATIBILIDADE";
    	$escreve = "<b>Perfil :</b> Excesso </br></br><b> Metricas Recomendadas:</b> $metricas";
}
	else if (preg_match("/Minimo/i", $v)) {
		$metricas = "ERROR,SEGURANCA,CODIGO,DEBITO,ISSUES";
    	$escreve = "<b>Perfil :</b> Minimo </br></br> <b>Metricas Recomendadas:</b> $metricas";
}
	else if (preg_match("/Ingenuo/i", $v)) {
		$metricas = "COMENTARIO,ERROR,PERFORMANCE,VULNERABILIDADE";
    	$escreve = "<b>Perfil :</b> Ingenuo </br></br><b> Metricas Recomendadas:</b> $metricas";
}

else {
    $escreve = "Não foi possível encontrar nenhuma métrica para o seu perfil";
}



	echo "
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>Dashboard de Qualidade </title>

    <!-- Bootstrap -->
    <link href='../vendors/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Font Awesome -->
    <link href='../vendors/font-awesome/css/font-awesome.min.css' rel='stylesheet'>
    <!-- NProgress -->
    <link href='../vendors/nprogress/nprogress.css' rel='stylesheet'>
    <!-- iCheck -->
    <link href='../vendors/iCheck/skins/flat/green.css' rel='stylesheet'>
	
    <!-- bootstrap-progressbar -->
    <link href='../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css' rel='stylesheet'>
    <!-- JQVMap -->
    <link href='../vendors/jqvmap/dist/jqvmap.min.css' rel='stylesheet'/>
    <!-- bootstrap-daterangepicker -->
    <link href='../vendors/bootstrap-daterangepicker/daterangepicker.css' rel='stylesheet'>

    <!-- Custom Theme Style -->
    <link href='css/custom.min.css' rel='stylesheet'>
  </head>

<body class='nav-md'>
    <div class='container body'>
      <div class='main_container'>
        <div class='col-md-3 left_col'>
          <div class='left_col scroll-view'>
            <div class='navbar nav_title' style='border: 0;'>
              <a href='home.php' class='site_title'><i class='fa fa-paw'></i> <span>Dashboard</span></a>
            </div>

            <div class='clearfix'></div>

            <!-- menu profile quick info -->
            <div class='profile clearfix'>
              <div class='profile_pic'>
                <img src='images/img.jpg' alt='...' class='img-circle profile_img'>
              </div>
              <div class='profile_info'>
                <span>Estudante</span>
                <h2>Universidade de Brasília </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- SIDE BAR MENU  -->
           <div id='sidebar-menu' class='main_menu_side hidden-print main_menu'>
              <div class='menu_section'>
                <h3>General</h3>
                <ul class='nav side-menu'>
                  <li><a><i class='fa fa-desktop'></i> Projetos <span class='fa fa-chevron-down'></span></a>
                    <ul class='nav child_menu'>
                      <li><a href='form_wizards.php'>Adicionar Projeto</a></li>
                      <li><a href='lista_projeto.php'>Listar Projetos</a></li>
                    </ul>
                  </li>
                  <li><a href='calendar.php'  ><i class='glyphicon glyphicon-calendar'></i> Calendario </span></a>
                  <li><a href='config_page.php'  ><i class='glyphicon glyphicon-cog'></i> Configurações </span></a>
                </ul>  
              </div>

            </div> 
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class='sidebar-footer hidden-small'>
              <a data-toggle='tooltip' data-placement='top' title='Settings'>
                <span class='glyphicon glyphicon-cog' aria-hidden='true'></span>
              </a>
              <a data-toggle='tooltip' data-placement='top' title='FullScreen'>
                <span class='glyphicon glyphicon-fullscreen' aria-hidden='true'></span>
              </a>
              <a data-toggle='tooltip' data-placement='top' title='Lock'>
                <span class='glyphicon glyphicon-eye-close' aria-hidden='true'></span>
              </a>
              <a data-toggle='tooltip' data-placement='top' title='Logout' href='login.html'>
                <span class='glyphicon glyphicon-off' aria-hidden='true'></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class='top_nav'>
          <div class='nav_menu'>
            <nav>
              <div class='nav toggle'>
                <a id='menu_toggle'><i class='fa fa-bars'></i></a>
              </div>

              <ul class='nav navbar-nav navbar-right'>
                <li class=''>
                  <a href='javascript:;' class='user-profile dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                    <img src='images/img.jpg' alt=''>Levi Moraes
                    <span class=' fa fa-angle-down'></span>
                  </a>
                  <ul class='dropdown-menu dropdown-usermenu pull-right'>
                    <li><a href='javascript:;'> Profile</a></li>
                    <li>
                      <a href='javascript:;'>
                        <span class='badge bg-red pull-right'>50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href='javascript:;'>Help</a></li>
                    <li><a href='login.html'><i class='fa fa-sign-out pull-right'></i> Log Out</a></li>
                  </ul>
                </li>

                <li role='presentation' class='dropdown'>
                  <a href='javascript:;' class='dropdown-toggle info-number' data-toggle='dropdown' aria-expanded='false'>
                    <i class='fa fa-envelope-o'></i>
                    <span class='badge bg-green'>6</span>
                  </a>
                  <ul id='menu1' class='dropdown-menu list-unstyled msg_list' role='menu'>
                    <li>
                      <a>
                        <span class='image'><img src='images/img.jpg' alt='Profile Image' /></span>
                        <span>
                          <span>John Smith</span>
                          <span class='time'>3 mins ago</span>
                        </span>
                        <span class='message'>
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class='image'><img src='images/img.jpg' alt='Profile Image' /></span>
                        <span>
                          <span>John Smith</span>
                          <span class='time'>3 mins ago</span>
                        </span>
                        <span class='message'>
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class='image'><img src='images/img.jpg' alt='Profile Image' /></span>
                        <span>
                          <span>John Smith</span>
                          <span class='time'>3 mins ago</span>
                        </span>
                        <span class='message'>
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class='image'><img src='images/img.jpg' alt='Profile Image' /></span>
                        <span>
                          <span>John Smith</span>
                          <span class='time'>3 mins ago</span>
                        </span>
                        <span class='message'>
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class='text-center'>
                        <a>
                          <strong>See All Alerts</strong>
                          <i class='fa fa-angle-right'></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class='right_col' role='main'>
          <div class=''>
            <div class='page-title'>
              <div class='title_left'>
                <h3>Confirma Cadastro ?</h3>
              </div>

              <div class='title_right'>
                <div class='col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search'>
                  <div class='input-group'>
                    <input type='text' class='form-control' placeholder='Search for...'>
                    <span class='input-group-btn'>
                      <button class='btn btn-default' type='button'>Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class='clearfix'></div>

            <div class=''>
              <div class='col-md-6 col-sm-6 col-xs-12'>
                
                  
                
              </div>
              <div class='clearfix'></div>
               
               <div class='x_content'>

                  <div class='bs-example' data-example-id='simple-jumbotron'>
                    <div class='jumbotron'>
                      <h2 ><b>Nome do Projeto:</b> $projeto_nome</h2></br>
                      <h2><b>Descrição do Projeto:</b> $projeto_desc</h2></br>
                      <h2><b>Data de Início:</b> $projeto_data_inicio</h2></br>
                      <h2><b>Data de Fim:</b> $projeto_data_fim</h2></br>
                      <h2><b>Linguagem:</b> $projeto_linguagem </h2></br>
                      <h2><b> Url Git:</b> $projeto_git </h2></br>
                      <h2> $escreve </h2>
                      <p></p>


                      <div class='ln_solid'></div>
                      <div class='form-group'>
                        <div class='col-md-9 col-sm-9 col-xs-12 col-md-offset-3'>
                          <a href='../public/form_wizards.php'><button type='button' class='btn btn-primary'>Voltar</button></a>
                          <a href='../public/projeto_salvo.php'><button type='submit' class='btn btn-success'>Confirmar</button></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>


            </div>


        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class='pull-right'>
            Gentelella - Bootstrap Admin Template by <a href='https://colorlib.com'>Colorlib</a>
          </div>
          <div class='clearfix'></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <div id='custom_notifications' class='custom-notifications dsp_none'>
      <ul class='list-unstyled notifications clearfix' data-tabbed_notifications='notif-group'>
      </ul>
      <div class='clearfix'></div>
      <div id='notif-group' class='tabbed_notifications'></div>
    </div>

    <!-- jQuery -->
    <script src='../vendors/jquery/dist/jquery.min.js'></script>
    <!-- Bootstrap -->
    <script src='../vendors/bootstrap/dist/js/bootstrap.min.js'></script>
    <!-- FastClick -->
    <script src='../vendors/fastclick/lib/fastclick.js'></script>
    <!-- NProgress -->
    <script src='../vendors/nprogress/nprogress.js'></script>
    <!-- Chart.js -->
    <script src='../vendors/Chart.js/dist/Chart.min.js'></script>
    <!-- easy-pie-chart -->
    <script src='../vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js'></script>
    <!-- gauge.js -->
    <script src='../vendors/gauge.js/dist/gauge.min.js'></script>
    <!-- bootstrap-progressbar -->
    <script src='../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js'></script>
    <!-- iCheck -->
    <script src='../vendors/iCheck/icheck.min.js'></script>
    <!-- Skycons -->
    <script src='../vendors/skycons/skycons.js'></script>
    <!-- Flot -->
    <script src='../vendors/Flot/jquery.flot.js'></script>
    <script src='../vendors/Flot/jquery.flot.pie.js'></script>
    <script src='../vendors/Flot/jquery.flot.time.js'></script>
    <script src='../vendors/Flot/jquery.flot.stack.js'></script>
    <script src='../vendors/Flot/jquery.flot.resize.js'></script>
    <!-- Flot plugins -->
    <script src='../vendors/flot.orderbars/js/jquery.flot.orderBars.js'></script>
    <script src='../vendors/flot-spline/js/jquery.flot.spline.min.js'></script>
    <script src='../vendors/flot.curvedlines/curvedLines.js'></script>
    <!-- DateJS -->
    <script src='../vendors/DateJS/build/date.js'></script>
    <!-- JQVMap -->



    <!-- Custom Theme Scripts -->
    <script src='js/custom.min.js'></script>
	
  </body>
</html>

	";
	
}

?>