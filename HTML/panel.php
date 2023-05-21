<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style>


#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<nav class="navbar-dark bg-dark" style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
    <a class="navbar-brand" href="#">  &nbsp; &nbsp; BANA DAİR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="hobilerim.html"> &nbsp; &nbsp;HAKKIMDA-HOBİLERİM <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="sehrim.html">&nbsp; &nbsp;ŞEHRİM <span class="sr-only">(current)</span></a>
          </li>


          <li class="nav-item active">
            <a class="nav-link" href="miras.html">&nbsp; &nbsp;MİRAS <span class="sr-only">(current)</span></a>
          </li>

             
          <li class="nav-item active">
            <a class="nav-link" href="cv.html">&nbsp; &nbsp;CV <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="iletisim.php">&nbsp; &nbsp;İLETİŞİM <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="panel.php">&nbsp; &nbsp; İLETİŞİM VERİLERİ <span class="sr-only">(current)</span></a>
          </li>
       
          

      </ul>
     
    </div>
  </nav>
<br>
<h1>VERİLER</h1> <br>

<table id="customers">
  <tr>
    <th>İsim</th>
    <th>Soyisim</th>
    <th>Yaş</th>
    <th>Mail</th>
    <th>Adres</th>
    <th>Adres Başlığı</th>
  </tr>



  <?php

include("baglanti.php");
$sec="Select * From İletisim";
$sonuc=$baglan->query($sec);
if($sonuc-> num_rows>0){
while($cek=$sonuc->fetch_assoc())
{
echo "
<tr>
<td> ".$cek['isim']."</td>
<td>".$cek['soyisim']."</td>
<td>".$cek['yas']."</td>
<td>".$cek['mail']."</td>
<td>".$cek['adres']."</td>
<td>".$cek['adresbasligi']."</td>
</tr>
 ";
}
}
else {
  echo "veri tabanına kayıtlı veri bulunamadı";
}





?>

  
</table>

</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script>
</html>


