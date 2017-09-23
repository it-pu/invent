
<style media="screen">
  .row{
    margin-bottom: 20px;
  }
  .btn i {
    padding-right: 7px;
  }
  .title .label {
    padding: 0px;
    padding-left: 3px;
    padding-right: 3px;
    /*font-size: 14px;*/
  }
  .modal-backdrop {
    z-index: 0;
  }
</style>
<div class="row">
  <div class="col-md-12">
    <a href="<?php echo base_url('inventory/purchase-requisition'); ?>" class="btn btn-default btn-fill"><i class="ti-arrow-left"></i> Kembali</a>
  </div>
</div>


<!-- ----- FORM PR ----- -->
<div class="row">
  <div id="pr">

  </div>
</div>

  <div id="new_form">

  </div>

<script type="text/javascript">
  $(document).ready(function () {
    var url = "<?php echo base_url('inventory/form/pr'); ?>";
    $('#pr').load(url);
  });
</script>


<div class="row">
  <div class="col-md-12">
    <button id="add_form" class="btn btn-info btn-fill"><i class="ti-plus"></i> Add Form</button>
    <a href="#" class="btn btn-danger btn-fill"><i class="ti-printer"></i> Cetak / Download</a>
    <a href="#" class="btn btn-success btn-fill"><i class="ti-save"></i> Simpan</a>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="modal_add_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add From</h4>
      </div>
      <div class="modal-body">
        <div class="checkbox">
          <label>
            <input type="checkbox" class="add-new-form" value="0">
            Approval Form
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" class="add-new-form" value="1">
            Internal Office Memo
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" class="add-new-form" value="2">
            Berita Acara
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" class="add-new-form" value="3">
            Dokumen Pendukung
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" class="add-new-form" value="4">
            Form Daftar Barang Rusak
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" class="add-new-form" value="5">
            Circular Sheet
          </label>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" id="add_form_act" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  window.form_checked = [];
  window.form_unchecked = [];
  window.form_exist = [];
  $('#add_form').click(function () {
    // $('.add-new-form').attr('checked', true);


    $('#modal_add_form').modal();
    // console.log(form_checked);
    if(form_checked.length>0){
      for(var x=0;x<form_checked.length;x++){
        // console.log(form_checked[x]);
        $('input[value='+form_checked[x]+']').prop('checked', true);
        $('input[value='+form_checked[x]+']').parent().parent().addClass('checked');
      }
    }
  });


  $('#add_form_act').click(function () {
    form_checked = $('.add-new-form:checked').map(function () {
      return this.value;
    }).get();

    form_unchecked = $('.add-new-form:not(:checked)').map(function () {
      return this.value;
    }).get();

    $('#modal_add_form').modal('hide');
    show_form();
  });

  function show_form() {

    var arr_form = [
      'af',
      'iom',
      'berita_acara',
      'dokumen_pendukung',
      'daftar_barang_rusak',
      'cs'
    ]

    var url = "<?php echo base_url('inventory/form'); ?>";
    if(form_checked.length>0){
      for(var x=0;x<form_checked.length;x++){

        if(form_exist.indexOf(form_checked[x])<0){
          var f = form_checked[x];
          form_exist.push(f);

          $('#new_form').append('<div class="row row'+arr_form[f]+'"><div id="'+arr_form[f]+'" class="form_add" ></div></div>');
          $('#'+arr_form[f]).load(url+'/'+arr_form[f]);


        }
      }
    }

    if(form_unchecked.length>0){
      for(var x=0; x<form_unchecked.length;x++){
        var id = arr_form[form_unchecked[x]];
        $('.row'+id).remove();
        var i = form_exist.indexOf(form_unchecked[x]);
        if (i > -1) {
            form_exist.splice(i, 1);
        }

      }
    }

  }
</script>
