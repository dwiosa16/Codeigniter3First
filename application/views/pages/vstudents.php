
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light nav-tabs ">
                <a href=" <?= site_url('chelloworld') ?> " class="navbar-brand"> Home </a>
                <a href=" <?= site_url('cmenu1')?> " class="navbar-brand"> Menu1 </a>
                <a href=" <?= site_url('cmenu2')?>" class="navbar-brand"> Menu2 </a>
                <a href=" <?= site_url('cmenu3')?> " class="navbar-brand"> Menu3 </a>
                <a href=" <?= site_url('cstudents') ?> " class="navbar-brand"> Students </a>
                <a href="<?=site_url('cookie')?>" class="navbar-brand">Cookie</a> 
            </nav>
    <h2>Students List</h2>
    <table class="table table-striped">
    
    <thead>
        <tr>
            <th>Number </th>
            <th>Id Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Addrees</th>
            <th>Phone Number</th>
            <th>Action</th>
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
            <td>
            <div class="btn-group">
                <a href=" <?=base_url()?>cstudents/form/upd/<?=$rowstudents->stu_id?>" class="btn btn-primary" role="button" > <span>Ubah</span> </a>
                <a href=" <?=base_url()?>cstudents/del/<?=$rowstudents->stu_id?>" class="btn btn-danger" role="button" onclick="return confirm('Delete all about <?=$rowstudents->first_name?>? ')">Hapus </a>
            </div>
            </td>
            </tr>
            <?php $i++ ?>
        <?php }} ?>
    


    
    </tbody>
    </table>
    <a href=" <?= base_url()?>cstudents/form/add"class="badge badge-success"> Add New </a> |
    <a href=" <?= base_url()?>cstudents/cetak"class="badge badge-dark"> Print </a>
    </div>
