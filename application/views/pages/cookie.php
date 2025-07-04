<?php $cookie_name = "user"; 
$cookie_value = "Dwi"; setcookie($cookie_name, $cookie_value, time() +(86400 * 30), "/"); // 86400 = 1 day

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Cookie </title>
    <link rel="stylesheet" href=" <?= base_url() ?>assets/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light nav-tabs ">
                <a href=" <?= site_url('chelloworld') ?> " class="navbar-brand"> Home </a>
                <a href=" <?= site_url('cmenu1')?> " class="navbar-brand"> Menu1 </a>
                <a href=" <?= site_url('cmenu2')?>" class="navbar-brand"> Menu2 </a>
                <a href=" <?= site_url('cmenu3')?> " class="navbar-brand"> Menu3 </a>
                <a href=" <?= site_url('cstudents') ?> " class="navbar-brand"> Students </a>
                <a href="<?=site_url('cookie')?>" class="navbar-brand">Cookie</a> 
            </nav>
    <h2>Create Cookie</h2>
    <p>Bagian ini berisi kode untuk membuat cookie dengan nama "user" dan berisi nilai "Dwi".</p> 
    <pre class="php" name="code">  
</pre> 

    <?php if(!isset($_COOKIE[$cookie_name])) {   
        echo "Cookie named '" . $cookie_name . "' is not set!"; 
            } else { echo "Cookie '" . $cookie_name . "' is set!<br>";    
                        echo "Value is: " . $_COOKIE[$cookie_name]; } 
    ?>

    </div>
    <script src=" <?= base_url() ?>assets/js/bootstrap.js" ></script>
</div>
    </body>
</html> 