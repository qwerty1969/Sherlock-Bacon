<?php
$dbc = mysqli_connect('localhost', 'root', 'root', 'reg');
if(!isset($_COOKIE['id_user'])) {
	if(isset($_POST['submit'])) {
		$name = mysqli_real_escape_string($dbc, trim($_POST['name']));
		$password = mysqli_real_escape_string($dbc, trim($_POST['password']));
		if(!empty($name) && !empty($password)) {
			$query = "SELECT `id_user` , `name` FROM `register` WHERE name = '$name' AND password = '$password'";
			$data = mysqli_query($dbc,$query);
			if(mysqli_num_rows($data) == 1) {
				$row = mysqli_fetch_assoc($data);
				setcookie('id_user', $row['id_user'], time() + (60*60*24*30));
				setcookie('name', $row['name'], time() + (60*60*24*30));
				$home_url = 'http://' . $_SERVER['HTTP_HOST'];
				header('Location: '. $home_url);
			}
			else {
				echo 'Извините, вы должны ввести правильные имя пользователя и пароль';
			}
		}
		else {
			echo 'Извините вы должны заполнить поля правильно';
		}
	}
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Sherlock & Becon</title>
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="slick.css">
        <link rel="stylesheet" href="slick-theme.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
            <header>
        <div class="wrapper">
            <header>
                <div class="header">
                <div class="logo">
                    ><img  src="https://images.vexels.com/media/users/3/128732/isolated/preview/e759c838faf379fa09057f04c64860a9-silueta-de-sherlock-holmes-by-vexels.png"width="100px"height="100px" alt="sherlock-logo"class="sherlock">
                </div>
                <div class="mainb">
                   <a href="#" class="style">Home</a>
             <a href="#" class="style1">About us</a>
                  <a href="#" class="style2">Contact</a>
<a href="#" class="style3">Gallery</a>
                </div>
            </div> 
            <div class="img_">  
                <img src="https://images2.alphacoders.com/518/518304.jpg" id="sh">  
                <span class="Sherlock">Sherlock & Becon</span>
            </div> 
        </div>
    </header>
        <div class="main_">
                <div class="el1">
                        <span class="comfort">Комфортне місце</br>для тебе і твоєї</br>компанії</span>
                        <h4>Приходьте до нас</h4>
                    </div>
            <div class="el2">
            <div class="single-item">
    <div><img src="https://scontent-frx5-1.xx.fbcdn.net/v/t31.0-8/27798293_557060534661318_1037692295153453591_o.jpg?_nc_cat=0&oh=05bfd3154b98f8901a3f11907529c334&oe=5BBAD8D0" class="suc" width="600px"height="400px"></div>
    <div><img src="https://scontent-frx5-1.xx.fbcdn.net/v/t31.0-8/27798293_557060534661318_1037692295153453591_o.jpg?_nc_cat=0&oh=05bfd3154b98f8901a3f11907529c334&oe=5BBAD8D0" class="suc" width="600px"height="400px"></div>
    <div><img src="https://scontent-frx5-1.xx.fbcdn.net/v/t31.0-8/27798293_557060534661318_1037692295153453591_o.jpg?_nc_cat=0&oh=05bfd3154b98f8901a3f11907529c334&oe=5BBAD8D0" class="suc" width="600px"height="400px"></div>
  </div>
                    </div>
                    </div>
                </div>
                <div class="main_1">
                        <div class="contact-container">
                                <div class="contact-text">
                                    <h2 class="box">Contacts</h2>
                                    <p class="box">Hire me</p>
                                </div>
                                <div class="contact-inf">
                                    <h1 id="con">Location</h1>
                                    <p class="uk">Ukraine, Ternopil</p>
                                </div>
                                <div class="contact-inf">
                                    <h1 id="con1">Phone</h1>
                                    <p class="uk1">+380966777008</p>
                                </div>
                                <div class="contact-inf">
                                    <h1 id="con2">Street</h1>
                                    <p class="uk2">Yuliush Slovatskiy,</p>
                                </div>
                            </div>
                </div>
                </div>
                <div class="main_2">
                        <div class="exp-container">

        <div class="exp-text">
                <h2>Відчуття</h2>
                <span>Бетмен одобрює</span>
</div>

    <div class="main_0">
        <div class="exp-card div1 modal1">
            <div class="exp-texts">
          <h2></h2>
                <div><i class="fas fa-users exp-icon"></i></div>
               
            </div>
        </div>
        <div class="exp-card div1 modal2">
            <div class="exp-texts">  
                    <h2></h2>
                    <div><i class="fas fa-wine-glass exp-icon"></i></div>
            </div>
        </div>
        <div class="exp-card div1 modal3">
            <div class="exp-texts">
                    <h2></h2>
                    <div><i class="fas fa-chess exp-icon"></i></div>
            </div>
        </div>
        <div id="hide"><p class="close_">Close</p></div>
    </div>
                        </div>
                </div>
                <div class="modal">
                        <span class="close">Закрити</span>
                        <span class="friend">Дружній сервіс,який допоможе в любій ситуації.Наші кваліфіковані спецеалісти зроблять все можливе,що б ви відчували себе в комфорті і були задоволенні відпочинком.</span>
                  </div>
                  <div class="modal_1">
                        <span class="close">Закрити</span>
                        <span class="friend_2">Ви можете скуштувати канонічні англійські страви та маєте великий вибір напої,ми вам допоможемо,якщо у вас виникнуть певні питання</span>
                  </div>
                  <div class="modal_2">
                        <span class="close">Закрити</span>
                        <span class="friend_3">Завжди у нас ви можете переглянути матч улюбленої команди чи зіграти в шахмати зі своїми друзями</span>
                  </div>
                  <div class="backgr"></div>
                  <div class="map">
                      <div class="el_map">
                        <span>Ви завжди можете нас знайти</br>Ми поруч,в любу годину,ми будем раді</br></span>
                        <h6>Приходьте до нас</h6>
                    </div>
                    <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2588.2784958483203!2d25.592102215699178!3d49.554768179361815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4730314b39785bf3%3A0x2fea1e2bb8e8e266!2z0KjQtdGA0LvQvtC6ICYg0JHQtdC60L7QvQ!5e0!3m2!1suk!2sua!4v1531226199192" width="400" height="400" border="2"  style="border:1px solid green" allowfullscreen></iframe>

                    </div>
                  </div>
                  <footer class="footer">
                        <div class="footer-logo">Sherlock & Becon</div>
                        <div class="footer-text">
                            <span>Sherlock & Becon</span>
                            <span>2018-2019</span>
                            <span>No Copyright</span>
                            <span>+380502814291</span>
                            <span>+380666714862</span>
                        </div>
                    </footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="slick.min.js"></script>
        <script src="main.js" ></script>
    </body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="style/style.css" rel="stylesheet">
</head>
<body>
<?php
	if(empty($_COOKIE['name'])) {
?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label for="name">Логин:</label>
	<input type="text" name="name">
	<label for="password">Пароль:</label>
	<input type="password" name="password">
	<button type="submit" name="submit">Вход</button>
	<a href="../register.php">Регистрация</a>
	</form>
<?php
}
else {
	?>
	<!DOCTYPE HTML>
	<p><a href="end.php">Выйти(<?php echo $_COOKIE['name']; ?>)</a></p>
<?php	
}
?>
</body>

</html>





         <main class="abc">
             <div class="main-text">
                    <span class="comfort">Комфортне місце</br>для тебе і твоєї</br>компанії</span>
                        <h4>Приходьте до нас</h4>
             </div>
<div class="main-slider">
<div class="slider">
        <div class="photo"></div>
        <div class="photo1"></div>
        <div class="photo2"></div>
      </div>
                                </div>
         </main>
         <main class="abcd">
                <div class="contact-container">
                        <div class="contact-text">
                            <h2 class="box">Contacts</h2>
                            <p class="box">Hire me</p>
                        </div>
                        <div class="contact-inf">
                            <h1 id="con">Location</h1>
                            <p class="uk">Ukraine, Ternopil</p>
                        </div>
                        <div class="contact-inf">
                            <h1 id="con1">Phone</h1>
                            <p class="uk1">+380966777008</p>
                        </div>
                        <div class="contact-inf">
                            <h1 id="con2">Street</h1>
                            <p class="uk2">Yuliush Slovatskiy,</p>
                        </div>
                    </div>
        </div>
         </main>