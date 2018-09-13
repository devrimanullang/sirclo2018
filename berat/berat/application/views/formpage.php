<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BERAT</title>
  </head>
  <body>
    <?php
    if (isset($q)){
      $sub = "Edit Page";
		  $attributes = array('enctype' => 'multipart/form-data');
      echo form_open('berat/editberat',$attributes);
      $id = $q[0]->id;
      $date = $q[0]->date;
      $max = $q[0]->max;
      $min = $q[0]->min;
      $dif = $max - $min;
    }
    else{
      $sub = "Create Page";
      echo validation_errors();
		  $attributes = array('enctype' => 'multipart/form-data');
      echo form_open('berat/addBerat',$attributes);
    }
    ?>
    <h1><?php echo $sub ?></h1>

    <form class="" action="index.html" method="post">

      <div class="">
        <label for="">Tanggal :</label>
        <input type="date" name="date" value="<?php if (isset($q)) echo $date; ?>">
      </div>
      <div class="">
        <label for="">Berat Max :</label>
        <input type="number" name="max" value="<?php if (isset($q)) echo $max; ?>">
      </div>
      <div class="">
        <label for="">Berat Min :</label>
        <input type="number" name="min" value="<?php if (isset($q)) echo $min; ?>">
      </div>
        <input type="hidden" name="id" value="<?php if (isset($q)) echo $id; ?>">
      <input type="submit" name="" value="Done">

    </form>


  </body>
</html>
