<head>
  <title>Blog</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<body>
  

  <script src="js/icons.js"></script>
    <div class="container-fluid stylish-form">
      <h2 class="text-center">Stylish Signup Page Using Bootstrap</h2>
      <div class="row mar20" >
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="inner-section">
            <form method="POST" >
            {!! csrf_field()!!}
              <div class="mar20 inside-form">
                <h2 class="font_white text-center">Реєстрація</h2>
                
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-pencil "></i></span>
                  <input type="text" class="form-control" name="name" placeholder="Логін...">
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock "></i></span>
                  <input type="email" class="form-control" name="email" placeholder="Емейл...">
                </div>
               
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock "></i></span>
                  <input type="password" class="form-control" name="password" placeholder="Пароль...">
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock "></i></span>
                  <input type="password" class="form-control" name="password_confirmation" placeholder="Пароль ще раз...">
                </div>
                <div class="footer text-center">
                  <button type="submit"  class="btn btn-neutral btn-round btn-lg">Реєстрація</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <h2 class="text-center font_white">Thank You For Visiting This Snippet</h2>
    </div>
</body>