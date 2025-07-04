<?php if($act ==='upd_save'){
    // for($rowdetstudents=1;$rowdetstudents>=5;$rowdetstudents++){
        foreach ($qdetstudents as $rowdetstudents ) {
            # code...
        $stu_id=$rowdetstudents->stu_id;
        $id_num=$rowdetstudents->id_num;
        $first_name=$rowdetstudents->first_name;
        $last_name=$rowdetstudents->last_name;
        $address=$rowdetstudents->address;
        $phone_num=$rowdetstudents->phone_num;
    }
}    
?>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light nav-tabs ">
                <a href=" <?= site_url('chelloworld') ?> " class="navbar-brand"> Home </a>
                <a href=" <?= site_url('cmenu1')?> " class="navbar-brand"> Menu1 </a>
                <a href=" <?= site_url('cmenu2')?>" class="navbar-brand"> Menu2 </a>
                <a href=" <?= site_url('cmenu3')?> " class="navbar-brand"> Menu3 </a>
                <a href=" <?= site_url('cstudents') ?> " class="navbar-brand"> Students </a>
            </nav>
<h2>Student | <?= $title ?></h2>
<form action="<?= base_url() ?>cstudents/form/<?=$act?>/<?=$stu_id?>" method="post" class="form-horizontal">
        <div class="form-group">
        <label class="control-label col-sm-2" for="id_num">ID Number:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="id_num" name="id_num" value="<?= $id_num?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="first_name"> First Name:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="first_name" id="first_name" value=" <?= $first_name; ?> ">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="last_name"> Last Name:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="last_name" id="last_name" value="<?= $last_name ?> ">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="address"> Address:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="address" id="address" value=" <?= $address ?> ">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="phone_num"> Phone Number:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="phone_num" id="phone_num" value=" <?= $phone_num ?> ">
        </div>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Save" >
    <button type="reset" class="btn btn-danger">Reset</button>

</form>

