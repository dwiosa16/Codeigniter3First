<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"> 
    <title>User Login</title>
</head>
<body>
<div class="site-wrapper"> 
    
    <div class="site-wrapper-inner"> 

        <div class="cover-container"> 
            <div class="masthead clearfix">             
            <div class="inner">              
        <h3 class="masthead-brand">~User Login~</h3>              
    <nav>
<ul class="nav masthead-nav">                   
    <li><a href="<?php echo site_url('chelloworld')?>">Home</a>
        </li>                  
            <li class="active"><a href="<?php echo site_url('cuser_login')?>">Login</a></li>                 
        </ul>               
    </nav>             
</div>          
    </div> 
        <div class="inner cover">             
            <form class="form-signin" role="form" method="post" action="<?php echo site_url('cuser_login/validate_login')?>">               
        <h1 class="form-signin-heading">Please sign in</h1>               
    <hr>               
    <input type="text" class="form-control" placeholder="username" name="username" required autofocus>               
        <input type="password" class="form-control" placeholder="password"name="password" required>                              
            <button class="btn btn-lg btn-default" type="submit">Sign in</button>
        </form>          
    </div> 

        <div class="mastfoot">             
            <div class="inner">               
                <p>Copyright &copy; 2019 <a href="#">
                <strong>CV. Dwi Santosa</strong></a>.
            </p>             
        </div>           
    </div> 

</div> 

    </div> 

</div>
<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
</body>

</html>