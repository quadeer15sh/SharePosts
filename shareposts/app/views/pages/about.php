<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
  <p><?php echo $data['description']; ?></p>
  <p>Developer: <strong><?php echo DEVELOPER; ?></strong></p>
  <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
  <center><img src="<?php echo URLROOT; ?>/img/quadeer.png" alt="no image found"  height="350" width="400"></center>
<?php require APPROOT . '/views/inc/footer.php'; ?>