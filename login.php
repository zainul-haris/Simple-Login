
<!DOCTYPE html>

    <html>
    <head>
       <title>Contoh login sederhana dengan mysqli</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
         <style type="text/css">
            body
            {
                background:#ECF0F1;

            }
            .kotak
            {
                background-color: #fff;
                width: 500px;
                height: 250px;
                background: #fff;
                margin: 50px auto;
                padding-right: 65px;
                padding-top: 10px;
                color: #808080;
            }
            .input-group
               {
                  padding-bottom: 10px;
               }

         </style>
    </head>
    <body>
      <div class="container">
            <div class="kotak">
            
            <div class="row">
                   <div class="col-md-8 col-md-offset-3">
                         <h4 class="text-center">Login Admin</h4>
                           <form action="ceklog.php"   method="post">
                                 <div class="input-group input-group-lg">
                                    <span class="input-group-addon">
                                       <i class="fa fa-user fa-fw" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                 </div>
                                 <div class="input-group input-group-lg">
                                    <span class="input-group-addon">
                                       <i class="fa fa-key fa-fw" aria-hidden="true"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                 </div>
                             
                              <input type="submit" class="btn btn-primary btn-block btn-lg " name="login" value="login" />
                             
                           </form>
                        
                  </div>
               </div>
            </div>
      </div>
    </body>
</html>
    