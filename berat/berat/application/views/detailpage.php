<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BERAT</title>
  </head>
  <body>
    <?php
    $date = $q[0]->date;
    $max = $q[0]->max;
    $min = $q[0]->min;
    $dif = $max - $min;
     ?>
    <h1>Perbedaan berat badan tanggal <?php echo $date; ?></h1>

    <ul>
      <li><a href="<?=site_url('berat/create');?>">Create</a></li>
    </ul>

    <table border = '1'>
      <thead>
        <th>Tanggal</th>
        <th><?php echo $date; ?></th>
      </thead>
        <tr>
          <td>Max</td>
          <td><?php echo $max; ?></td>
        </tr>
        <tr>
          <td>Min</td>
          <td><?php echo $min; ?></td>
        </tr>
        <tr>
          <td>Perbedaan</td>
          <td><?php echo $dif; ?></td>
        </tr>
    </table>


  </body>
</html>
