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
            <h3 class="masthead-brand">Welcome 
        <?=$this->session->userdata('ci_name');?>~</h3>               
    <nav>                 
        <ul class="nav masthead-nav">                   
            <li><a href="<?php echo site_url('chelloworld')?>">Home</a></li>                  
                <li class="active">
                    <a href="<?php echo site_url('cuser_login/logout')?>">Logout</a></li>                 
            </ul>               
        </nav>             
    </div>
</div>
<div class="inner cover">             
    <?php print_r($this->session->userdata);?>           
        </div> 
            <div class="mastfoot">             
                <div class="inner">               
                    <p>Copyright &copy; 2015 <a href="#"><strong>Dwi Santosa</strong></a>.</p>             
                </div>           
            </div> 
        </div> 
    </div> 
</div>
<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
</body>

</html>