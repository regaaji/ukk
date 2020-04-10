 <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 wow fadeIn" style="margin-top: 20%;">

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © <?= date('Y') ?> Copyright:
      <a href="" target="_blank"> Rega Aji </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery-3.4.1.min.js"></script>

  <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>

  <script src="<?= base_url('assets/'); ?>js/jquery.datetimepicker.full.min.js"></script>

  <script src="<?= base_url('assets/'); ?>js/bootstrap-datepicker.js"></script>
  <!-- <script src="assets/js/jquery-ui.js"></script> -->
  
  <!-- JQuery -->
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/mdb.min.js"></script>

  <!-- DataTables -->
  <script type="text/javascript" src="<?= base_url('assets/'); ?>DataTables/datatables.min.js"></script>

  <!-- sweetalert -->
    <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/sweet2.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <script>
  $.datetimepicker.setLocale('id');
  $('#datetimepicker').datetimepicker({
    format: "Y-m-d H:i:s"
  });
</script>




<script>
    $(function () {
    $('#tabel1').DataTable()
    $('#tabel2').DataTable()
    $('#tabel3').DataTable({
      'paging': true,
      'lengthChange': true,
      'searching': true,
      'ordering': false,
      'info': false,
      'autoWidth': false,
      'language': {"emptyTable": "No data available in table"},
  })
})
</script>

  <script>
   // $('.datepicker').pickadate({
   //  formatSubmit: 'yyyy/mm/dd',
   //  clear: 'effacer'
   // })

   // $(document).ready(function() {
      $('#tanggal1').datepicker({
        format: "yyyy-mm-dd",
        closeText:'Clear'
      });
     $('#tanggal').datepicker({
          format: "yyyy-mm-dd",
          closeText:'Clear'
      });
     // $('#tanggal3').datetimepicker({
     //    timeFormat: "hh:mm tt",
     //    dateFormat: "yyyy-mm-dd"
     //  });
   //});
 </script>

 <script>
   function totalIt() {
     var input = document.getElementsByName("language");
     var total = 0;
     for (var i = 0; i < input.length; i++) {
       if (input[i].checked){
        total += parseInt (input[i].value);
       }
     }
     document.getElementById('total').value = "" + total.toFixed();
   }
 </script>


<!-- <script>
  function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
  }
</script> -->

   <script>
  $('.qty').on('input', function () {
    
    var value = $(this).val();
    
    if ((value !== '') && (value.indexOf('.') === -1)) {
        
        $(this).val(Math.max(Math.min(value, 20), -20));
    }
});
  
  $('body').on('click', '.qtyplus', function() {
    var $this = $(this);
    var $context = $this.parents('.price-row');
    var $quantityField = $this.parent().find('.qty');
    var currentVal = parseInt($quantityField.val());
    if (!isNaN(currentVal) && currentVal < 20) {
      $quantityField.val(currentVal + 1);
      calc($context);
    }

    //console.log($quantityField);
  });
  $('body').on('click', '.qtyminus', function() {
    var $this = $(this);
    var $context = $this.parents('.price-row');
    var $quantityField = $this.parent().find('.qty');
    var currentVal = parseInt($quantityField.val());
    if (!isNaN(currentVal) && currentVal > 0) {
      $quantityField.val(currentVal - 1);
      calc($context);
    }
  });

  function calc($context) {
    $('.price', $context).text();
    var quantity = $('.qty', $context).val();
    var price = $('.price', $context).text();
    var pajak = .05;

    //console.log(price);
    var total = quantity * price;
    // var total = total + (total * pajak);
    // console.log(total);
    $context.find('.total-price').html("<span>Rp. </span>" + total);



    var sum = 0;
    $(".total-price").each(function() {
      var $this = $(this);
      var $context = $this.parents('.price-row');
      var val = $($this, $context).text();
      if (val) {
        val = parseFloat(val.replace(/^\Rp./, ""));
        sum += !isNaN(val) ? val : 0;
      }
    });


    //menghitung pajak
    var sum = sum + (sum * pajak);

    //console.log(quantity);
    if (sum >= 200000){
      var diskon = ((sum*10)/100);
      var sum = (sum-diskon);
      //alert("Anda mendapat diskon sebesar 10%");
    } else {
      //alert("anda tidak mendapat diskon");
    }

    $('#total-sum').html("<span>Harga Total: </span>" + "<span>Rp. </span>" + sum);
    //$('#total-harga').val(sum);

    console.log(sum);
  }

  

  var qty = $(".qty");
  qty.keyup(function() {
    var $this = $(this);
    var $context = $this.parents('.price-row');
    calc($context);
  });



  var specialKeys = new Array();
  specialKeys.push(8); //Backspace
  $(function() {
    $(".qty").bind("keypress", function(e) {
      var keyCode = e.which ? e.which : e.keyCode
      var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
      $(this).parents('.price-row').find('.error').css("display", ret ? "none" : "inline");
      return ret;
    });
    $(".qty").bind("paste", function(e) {
      return false;
    });
    $(".qty").bind("drop", function(e) {
      return false;
    });
  });
</script>

<script>
  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>



 



  
  
</body>

</html>