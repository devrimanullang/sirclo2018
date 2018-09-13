<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>ONGKIR</title>
</head>
<body>

  <h1>Hitung Ongkos Kirim</h1>

  <form class="" action="#">
    <select id="option">
      <option value="reg" selected="selected">Reguler</option>
      <option value="exp">Express</option>
      <option value="ins">Instant</option>
    </select>
    <input type="number" id="berat" placeholder="Weight">
    <button onclick="hitung()">Submit</button>
  </form>
<p id = hasil></p>

<script type="text/javascript">

function hitung(){
  var a = document.getElementById('option');
  var pilih = a.options[a.selectedIndex].value;
  var berat = document.getElementById('berat').value;
  if(pilih=="reg"){
    document.getElementById("hasil").innerHTML = berat*9000;
  }else if(pilih=='exp'){
    document.getElementById("hasil").innerHTML = berat*9000*2;
  }else{
    document.getElementById("hasil").innerHTML = berat*9000*5;
  }
}
</script>

</body>
</html>
