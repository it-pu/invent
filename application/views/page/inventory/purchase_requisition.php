

<style media="screen">
  .table-pr thead tr th,.center {
    text-align: center;
  }
  .right {
    text-align: right;
  }
</style>
<div class="row" style="margin-top:30px;">


  <div class="col-md-12" style="text-align:right;margin-bottom:10px;">
    <a href="<?php echo base_url('inventory/create-pr'); ?>" class="btn btn-success btn-fill btn-wd"><b>Buat Pengajuan PR</b></a>
  </div>


  <div class="col-md-12">
    <table class="table table-bordered table-hover table-pr">
      <thead>
        <tr>
          <th style="width:3%;">#</th>
          <th style="width:20%;">Keterangan</th>
          <th style="width:20%;">Dokumen</th>
          <th style="width:10%;">Total Biaya</th>
          <th style="width:7%;">Status</th>
          <th style="width:7%;">Aksi</th>
        </tr>
      </thead>

      <tbody>
          <tr>
            <td class="center">1</td>
            <td>Service Proyektor</td>
            <td>

              <span class="label label-primary">PR</span>
              <span class="label label-primary">AF</span>
              <span class="label label-info">IOM</span>
              <span class="label label-info">Dokumen Pendukung</span>

              <!-- <span class="label label-success">Success</span> -->

              <span class="label label-default">Form Barang Rusak</span>
              <span class="label label-default">Circular Sheet</span>

              <!-- <span class="label label-warning">Warning</span>
              <span class="label label-danger">Danger</span> -->
            </td>
            <td class="right">
              Rp. 3.000.000
            </td>
            <td class="center">
              <a href="#">On progres</a>
            </td>
            <td class="center">
              <button type="button" class="btn btn-default btn-sm" name="button">Edit</button>
              <button type="button" class="btn btn-danger btn-sm" name="button">Hapus</button>
            </td>
          </tr>
      </tbody>
    </table>
  </div>

</div>
