<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="iletisim.css">
    <style>
       
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


















    <center>

        <div class="divim">



            <!-- fORM ETİKETİ:-->

            <form action="iletisim.php" method="post"; >
                <br>
<h1 style="font-family: Georgia, 'Times New Roman', Times, serif;"> İletişim Bilgileri </h1> <br> <br>
             İsim : <input type="text" name="isim" placeholder="isim" /><br> <br>
            Soyisim : <input type="text" name="soyisim" placeholder="soyisim" /><br> <br>
             yas : <input type="text" name="yas" placeholder="yas" /><br> <br>
               Mail adersi ; <input type="email" name="mail"; placeholder="email adres" /> <br> <br>

                <!-- seçenek sunma tik koyma için checkbox kulanılıyor istediğin kadar kutucuk seçebilirsin.-->
                
                <br>
               <h6 class="basayaz">Adres:</h6>
                <textarea class="adres" name="adres" id="mesajAlani" cols="55" rows="6"></textarea> <br>
                Adres başlığı : <input class="adresbasligi" name="adresbasligi"; type="text" placeholder="başlık"  /><br> <br>


<div class="chek">
                <br><br> <h3> Hobileriniz: </h3> 
                Seyehat etmek <input type="checkbox"> &nbsp;&nbsp;
                
                Spor yapmak  <input type="checkbox">  &nbsp; &nbsp;
                Yemek yapmak<input type="checkbox"> <br>
                Müzik dinlemek <input type="checkbox"> &nbsp;&nbsp;
          
                Sosyalleşmek  <input type="checkbox">  &nbsp; &nbsp;
                Alışveriş yapmak <input type="checkbox"> <br> <br><br> 
              </div> 


              
                Cinsiyetiniz :
                <select>
                    <option value="süt">kız</option>
                    <option value="kahve">erkek</option>
                 
                </select>

<br><br> <br>br
                <p>
                    CV yükleyin: 
                    <input type="file"> <!-- dosya yükleme--> <br> </p>
            
                

                <!--  seçenek sunma tik koyma için radio kulanılıyor sadece tek bir kutucuk seçebilirsin. ama name aynı vermen gerekli-->
                <br> <br><br>
                Bu web siteden memnun kaldınız mı?
                <br>
                evet<input type="radio" name="evet">&nbsp;
            
                hayır<input type="radio" name="hayır">



                


<br><br><br><br>

               

               


                <input type="submit"> <!-- gönder-->

                <input type="reset" value="temizle"> <!-- tüm işaretlemeler ve yazılanlar silinir-->

            </form>

            <br><br><br><br><br><br><br><br>


        </div>

    </center>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
</body>

</html>

<?php

include("baglanti.php");

if(isset($_POST["isim"], $_POST["soyisim"], $_POST["yas"], $_POST["mail"], $_POST["adres"], $_POST["adresbasligi"]))
{
$isim = $_POST["isim"];
$soyisim = $_POST["soyisim"];
$yas = $_POST["yas"];
$mail = $_POST["mail"];
$adres = $_POST["adres"];
$adresbasligi = $_POST["adresbasligi"];

$ekle="INSERT INTO iletisim(isim, soyisim, yas, mail, adres, adresbasligi) VALUES ('".$isim."','".$soyisim."','".$yas."','".$mail."',
'".$adres."','".$adresbasligi."')";

if($baglan->query($ekle)===TRUE){

  echo "BAŞARILI";
}
}



?>