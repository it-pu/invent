<div class="col-md-12">
  <div class="card">
    <div class="header">
      <h4 class="title"><span class="label label-primary">PR</span>  Form Purchase Requisition</h4>
      <p class="category"><i>FM-UAP / PUR-02-01</i></p>
    </div>
    <div class="content">
      <hr>
      <form class="form-inline">
        <div class="form-group">
          <label>No PR : </label>
          <input type="text" class="form-control border-input" id="no_pr" value="12/PR-IT/IX/2017">
        </div>
        <div class="form-group">
          <label>Event / other : </label>
          <textarea name="name" class="form-control border-input" rows="1" cols="40"></textarea>
          <!-- <input type="text"  id="event" placeholder="Event / other"> -->
        </div>
        <div class="form-group">
          <label>Department : </label>
          <select class="form-control border-input" name="">
            <option value="IT">IT</option>
            <option value="Keuangan">Keuangan</option>
            <option value=""></option>
          </select>
        </div>
      </form>
      <hr>
      <table class="table table-bordered table-striped">
        <thead>
          <tr style="">
            <th style="width:1%;text-align:center;">#</th>
            <th style="width:20%;text-align:center;">Description</th>
            <th style="width:20%;text-align:center;">Spesification</th>
            <th style="width:5%;text-align:center;">Exp Code</th>
            <th style="width:10%;text-align:center;">Date Needed</th>
            <th style="width:5%;text-align:center;">Quantity</th>
            <th style="width:10%;text-align:center;">Price Estimated</th>
            <th style="width:10%;text-align:center;">Total Amount</th>
          </tr>
        </thead>
        <tbody id="body_item">
          <tr id="tr1">
            <td>1</td>
            <td><input type="text" class="form-control border-input" name="" value=""></td>
            <td><input type="text" class="form-control border-input" name="" value=""></td>
            <td><input type="text" class="form-control border-input" name="" value=""></td>
            <td><input type="text" class="form-control border-input" name="" value=""></td>
            <td><input type="text" class="form-control border-input" name="" value=""></td>
            <td><input type="text" class="form-control border-input" name="" value=""></td>
            <td><input type="text" class="form-control border-input" name="" value=""></td>
          </tr>
        </tbody>
      </table>
      <div style="text-align:right;">
        <button class="btn btn-success" id="add_item" name="button"><i class="fa fa-plus-circle" aria-hidden="true"></i> Item</button>
        <button class="btn btn-danger"  id="remove_item" name="button"><i class="fa fa-minus-circle" aria-hidden="true"></i> Item</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
var no_tr = 1;
$('#add_item').click(function () {

  if(no_tr<8){
    no_tr =no_tr +1;
      $('#remove_item').attr('data-id',no_tr);
      $('#body_item').append('<tr id="tr'+no_tr+'"><td>'+no_tr+'</td><td><input type="text" class="form-control border-input" name="" value=""></td><td><input type="text" class="form-control border-input" name="" value=""></td><td><input type="text" class="form-control border-input" name="" value=""></td><td><input type="text" class="form-control border-input" name="" value=""></td><td><input type="text" class="form-control border-input" name="" value=""></td><td><input type="text" class="form-control border-input" name="" value=""></td><td><input type="text" class="form-control border-input" name="" value=""></td></tr>');
  } else {
    $.notify({
        // icon: 'fa fa-exclamation-triangle',
        message: "<span class='fa fa-exclamation-triangle'></span> <b>Warning ! </b> - Maksimal input 8 item."

      },{
          type: 'warning',
          timer: 4000
      });
  }

});

$('#remove_item').click(function() {
  var id = no_tr;
  if(id>1 && id<9){
      $('#tr'+id).remove();
      no_tr = no_tr - 1;
  } else {
    $.notify({
        // icon: 'fa fa-exclamation-triangle',
        message: "<span class='fa fa-exclamation-triangle'></span> <b>Info </b> - Minimal 1 item."

      },{
          type: 'info',
          timer: 4000
      });
  }

});
</script>
