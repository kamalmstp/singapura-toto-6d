<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <div class="pull-left">
                  <a href="<?php echo site_url('admin/result_add');?>"><button type="button" class="btn btn-block btn-success">Tambah Hasil</button></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">#</th>
                  <th width="15%">Hari</th>
                  <th>Tanggal</th>
                  <th>Result</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach ($result as $row): ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$row['hari'];?></td>
                        <td><?=date("d-M-Y", strtotime($row['tanggal']));?></td>
                        <td><?=$row['result'];?></td>
                        <td>
                            <a href="<?php echo site_url('admin/result_edit/'.$row['result_id']);?>"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                            <a href="#" onclick="confirm_modal('<?php echo site_url('admin/result_del/'.$row['result_id']);?>');"><button type="button" class="btn btn-danger btn-sm"><i class="entypo-trash"></i> Hapus</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
</div>