<?php
    //mulai session
    session_start();
    //cek status sudah login
    if($_SESSION['status']!="login")
    {
        header("location:../index.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TASK MANAGEMENT | SMK Negeri 1 Cimahi</title>
        <link rel="stylesheet" href="index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
     
        <?php
       
            if(isset($_GET['pesan']))
            {
                if($_GET['pesan']=='gagal')
                {
                    echo '<script>alert("PASSWORD SALAH")</script>';
                }
                else
                if($_GET['pesan']=='logout')
                {
                    echo "Anda sudah logout";
                }
                if($_GET['pesan']=='belum_login')
                {
                    echo "Anda harus login dahulu untuk mengakses halaman admin";
                }
            }
        ?>
       <div class="container">
	<div class="screen">
        
		<div class="screen__content">
        <h2 id="judul"><center><b>TASK MANAGEMENT</center></h2>
        <h2><center>RENALDI'S TEAM</center></h2></b>
        <form class="login" method="post" action="login_aksi.php" name="formlogin">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
                    <td>Username</td>
					<input type="text" name="nama" class="login__input" placeholder="Masukan username">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<tr>
				<td>Password</td>
				<td><input type="password"class="login__input" name="katakunci" placeholder="Masukan password"></td>
			</tr>
				</div>
				<button class="button login__submit" class="button login__submit" type="submit" name="tombollogin">
					<span class="button__text" >Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
    </body>
    <script src="index.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</html>