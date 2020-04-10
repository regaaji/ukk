<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/njajal.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>fontawesome-free/css/all.css">
     <!-- mdoostrap -->
     <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/mdb.min.css">
     <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery-ui.css">
     <!-- datatables -->
     <link rel="stylesheet" href="<?= base_url('assets/'); ?>DataTables/datatables.min.css">
     <!-- datepicker -->
     <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/datepicker.css">
     <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery.datetimepicker.min.css">

         <!-- plugins:css -->
      <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor.bundle.base.css">
      <link rel="stylesheet" href="<?= base_url('assets/'); ?>materialdesignicons.css">
      <!-- endinject -->
      <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="fas fa-list"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
       
        <ul class="navbar-nav navbar-nav-right">
         
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

 
     <!-- sweetalert -->
    <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/sweet2.js"></script>

  <!-- plugins:js -->
   <script src="<?= base_url('assets/'); ?>js/vendor.bundle.base.js"></script> 
  <!-- endinject -->
 
  <!-- inject:js -->
  <script src="<?= base_url('assets/'); ?>js/hoverable-collapse.js"></script>
  <script src="<?= base_url('assets/'); ?>js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
 
  <script src="<?= base_url('assets/'); ?>js/off-canvas.js"></script>
  <!-- End custom js for this page-->

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/'); ?>js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/mdb.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/jquery-ui.js"></script>
    <!-- datatables -->
    <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script src="<?= base_url('assets/'); ?>DataTables/datatables.min.js"></script>
    <!-- datepicker -->
    <script src="<?= base_url('assets/'); ?>js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.datetimepicker.full.min.js"></script>
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
          'autoWidth': false
      })
    })
    </script>

      <script>
   // $('.datepicker').pickadate({
   //  formatSubmit: 'yyyy/mm/dd',
   //  clear: 'effacer'
   // })

   // $(document).ready(function() {
       var dateToday = new Date();
     var dates = 
      $('#tanggal1').datepicker({
        format: "yyyy-mm-dd",
          autoclose: true
      });
     $('#tanggal').datepicker({
          format: "yyyy-mm-dd",
          autoclose: true,
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3,
          minDate: dateToday,
          onSelect: function(selectedDate) {
              var option = this.id == "from" ? "minDate" : "maxDate",
                  instance = $(this).data("datepicker"),
                  date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
              dates.not(this).datepicker("option", option, date);
          }
      });
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
</body>

</html>

