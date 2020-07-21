<?php require('src/app.php'); ?> <!-- prijungiamas app.php failas, tam kad nuvestu ivestus duomenis is kontaktines formos i app.php failo funkcija kuri duomenis ideda i duomenu baze. -->

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizainai</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/67d8006e14.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header-content1 yra div'as kuris savyje turi header ir content1. Tam kad is karto ant siu dvieju divu butu galima uzdeti viena ta pacia background image'a. -->
<div class="header-content1">
  
<header>
  <div class="container flex-container">
    <div class="logo"><a href="index.php"><img src="images/Pex_03-compressor.png" alt="Logo"></a></div>
      <!-- Navigacija -->
    <div class="nav">
        <ul class="nav-container flex-container">
            <li><a href="#">Apie</a></li>
            <li><a href="#">Paslaugos</a></li>
            <li><a href="#">DUK</a></li>
            <li><a href="#">Kontaktai</a></li>
            <li><form class="search" action="#">
                <input type="text" name="search" placeholder="Paieška">
                <button type="submit"><i class="fas fa-search"></i></button></form></li>
        </ul>
     </div>
      <!-- dropdown navigacija responsive ekranams -->
      <div class="responsive">
      <form class="search-responsive" action="#">
             <input type="text" name="search" placeholder="Paieška">
             <button type="submit"><i class="fas fa-search"></i></button></form>
       <div class="nav-mobile">
        <button onclick="myFunction()" class="dropbtn">MENIU</button>
        <ul id="myDropdown" class="dropdown-content">
            <li><a href="#">Apie</a></li>
            <li><a href="#">Paslaugos</a></li>
            <li><a href="#">DUK</a></li>
            <li><a href="#">Kontaktai</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>  
    
    <section class="content1">
      <div class="container flex-container2">
             <h1>Dizainai, kuriuos tavo akys įsimylės</h1>
             <div class="btn1text">
               <div class="btn1"><a href="#">Pradėkite dabar</a></div>
               <p>Lorem ipsuma</p>
             </div>
     </div>   
    </section>
</div>
    
    <div class="content2 flex-container">
      <div class="container">
          <div class="stulpelis1">
              <h2>A Fantastic Heading</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultrices ipsum vel iaculis lacinia. Suspendisse dignissim porta est eget tincidunt.</p>
          </div>
          <div class="stulpelis2">
              <h2>Good Day Blokes</h2>
              <p>Maecenas pellentesque ex velit, vitae vehicula nulla aliquet eu. Donec convallis nibh ac nisi aliquam sagittis.</p>
          </div>        
          <div class="stulpelis3">
              <h2>Aenean Malesuada</h2>
              <p>Vestibulum erat enim, dignissim non congue nec, semper quis neque. Aenean malesuada nulla vel velit facilisis.</p>
          </div>
          <div class="stulpelis4">
              <h2>Etiam Lacinia</h2>
              <p>In luctus fringilla dolor a congue. Etiam lacinia leo nec elit pellentesque, in pharetra augue congue.</p>
          </div> 
      </div>
    </div>
   
   <div class="pusrutulis"></div> <!-- div'as, skirtas i ji ideti background'o detale -->
    
    <section class="content3">
      <div class="container flex-container2">
        <div class="text">
            <h2>Pamatykit mūsų dizainus</h2>
            <p>Maecenas in dui massa. Integer vitae dolor id sem vulputate maximus quis sit amet justo. Donec eget eleifend lectus.</p>
        </div>
        <div class="btn2"><a href="#">Pradėkite šiandien</a></div>
      </div>
    </section>
       <!-- Galerija -->
		<section class="gallery">
			<div class="gallery-container flex">
				<div class="col">
					<a data-fancybox="gallery1" href="images/galerija/big_1.jpg">
						<img src="images/galerija/small_1.jpg" alt="Description">
					</a>
				</div>
				<div class="col">
					<a data-fancybox="gallery1" href="images/galerija/big_2.jpg">
						<img src="images/galerija/small_2.jpg" alt="Description">
					</a>
				</div>
				<div class="col">
					<a data-fancybox="gallery1" href="images/galerija/big_3.jpg">
						<img src="images/galerija/small_3.jpg" alt="Description">
					</a>
				</div>
				<div class="col">
					<a data-fancybox="gallery1" href="images/galerija/big_4.jpg">
						<img src="images/galerija/small_4.jpg" alt="Description">
					</a>
				</div>
				<div class="col">
					<a data-fancybox="gallery1" href="images/galerija/big_5.jpg">
						<img src="images/galerija/small_5.jpg" alt="Description">
					</a>
				</div>
				<div class="col">
					<a data-fancybox="gallery1" href="images/galerija/big_6.jpg">
						<img src="images/galerija/small_6.jpg" alt="Description">
					</a>
				</div>
			</div>
		</section>
    
    <section class="content4">
      <div class="container flex-container">
        <div><img src="images/Pex_02-compressor.jpg" alt="photo"></div>
        <div class="text">
            <h3>Profesonalus straipsnių rašymas</h3>
            <p class="text1">Nulla et vehicula mauris. Fusce tempus, metus ut aliquet venenatis.</p>
            <p class="text2">Ut rhoncus pulvinar nisi, a dignissim diam tristique et. Quisque ac lectus a erat tristique volutpat placerat eu dui. Curabitur quis tempus est. Donec eget lectus blandit, tincidunt odio id, imperdiet nunc. Maecenas ut neque orci. Nulla ultricies dui ut neque mollis, eu gravida eros dictum.Quisque ac lectus a erat tristique volutpat placerat eu dui.</p>
        </div>
      </div>
    </section>
    
    <section class="content5">
     <div class="layer">
      <div class="container flex-container2">
        <div class="text">
            <h2>Patirkite įkvėpimą šiandien</h2>
            <p class="text1">Nunc tincidunt tellus sit amet leo euismod posuere. Fusce tempus est in velit sodales suscipit.</p>
        </div>
        <div class="btn1"><a href="#">Pradėkite dabar</a></div>
            <p class="text2">ipsum ipsum ipsum ipsum</p>
        </div>
     </div>
    </section>
    
      <section class="content6">
       <div class="layer">
         <div class="container">
                <div class="blogbutton"><a href="#">Photography</a></div>
                <div class="heading"><a href="#">Vestibulum justo massa, porta at semper non, scelerisque.</a></div>
                <div class="author flex-container">
                  <a href="#"><img src="images/photoid-compressor.jpg" alt="idphoto"></a>
                  <a href="#"><p>Tomas Šalna, Web Dizaineris</p></a>
             </div>    
         </div>
       </div>
      </section>
    
    <section class="content7">
        <div class="container flex-container">
            <div class="text">
                <h3>Profesonalus nuotraukų darymas.</h3>
                <p class="text1">Commodo, velit pellentesque pulvinar ultricies, mauris orci cursus velit.</p>
                <p class="text2">Sed eu turpis sit amet erat luctus volutpat vitae sollicitudin est. Praesent placerat elementum pharetra. Integer malesuada consectetur diam, in porta purus scelerisque id. Integer suscipit nisl tortor, vel tincidunt lectus blandit nec. Praesent aliquam ullamcorper ultricies. Quisque ac lectus a erat tristique volutpat.</p>
            </div>
            <div><img src="images/Pex5_03-compressor.jpg" alt="ranka"></div>
        </div>
    </section>
    
    <section class="contact">
        <div class="container">
            <div class="contact-text flex-container2">
                <h2>Susisiekite</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
           <div class="section-content">
                <form class="contact-form flex-container2" action="index.php" method="post">      
                    <input type="text" name="vardas" placeholder="Tavo Vardas*" required />
                    <input type="email" name="email" placeholder="Tavo Email*" required />
                    <textarea name="message" rows="8" placeholder="Tavo Žinutė*" required></textarea>
                    <button class="btn-contact" type="submit" name="submit">Išsiųsti</button>
                </form> 
           </div> 
         </div>
       </section>
    <footer>
        <div class="container flex-container">
                         <!-- rodo siu metu data per php funkcija -->
            <p class="copyright">&copy<?php echo date("Y"); ?> Visos teisės saugomos.</p>
            <p class="ivirsu"><a href='#top'>Į viršų</a></p>
        </div>
    <footer>

    <script>
        /* Kai zmogus paspaudzia ant mygtuko, meniu turinys pasirodo arba pasislepia*/
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        /* Kai zmogus paspaudzia uz atidaryto meniu ribu, meniu turinys uzsidaro*/
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        };       
    </script>
        <!--prijungiami jquery funkciju failai -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jq.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    
</body>
</html>
