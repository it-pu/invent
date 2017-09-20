
<style>
  .captcha {
    font-size: 1.7em;
    letter-spacing: 7px;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  }
  .bg-c {
    padding: 10px;
    background-image: url("<?php echo base_url('assets/pat.jpeg'); ?>");
    min-height: 40px;
    width: 100%;
  }
  .c-help {
    font-size: 0.7em;
    color: red;
    font-weight: bold;
    text-align: left;
  }
</style>
<div class="conteiner" style="margin-top:70px;">
  <div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4">

      <div class="thumbnail animated swing" style="min-height:100px;padding:15px;text-align:center;">
        <!-- <h3 style="text-align:center;margin:0px;margin-bottom:10px;">Internal System Login</h3> -->
        <img src="<?php echo base_url('assets/logo.png') ?>" alt="Podomoro University" style="width:100%;max-width:250px;">
        <hr>
        <form class="" action="index.html" method="post">
          <div class="form-group">
            <input type="text" class="form-control border-input" name="nik" placeholder="NIK . . .">
          </div>
            <div class="form-group">
              <input type="password" class="form-control border-input" name="nik" placeholder="Password . . .">
            </div>
            <div class="form-group">
              <div class="bg-c">
                <b class="captcha"><?php echo $captcha; ?></b>
              </div>
              <p class="c-help">*) Captcha hanya terdiri dari huruf kapital dan angka</p>
            </div>

              <div class="input-group border-input">
                <span class="input-group-addon  fm-captcha" id="icon"></span>
                <input type="text" class="form-control border-input fm-captcha" placeholder="Captcha . . ." id="captcha">
              </div>


          <button type="button" id="login" class="btn btn-info btn-fill btn-wd" name="button">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

$.fn.extend({
  animateCss: function (animationName) {
      var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      this.addClass('animated ' + animationName).one(animationEnd, function() {
          $(this).removeClass('animated ' + animationName);
      });
      return this;
  }
});

  $(document).ready(function () {
    $('body').bind('copy paste',function(e) {
        e.preventDefault(); return false;
    });

    var c = "<?php echo $captcha; ?>";
    $('#captcha').keyup(function () {
      var v = $('#captcha').val().toUpperCase();
      if(v==c){
        $('#icon').html('<span style="color:green;" class="ti-check"></span>');
        $('.fm-captcha').css('border','1px solid green');
        $('.input-group-addon').css('border-right','none');
      } else {
        $('#icon').html('<span style="color:red;" class="ti-close"></span>');
        $('.fm-captcha').css('border','1px solid red');
        $('.input-group-addon').css('border-right','none');
      }
    });

    $('.thumbnail').animateCss('bounce');
  });

  $('#login').click(function () {
    $('.thumbnail').removeClass('animated swing');
    $('.thumbnail').animateCss('shake');
    $.notify({
        // icon: 'fa fa-exclamation-triangle',
        message: "<span class='fa fa-exclamation-triangle'></span> <b>Error ! </b> - You are not allowed user."

      },{
          type: 'danger',
          timer: 4000
      });
  });
</script>
