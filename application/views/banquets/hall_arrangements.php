 <!-- /.row -->
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box col-sm-3">
            <div class="box-header" >
              <h3 class="box-title">Banquets Arrangments</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>Banquet Name</th>
                          <th>Address</th>
                          <th>Actions</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php $i=1; foreach ($banquets as $key => $value) { ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $value['name']; ?></td>
                          <td><?php echo $value['address']; ?></td>
                          <td>
                            <a href="<?php echo $base_url; ?>banquet/view_arrangements/<?php echo $value['id']; ?>"><i class="fa fa-eye"></i></a>
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
 