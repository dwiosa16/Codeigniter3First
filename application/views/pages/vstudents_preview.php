<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?= $judul; ?> </title>
    <link rel="stylesheet" href=" <?= base_url() ?>assets/css/bootstrap.min.css">
<style media="print">
    @page{
        size:auto;
        margin: 0mm;
    }
    body{
        background-color:#FFF;

        margin:0px;
    }
</style>
</head>
<body onLoad="window.print();return false">
<div class="container">
<h2>Students List</h2>
<table class="table table-striped">
<thead>
    <tr>
        <th>Number</th>
        <th>Id Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Addrees</th>
        <th>Phone Number</th>
    </tr>
</thead>
<tbody>
<?php $i=1; ?>
    <?php  if(empty($qstudents)) {  ?>
        <tr>
            <td colspan="6">-</td>
        </tr>
    <?php } else{ $num = 0;
        foreach ($qstudents as $rowstudents){
            $num++; ?>

            <tr>
            <td> <?= "$i." ?> </td>
            <td> <?= $rowstudents->id_num ?> </td>
            <td> <?= $rowstudents->first_name ?> </td>
            <td> <?= $rowstudents->last_name ?> </td>
            <td> <?= $rowstudents->address ?> </td>
            <td> <?= $rowstudents->phone_num ?> </td>
            </tr>
            <?php $i++ ?>
        <?php }} ?>



</tbody>
</table>
</div>



<script src=" <?= base_url() ?>assets/js/bootstrap.min.js" ></script>
</div>
    </body>
</html> 