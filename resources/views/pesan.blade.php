<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <title>Flash Message</title>
</head>
<body>
<div class="container">
  <div class="row">
   <div class="col-md-6">
    <a href="{{ url('get-pesan') }}" class="btn btn-danger btn-sm">
        Klik Disini
    </a>
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($message = Session::get('warning'))
      <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('info'))
      <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        Please check the form below for errors
    </div>
    @endif

    <table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Perusahaan</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Anugrah Sandi</td>
        <td>Codepolitan</td>
    </tr>
    </table>
  </div>
 </div>
</div>
    <!-- Scripts -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>