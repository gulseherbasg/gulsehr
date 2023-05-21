<?php
ob_start();
 
$user = 'g221210081@sakarya.edu.tr';
$pass = 'g221210081';

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == $user && $password == $pass) {
       // header('Location:../htmlsayf/hakkimda.html');
        echo "<script>
		alert('HOŞGELDİNİZ');
		window.location.href='hakkimda.html';
	</script>";

        exit;
    } else {
        echo "<script>
		alert('HATALI GİRİŞ');
		window.location.href='index.php';
	</script>";
    }
}



?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GİRİŞ YAPINIZ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/csssayf/stylelogin.css">
    <link rel="stylesheet" type="text/css" href="/csssayf/style.css">



    <style>

* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    
    
}


header {
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    padding: 1rem;
   
    
}

body{
   
}



.fab {
    padding: 8px;
    font-size: 30px;
    width: 32px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
}

.fa-linkedin {
    background: #007bb5;
    color: white;
}

.fa-instagram {
    background: #125688;
    color: white;
}
    
    @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500');
body{
    margin:0;
    padding:0;
  

    background: url(resimler/fo10.jpeg);


    justify-content: center;
    align-items:center;
    height: 100vh;
    font-family: 'Poppins',sans-serif;
   
}

.giris{
    text-align:center;
    width:350px;
    box-sizing: border-box;
    padding:40px;
    background: #fff;
}

.giris h2{
    margin:0 0 20px;
    padding:0;
    font-size:30px;
    text-transform: uppercase;
}

.giris .pc{
    position:relative;
    width:100%;
    margin-bottom: 25px;
}

.giris .pc input {
    height: 50px;
    width:100%;
    padding: 0 20px;
    box-sizing: border-box;
    font-size:18px;
    outline: none;
    border:1px solid #000;
}

.giris .pc span{
    position:absolute;
    top:12px;
    left: 20px;
    padding: 0;
    transition: 0.5s;
    pointer-events: none;
    background: #fff;
    text-transform: uppercase;
}

        .giris .pc input:focus ~ span,
        .giris .pc input:valid ~ span{
            top:-12px;
            left:12px;
            font-size: 12px;
            padding:2px 4px;
            border:1px solid #000;
            background: #335333;
        }

        .giris .pc input[type="submit"]
        {
    background: #335333;
    border:none;
    box-shadow: none;
    text-transform: uppercase;
    cursor:pointer;
    font-weight: 600;
        }

    .giris .pc input[type="submit"]:hover {
        background: darkgreen;
    }

    .giris a{
        color:#335333;;
        text-decoration: none;
        display: block;
        text-align: left;
        color:#335333;;
    }

    .giris a span{
        color :#335333;;
        font-weight: 600;
    }</style>
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
        <br><br><br><br><br>
        <div class="giris">
            <h2>GİRİŞ YAP</h2>
            <form method="POST" action="">
                <div class="pc">
                    <input type="email" required="" name="username">
                    <span>Mail adresi</span>
                </div>
                <div class="pc">
                    <input type="password" required="" name="password">
                    <span>Şifre</span>
                </div>
                <div class="pc">
                    <input type="submit" value="GÖNDER">
                </div>
            </form>
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