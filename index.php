<?php
  require_once 'config.php';
  require_once 'Cliente.php';
  
  $clientes = [];
  
  $cliente1 = new Cliente();
  $cliente1->setNome('Leandro')
           ->setCpfcnpj('00000000001')
           ->setEmail('leandro@email.com')
           ->setCelular('4499887766')
           ->setFixo('1144559988')
           ->setRedesocial('facebook/leandro')
           ->setEndereco('Rua Afonso Adu, 23, Humbara, Curitiba - PR');  
  $clientes[] = $cliente1;
  
  $cliente2 = new Cliente();
  $cliente2->setNome('Jose')
           ->setCpfcnpj('9990000001')
           ->setEmail('jose@email.com')
           ->setCelular('4477887766')
           ->setFixo('2144999988')
           ->setRedesocial('facebook/jose')
           ->setEndereco('Rua Antonio Francisco, 7893, Katurama, Joinville - SC');  
  $clientes[] = $cliente2;
  
  $cliente3 = new Cliente();
  $cliente3->setNome('Halberto')
           ->setCpfcnpj('88775000001')
           ->setEmail('halberto@email.com')
           ->setCelular('7799227767')
           ->setFixo('7122559944')
           ->setRedesocial('facebook/halberto')
           ->setEndereco('Rua Bocaiuva, 5487, Juveve, Curitiba - PR');  
  $clientes[] = $cliente3;
  
  $cliente4 = new Cliente();
  $cliente4->setNome('Mariana')
           ->setCpfcnpj('55880000001')
           ->setEmail('mariana@email.com')
           ->setCelular('6699447746')
           ->setFixo('1121049914')
           ->setRedesocial('facebook/mariana')
           ->setEndereco('Avenida 29 de Abril, 9988, Centro, Guaratuba - PR');  
  $clientes[] = $cliente4;
  
  $cliente5 = new Cliente();
  $cliente5->setNome('Joelson')
           ->setCpfcnpj('000000065548')
           ->setEmail('joelson@email.com')
           ->setCelular('4188887466')
           ->setFixo('4134722044')
           ->setRedesocial('facebook/joelson')
           ->setEndereco('Rua 9 de Março, 323, Cabral, Manaus - AM');  
  $clientes[] = $cliente5;
  
  $cliente6 = new Cliente();
  $cliente6->setNome('Vanessa')
           ->setCpfcnpj('54870000001')
           ->setEmail('vanessa@email.com')
           ->setCelular('4577884736')
           ->setFixo('5621212525')
           ->setRedesocial('facebook/vanessa')
           ->setEndereco('Rua Rui Barbosa, 45, Piçarras, Guaratuba - PR');  
  $clientes[] = $cliente6;
  
  $cliente7 = new Cliente();
  $cliente7->setNome('Pedro')
           ->setCpfcnpj('87870000001')
           ->setEmail('pedro@email.com')
           ->setCelular('45999885566')
           ->setFixo('1123238585')
           ->setRedesocial('facebook/pedro')
           ->setEndereco('Rua Afonso Pena, 3, Costa e Silva, Araquari - SC');  
  $clientes[] = $cliente7;
  
  $cliente8 = new Cliente();
  $cliente8->setNome('Paola')
           ->setCpfcnpj('556600000001')
           ->setEmail('paola@email.com')
           ->setCelular('4979887566')
           ->setFixo('1121234545')
           ->setRedesocial('facebook/paola')
           ->setEndereco('Rua Ivai, 9988, America, Joinville - SC');  
  $clientes[] = $cliente1;
  
  $cliente9 = new Cliente();
  $cliente9->setNome('Lizandra')
           ->setCpfcnpj('123500000001')
           ->setEmail('lizandra@email.com')
           ->setCelular('4899885588')
           ->setFixo('4732045566')
           ->setRedesocial('facebook/lizandra')
           ->setEndereco('Rua Jurere, 423, Hugo Karlos, Curitiba - PR');  
  $clientes[] = $cliente9;
  
  $cliente10 = new Cliente();
  $cliente10->setNome('Joaquim')
           ->setCpfcnpj('125600000001')
           ->setEmail('joaquim@email.com')
           ->setCelular('4799883366')
           ->setFixo('2121045566')
           ->setRedesocial('facebook/joaquim')
           ->setEndereco('Rua Raposo, 8877, Centro, São Paulo- SP');  
  $clientes[] = $cliente10;
  
  $order = 'asc';  
  if(isset($_GET['order']) && $_GET['order'] == 'desc')
  {
      krsort($clientes,SORT_DESC);
      $order = 'desc' ;
  }   
          
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/template.css" rel="stylesheet" media="screen">
    <style type="text/css">
    .container {
      max-width: 100%;
    }
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
      <script src="/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <h4><a class="brand" href="#">Code Education</a></h4>
            </div>
          
          <div class="collapse navbar-collapse navbar-ex1-collapse pull-left">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Dashboard</a></li>
              <li class="active"><a href="index.php">Clientes</a></li>              
            </ul>
          </div><!--/.nav-collapse -->
          <div class="pull-right margin-right: 15px;">            
            <span style="vertical-align: middle; padding-right: 10px;">Leandro Ribas</span>
            <img src="http://placehold.it/40x40" class="img-circle" style="margin-top: 5px; margin-bottom: 5px;">
          </div>
    </div>

    <div class="container" style="margin-top: 80px;">
      <div class="row">
        <div class="col-md-2">
          <p><img src="http://placehold.it/203x180"></p>
          <br>
          <ul class="nav nav-pills nav-stacked">
            <li>
              <a href="index.php"><img src="img/dashboard.png"> Dashboard</a>
            </li>
            <li><a href="#"><img src="img/comprar.png"> Clientes</a></li>
            <li><a href="#"><img src="img/sair.png"> Sair</a></li>
          </ul>
        </div>
        <div class="col-md-10">
          <h1>Sistema - Lista de Clientes</h1>
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                  <th style="width:14px">&nbsp;</th>
                <th class="sorting_<?=$order?>" tabindex="0" onclick="console.dir(this); orderTable(this.className);">ID</th>                                  
                <th>Nome</th>
                <th>e-mail</th>
              </tr>
            </thead>
            <tbody>
            <?php
              foreach ($clientes as $key=>$cliente)                  
              {
            ?>
                <tr style="cursor:pointer" onclick="openDetails(this.firstChild.firstChild)"><td><span id="cliente<?php echo $key; ?>" class="row-details row-details-close"></span></td>   
                <td class=""><?php echo $key; ?></td>
                <td><?php echo $cliente->getNome(); ?></td>
                <td><?php echo $cliente->getEmail(); ?></td>
              </tr>
              <tr style="display:none; background-color: #e7e7e7" id="detailscliente<?php echo $key; ?>">
                  <td colspan="4">                       
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">CPF / CNPJ</h4>
                            <p class="list-group-item-text"><?php echo $cliente->getCpfcnpj();?></p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">Celular</h4>
                            <p class="list-group-item-text"><?php echo $cliente->getCelular();?></p>
                        </a>            
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">Fixo</h4>
                            <p class="list-group-item-text"><?php echo $cliente->getFixo();?></p>
                        </a>            
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">Rede Social</h4>
                            <p class="list-group-item-text"><?php echo $cliente->getRedesocial();?></p>
                        </a>            
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">Endreço</h4>
                            <p class="list-group-item-text"><?php echo $cliente->getEndereco();?></p>
                        </a>            
                    </div>
                  </td>
              </tr>
            <?php }?>  
            </tbody>
          </table>
          <table class="table">
            <tr>              
              <td class="text-right"><h4><?=count($clientes)?> Registro(s)</h4></td>
            </tr>
          </table>
        </div>
      </div>
      <hr>
      <footer>
        <p>&copy; Curso de PHP <?=date('Y');?> - Todos os direitos reservados</p>
      </footer>

    </div> <!-- /container -->

    <!-- Arquivos Javascripts
    ================================================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <script>
      function orderTable(order)
      {
          if(order == 'sorting_asc')
          {
              order = 'desc'
          }
          else
          {
              order = 'asc';
          }    
          
          location.href = 'index.php?order=' + order;
          
          
      }
      
      function openDetails(objopenclose)
      {
          if(objopenclose.className == 'row-details row-details-close')
          {
            objopenclose.className = 'row-details row-details-open';            
            document.getElementById('details'+objopenclose.id).style.display = '';
          }
          else
          {
            objopenclose.className = 'row-details row-details-close';
            document.getElementById('details'+objopenclose.id).style.display = 'none';
          }    
          
      }
    </script>
  </body>
</html>

