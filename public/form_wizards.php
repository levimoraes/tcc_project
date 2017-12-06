<?php  

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include '../config/db_config.php';
include '../config/lista_metricas.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">
  </head>

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="home.php" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Estudante</span>
                <h2>Universidade de Brasília </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-desktop"></i> Projetos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form_wizards.html">Adicionar Projeto</a></li>
                      <li><a href="lista_projeto.php">Listar Projetos</a></li>
                    </ul>
                  </li>
                  <li><a href="calendar.php"  ><i class="glyphicon glyphicon-calendar"></i> Calendario </span></a>
                  <li><a href="config_page.php"  ><i class="glyphicon glyphicon-cog"></i> Configurações </span></a>
                </ul>
                  
              </div>

            </div> 
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
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
        <div class="right_col" role="main">
          <div class="x_content">
            <div class="page-title">
              <div class="title_left">
                <h3>Formulário de Cadastro</h3>
              </div>

              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="adiciona_projeto.php" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome do Projeto</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Qual o nome do Projeto ?" id="nome_projeto" name="nome_projeto">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Descrição do Projeto <span class="required"></span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" name="projeto_desc" placeholder='Diga um pouco sobre o projeto'></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Data de Início <span class="required"></span>
                        </label>
                        <div class='input-group date' id='myDatepicker2'>
                          <input type='text' name="projeto_data_inicio" class="form-control" />
                          <span class="input-group-addon" name="projeto_data_inicio" >
                           <span class="glyphicon glyphicon-calendar" name="projeto_data_inicio"></span>
                         </span>
                       </div>
                     </div>
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Data de Fim <span class="required"></span>
                      </label>
                      <div class='input-group date' id='myDatepicker3'>
                        <input type='text' name="projeto_data_fim" class="form-control" />
                        <span class="input-group-addon">
                         <span class="glyphicon glyphicon-calendar"></span>
                       </span>
                     </div>
                   </div>

                   <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Linguagem</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <select class="form-control" name="linguagem" id="linguagem">
                        <option value="java">JAVA</option>
                        <option value="php">PHP</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                  <label class="col-md-3 col-sm-3 col-xs-12 control-label">De Acordo com o seu projeto defina um grau de importancia para as seguintes metricas    (0- Irrelevante e 100-Muito Relevante)</label>

                    <div class="col-md-9 col-sm-9 col-xs-12">
                      
                      <?php

                      for ($i=0; $i<4 ; $i++) { 
                        $metrica[$i] = sorteia_metrica();
                        if ($i > 0) {
                          if ($metrica[$i] == $metrica[$i-1]) {
                            $metrica[$i] = sorteia_metrica();
                          }

                          echo " <p>$metrica[$i]</p>
                          <input type='hidden' name='metrica_$i' id='metrica_$i' value='$metrica[$i]'>  
                          <input class='knob' data-width='100' data-height='120' data-min='0' data-displayPrevious=true data-fgColor='#26B99A' value='0' id='valor_$i' name='valor_$i'>";
                        }
                      }

                      ?>
                    </div>

                        </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> URL GitHub  <span class="required"></span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" name="url_gitHub" placeholder='Digite a url da página GitHub do Projeto'></textarea>
                        </div>
                      </div>
                      
                      <div class="clearfix"></div>

                      <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Modelo de Widget</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <select class="form-control" name="widget" id="widget">
                        <option value=1>Widget 1</option>
                        <option value=2>Widget 2</option>
                        <option value=3>Widget 3</option>
                      </select>
                    </div>
                  </div>

                  <div class="clearfix"></div>

                      <div class="col-md-3 col-sm-3 col-xs-12">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/widget_1.png" alt="image" />
                            
                          </div>
                          <div class="caption">
                            <p>Widget 1</p>
                          </div>
                      </div>

                      <div class="col-md-3 col-sm-3 col-xs-12">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/widget_2.png" alt="image" />
                            
                          </div>
                          <div class="caption">
                            <p>Widget 2</p>
                          </div>
                      </div>

                      <div class="col-md-3 col-sm-3 col-xs-12">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/widget_3.png" alt="image" />
                            
                          </div>
                          <div class="caption">
                            <p>Widget 3</p>
                          </div>
                      </div>

                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
    <script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>

    <script>


      $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
      });

      $('#myDatepicker3').datetimepicker({
        format: 'DD.MM.YYYY'
      });


    </script>


  </body>
  </html>