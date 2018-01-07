 <!-- /.row -->
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box col-sm-3">
            <div class="box-header" >
              <h3 class="box-title">Add Arragements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="form-horizontal form-label-left" action="<?php echo $base_url; ?>banquet/save_arrangements" enctype="multipart/form-data" method="post">

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Images <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="banq_id" value="<?= $banq_id ?>">
                          <input id="img" class="form-control col-md-7 col-xs-12" multiple name="imgs[]" accept="image/*" required="required"  type="file">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price/ Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="description" class="form-control col-md-7 col-xs-12"  name="description" required="required"  type="text">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success">Add</button>
                        </div>
                      </div>
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 