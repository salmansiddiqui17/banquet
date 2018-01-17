 <!-- /.row -->
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box col-sm-3">
            <div class="box-header" >
              <h3 class="box-title">Banquets</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                    <a href="<?= base_url() ?>banquet/add" class="btn btn-primary"><span class="fa fa-plus"></span> Add Banquet</a>
                </div>
              </div><br>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Contact no</th>
                          <th>Actions</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php $i=1; foreach ($banquets as $key => $value) { ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $value['name']; ?></td>
                          <td><img src="<?= base_url().$value['img']; ?>" height="100" alt="image"></td>
                          <td><?php echo $value['address']; ?></td>
                          <td><?php echo $value['contact_no']; ?></td>
                          <td>
                            <a href="<?php echo $base_url; ?>banquet/hall_arrangments/<?php echo $value['id']; ?>" title="View Arrangements"><i class="fa fa-eye"></i></a> 
                            <a href="<?php echo $base_url; ?>banquet/edit/<?php echo $value['id']; ?>"><i class="fa fa-edit"></i></a> 
                            <a href="<?php echo $base_url; ?>banquet/delete/<?php echo $value['id']; ?>"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 