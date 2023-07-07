<html lang="en"><head>
<title>connexion</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
<link rel="stylesheet" href="assets/bootstrap.min.css">
<link rel="stylesheet" href="assets/styles.css">
<style>
  .register-form h1 {
    font-size: 42px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: 150px 0px;
    line-height: 60px;
}
.register-form .form-control {
    border: none;
    background: none;
    border-bottom: 1px solid #ffc107;
    border-radius: 0px !important;
    color: #fff;
}
.register-form .form-control:focus,
.register-form .form-control:hover{
  border:none;
  margin: 0 auto;
  background: none;
  box-shadow: none;
  border-bottom: 1px solid #fff;
  color: #fff;
}
</style>
</head>
<body data-rsssl="1">
  <div class="register-form mt-3 mb-3">
    <div class="container">
          <div class="row">
            <div class="col-md-6 d-none d-md-block bg-warning">
                <div class="img"><img src="assets/logo.png" alt="logo" srcset="" class="text-center mt-3 "></div>
                <h1 class="text-center">Créer un nouveau<br> Compte</h1>
            </div>
            <div class="col-md-6 bg-dark">
                <form action="#" class="p-4 text-white">
                  <div class="form-group">
                      <label for="name"><i class="fas fa-user"></i> Name</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="email"><i class="fas fa-envelope"></i> Email</label>
                      <input type="email" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="pwd"><i class="fas fa-lock"></i> Confirm Password</label>
                      <input type="password" class="form-control" id="pwd">
                  </div>
                  <div class="form-group">
                      <label for="pwd"><i class="fas fa-lock"></i> Confirm Password</label>
                      <input type="password" class="form-control" id="pwd">
                  </div>
                  <button type="submit" class="btn btn-warning mb-3 mt-3 float-right">Register</button>
                </form>
            </div>
          </div>
      </div>
  </div>

</body></html>