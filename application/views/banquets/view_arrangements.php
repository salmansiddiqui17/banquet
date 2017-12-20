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
                    <a href="<?= base_url() ?>banquet/add_arrangements/<?= $banq_id ?>" class="btn btn-primary"><span class="fa fa-plus"></span> Add Arrangements</a>
                </div>
              </div><br>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>Image</th>
                          <th>Actions</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php $i=1; foreach ($hall_arrangements as $key => $value) { ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><img src="<?= base_url().$value['img']; ?>" height="100" alt="image"></td>
                          <td>
                            <a href="<?php echo $base_url; ?>banquet/delete_arrangements/<?php echo $value['banq_id']."/".$value['id']; ?>"><i class="fa fa-trash"></i></a>
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 