<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Date picker</h3>
            </div>
            <div class="box-body">
            <form action="<?php echo site_url('admin/result_save');?>" method="post">
              <!-- Date -->
              <div class="form-group">
                <label>Tanggal</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker" name="tanggal">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date range -->
              <div class="form-group">
                <label>Result</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-check-circle"></i>
                  </div>
                  <input type="number" class="form-control pull-right" name="result">
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
              <button type="submit" class="btn btn-block btn-success">Simpan</button>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
</div>