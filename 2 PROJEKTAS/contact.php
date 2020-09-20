<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Svetaine</title>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital@1&family=Open+Sans:wght@400;700&family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/adaa5eca50.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
     <header class="contactheader">
        <div class="container flex-container">
                <div class="logo"><a href="index.html"><img src="images/ActiveBox_03-min.png" alt="logo"></a></div>
                <div class="nav">
                    <ul class="nav-container flex-container">
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Works</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Download</a></li>
                    </ul>
                </div>
            
            <div class="nav-mobile">
                   <button onclick="myFunction()" class="dropbtn">MENIU</button>
                   <ul id="myDropdown" class="dropdown-content">
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Works</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Download</a></li>
                    </ul>
            </div>
        </div>      
    </header>
        
    <section class="contact">
        <div class="container">
            <div class="contact-text flex-container">
                <h2>Susisiekite</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
           <div class="section-content">
                <form class="contact-form flex-container" action="index.php" method="post">      
                    <input type="text" name="vardas" placeholder="Tavo Vardas*" required />
                    <input type="email" name="email" placeholder="Tavo Email*" required />
                    <textarea name="message" rows="8" placeholder="Tavo Žinutė*" required></textarea>
                    <button class="btn-contact" type="submit" name="submit">Išsiųsti</button>
                </form> 
           </div> 
         </div>
    </section>
        
    <section class="footer">
        <div class="container">
        <p class="copyright">&copy<?php echo date("Y"); ?> Visos teisės saugomos.</p>
        <p class="tekstas">Made by Good designs</p>    
        </div>
    </section>
        
        
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
    
    
    <script src=""></script>
</body>
</html>