<?php
if(isset($_POST['submit'])) {
  include_once 'db.php';
  
    /* tikrinamas duomenu teisingumas */  
  $vardas=mysqli_real_escape_string($mysqli, $_POST['vardas']);
  $email=mysqli_real_escape_string($mysqli, $_POST['email']);
  $message=mysqli_real_escape_string($mysqli, $_POST['message']);
   
    /* issiunciamas email'as */
    if(!empty($vardas) && !empty($email) && !empty($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $from="$email";
        $to="algirdas@gmail.lt";
        $subject = "Nauja zinute";
        $autorius = 'Nuo: ' . $vardas . ',' . $email;
        $zinute = $message;
        mail($to, $subject, $autorius, $zinute, $from);
        echo "<script>alert('Dekojame. Jusu zinute gauta. Netrukus susisieksime.');</script>";
    }
}
    
} 
