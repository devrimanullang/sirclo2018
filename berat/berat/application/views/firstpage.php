<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BERAT</title>
  </head>
  <body>

    <h1>Perbedaan berat badan per hari</h1>

    <ul>
      <li><a href="<?=site_url('berat/create');?>">Create</a></li>
    </ul>

    <?php if (count($q)>0){ ?>

    <table border = '1'>
      <thead>
        <th>Tanggal</th>
        <th>Berat Max</th>
        <th>Berat Min</th>
        <th>Perbedaan</th>
        <th>Action</th>
      </thead>
      <?php
        foreach($q as $row){
          $date = $row->date;
          $max = $row->max;
          $min = $row->min;
          $dif = $max - $min;

          echo '<tr>';
          echo '<td>'.$date.'</td>';
          echo '<td>'.$max.'</td>';
          echo '<td>'.$min.'</td>';
          echo '<td>'.$dif.'</td>';
          echo '<td><a href ="'.site_url('berat/detail/?id='.$row->id).'">View</a> |
							<a href ="'.site_url('berat/edit/?id='.$row->id).'">Edit</a> |
              <a href ="'.site_url('berat/delete/?id='.$row->id)?>" onclick="return confirm('Are you sure?');">Delete</a> </td>
              </tr>
        <?php } ?>
       <tr>
         <td>Rata-rata</td>
         <td>
           <?php
             $s=0;
             for($i=0;$i<count($q);$i++){
               $s += $q[$i]->max;
             }
             echo $maxx = number_format($s/count($q),1);
           ?>
         </td>
         <td>
           <?php
             $s=0;
             for($i=0;$i<count($q);$i++){
               $s += $q[$i]->min;
             }
             echo $minn = number_format($s/count($q),1);
           ?>
         </td>
         <td><?php echo ($maxx-$minn); ?></td>
       </tr>
    </table>
  <?php } ?>


  </body>
</html>
