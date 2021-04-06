
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

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
      @if (session('status'))
    <div class="alert alert-warning">
        {{ session('status') }}
    </div>
@endif
    
        <div class="card-header">Informe seu CNPJ:</div>
        <div class="card-body">
          <form method="POST" action="{{route('verificaCliente')}}">
          {{ csrf_field() }}
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="cnpj" id="cnpj" class="form-control"required="required" autofocus="autofocus">
                <label for="inputEmail">Apenas Números</label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Login</button>   
          </form>         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/theme/vendor/jquery/jquery.min.js"></script>
    <script src="/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script>
       $(document).ready(function() {$('#cnpj').mask('00.000.000/0000-00');});
    </script>
        <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
