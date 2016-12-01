<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grupo18 | Terminal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script language="javascript" type="text/javascript">
  function validar() {
    var nome = terminal.nome.value; //Nome do terminal
    var tipo = terminal.tipo.value; //Tipo do terminal
    var pisos = terminal.pisos.value; //Numero de pisos
    var espacos = terminal.espacos.value; //Numero de espaços máximo do terminal

    //Se nome em branco
    if (nome == "") {
      alert('Entre com um nome para o terminal.');
      terminal.nome.focus();
    return false;
    }

    //Se tamanho do nome maior que 255
    if(nome.length > 255){
      alert('Insira um nome com até 255 caracteres.');
      terminal.nome.focus();
    return false;
    }

    //Se numero de pisos em branco
    if(pisos == ""){
      alert('Insira a quantidade de pisos.');
      terminal.pisos.focus();
    return false;
    }

    //Se tipo do terminal default (--)
    if(tipo == "default"){
      alert('Escolha um tipo de terminal.');
      terminal.tipo.focus();
    return false;
    }

    //Se espacos em branco
    if(espacos == ""){
      alert('Insira a quantidade máxima de espaços.');
      terminal.tipo.focus();
    return false;
    }
  }
  </script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php
    include("header.php")
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <section class="sidebar">
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-th-large"></i> <span>Cadastrar Setor</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-plane"></i> Terminal</a></li>
            <li><a href="estacionamento.php"><i class="fa fa-car"></i> Estacionamento</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cadastrar Setores
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Terminal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastrar Terminal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form name="terminal" method="POST" action="cadastrarTerminal.php">
                <!-- Nome do Terminal -->
                <div class="form-group">
                  <label>Nome do Terminal</label>
                  <input type="text" class="form-control" name="nome">
                </div>
                <!-- Numero de Pisos -->
                <div class="form-group">
                  <label>Numero de Pisos</label>
                  <input type="number" min="1" max="20" class="form-control" name="pisos">
                </div>
                <!-- Tipo de Terminal -->
                <div class="form-group">
                  <label>Tipo de Terminal</label>
                  <select name="tipo" class="form-control">
                    <option value="default">--</option>
                    <option value="Embarque">Embarque</option>
                    <option value="Desembarque">Desembarque</option>
                    <option value="Ambos">Ambos</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Quantidade máxima de espaços no Terminal</label>
                  <input type="number" min="1" class="form-control" name="espacos">
                </div>
                <button type="enviar" class="btn btn-block btn-primary" onclick="return validar()">Cadastrar</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.3
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
