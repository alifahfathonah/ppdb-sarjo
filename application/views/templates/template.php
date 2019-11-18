<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/css/bootstrap.min.css">
  <link href="<?=base_url('assets');?>/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url('assets');?>/css/style.css">
  <!-- End CSS -->

  <title><?=$title;?></title>
</head>
<body>
  <!-- Nav -->
  <?php require_once('_nav.php'); ?>
  <!-- End Nav -->
  
  <!-- Contents -->
  <?=$contents;?>
  <!-- End Contents -->

  <!-- Footer -->
  <?php require_once('_footer.php'); ?>
  <!-- End Footer -->
  <!-- JS -->
  <script src="<?=base_url('assets');?>/js/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="<?=base_url('assets');?>/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <!-- End JS -->
</body>
</html>