<?php
if(isset($_POST['submit'])) {
  include_once 'db.php';
  /*tikrinama ar ivedami leidziami duomenu 'charakters', t.y leidziamios raides, skaiciai ir pan.*/  
  $vardas=mysqli_real_escape_string($mysqli, $_POST['vardas']);
  $email=mysqli_real_escape_string($mysqli, $_POST['email']);
  $message=mysqli_real_escape_string($mysqli, $_POST['message']);
   /*jeigu laukeliai uzpildyti issiunciamas email'as*/
    if(!empty($vardas) && !empty($email) && !empty($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {  /*tikrinama ar email tinkamo formato*/
        $from="$email";
        $to="algirdas@vilniuscodingschool.lt";
        $subject = "Nauja zinute";
        $autorius = 'Nuo: ' . $vardas . ',' . $email;
        $zinute = $message;
    //  mail($to, $subject, $autorius, $zinute, $from); /*iskomentuojam nes esam localhost'e */
        echo "<script>alert('Dekojame. Jusu zinute gauta. Netrukus susisieksime.');</script>";
    }
}
    
} 
