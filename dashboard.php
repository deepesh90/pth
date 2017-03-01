<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>P3 | Admin</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/lc_switch.css" rel="stylesheet">
    <link rel="stylesheet" href="css/codemirror.css">
    <link rel="stylesheet" href="css/custom.css">


</head>

<body class="fixed-sidebar">

<div id="wrapper">
<?php require('include/sidebar.php'); ?>
<div id="page-wrapper" class="gray-bg">
<?php require('include/header.php'); ?>

<div class="row wrapper border-bottom white-bg page-heading ng-scope">
  <div class="col-lg-10">
    <h2>Dashboard</h2>
  </div>
</div>

<div class="wrapper wrapper-content animated fadeIn ng-scope" ng-init="init()">
  <div class="row">
    <div class="col-md-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Add district</h5>
        </div>
        <div class="ibox-content">
          <div class="row center-block">
            <div class="col-md-9">
            	<img src="img/d1.png" class="img-responsive">
            </div>
             <div class="col-md-3">
             <img src="img/d2.png" class="img-responsive">
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>

<?php require('include/footer.php'); ?>


</div>
</div>







    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script src="js/codemirror.js"></script>
    <script src="js/codescript.js"></script>

    <script>
    $(document).ready(function(){


        var textarea = document.getElementById("code1");

        // Wait until animation finished render container
        setTimeout(function(){

            CodeMirror.fromTextArea(textarea, {
                lineNumbers: true,
                matchBrackets: true,
                styleActiveLine: true
            });
        }, 500);

    });
</script>




</body>

</html>
