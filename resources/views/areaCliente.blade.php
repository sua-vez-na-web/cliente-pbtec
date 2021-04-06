<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PBtec - Soluções em Automação Comercial</title>

    <!-- Bootstrap core CSS-->
    <link href="/theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="/theme/css/sb-admin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container" style="margin-top: 10px">
            <div class="page-header">
                <a href="http://pbtec.com.br">
                    <img src="https://sistema.deltaze.com/upload/imagem/pbtec/300EC4D5-BCC8-4285-AA2D-89C28AC2EF25_LOGOMARCA%20PBTEC%20-%20HORIZONTAL1.png" class="img-responsive" alt="Responsive image">
                    </a>
                    <h1>Bem vindo a area do Cliente</h1><small>Cliente: {{$cliente->razaoSocial}}  | Cnpj: {{$cliente->cnpj}}</small>
            </div>
      <div class="row">
          <div class="col-lg-4 col-sm-12">
                <div class="card card-login mx-auto mt-5">
                    <div class="card-header">F.A.Q</div>
                    <div class="card-body">
                        <p>Telefones:</p>
                        <ul>
                            <li>João Pessoa-PB: (83) 4062-9272</li>
                            <li>Campina Grande-PB (83) 4064-9272</li>
                            <li>De 8h às 22h</li>
                        </ul>
                        
                        <h6>Whatsapp Suporte Técnico</h6>
                        <p>(83) 99658-1441</p>

                        <h6>Software de Acesso Remoto</h6>
                        <ul>
                            <li><a href="https://get.teamviewer.com/quickpbtec">Versão executável do Team Viewer</a></li>
                            <li><a href="https://get.teamviewer.com/hostpbtec">Versão instalável do Team Viewer</a></li>
                        </ul>
                    </div>                    
                </div>
          </div>
          <div class="col-lg-4 col-sm-12">
                <div class="card card-login mx-auto mt-5">
                        <div class="card-header">Atendimento ao cliente</div>
                        <div class="card-body" align="center">
                            <a href="https://pbtec.geiko.com.br/areacliente/default.asp?sHL=s" target="_blank" class="btn btn-primary">Central de Atendimento</a>
                        </div>
                </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card mx-auto mt-5 primary">
                <div class="card-header">Financeiro</div>
                <div class="card-body" align="center">
                    <a href="{{$url}}" class="btn btn-primary">Segunda via do Boleto</a>
                </div>
            </div>
        </div>
      </div>
    </div>
        
    <!-- Bootstrap core JavaScript-->
    <script src="/theme/vendor/jquery/jquery.min.js"></script>
    <script src="/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/theme/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
