<?php

if ($jumlah->num_rows() > 0) {

  $this->db->select('*');
  $this->db->group_by('bulan');
  $this->db->order_by('result_id', 'desc');
  $db = $this->db->get('result')->result_array();
  foreach ($db as $row1):
 ?>
<div class="row">
    <div class="col-md-9">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h2>
                <?php $bln	= date ("M Y", strtotime($row1['tanggal']));
                echo $bln; ?>
              </h2>
            </div>
            <div class="box-body">
                <?php
                $hari	= date("d");
                $bulan	= date ("m", strtotime($row1['bulan']));
                $tahun	= date("Y");
                $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
                ?>
                <table id="example1" class="table table-bordered table-striped" style="border:2px solid #1E90FF">
                    <tr bgcolor="#ADD8E6">
                        <td align=center><font color="#FF0000">Minggu</font></td>
                        <td align=center>Senin</td>
                        <td align=center>Selasa</td>
                        <td align=center>Rabu</td>
                        <td align=center>Kamis</td>
                        <td align=center>Jumat</td>
                        <td align=center>Sabtu</td>
                    </tr>
                    <?php
                    $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));

                    for ($ds=1;$ds<=$s;$ds++) {
                    echo "<td></td>";
                    }

                    for ($d=1;$d<=$jumlahhari;$d++) {

                        if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
                            echo "<tr>";
                            }
                    $warna="#000000"; // warna default

                    $mix = $tahun."-".$bulan."-".$d;
                    $hhh = $this->db->get_where('result', array('tanggal' => $mix ));

                    if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#FF0000"; }
                    echo "<td align=center valign=middle> <span style=\"color:$warna\">";
                    if ($hhh->num_rows() > 0){echo $hhh->row()->result;}else{echo '-';}
                    echo "</span></td>";
                    if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
                    }; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php endforeach;
}else {

  echo 'Data Kosong';
}
?>
