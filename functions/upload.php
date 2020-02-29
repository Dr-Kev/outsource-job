<?php
session_start();
include 'config.php';
include 'db.php';

if(isset($_POST['account'])){
  $sir = $_POST['sName'];
  $full = $_POST['fName'];
  $emal = $_POST['eName'];
  $pas = $_POST['pName'];

  $_SESSION['sir'] = $sir;
  $_SESSION['name'] = $full;
  $_SESSION['email'] = $emal;
  $_SESSION['pword'] = $pas;

  header("Location: finalise_profile.php");
    die();
}

if(isset($_POST['complete'])){
  $sir = $_SESSION['sir'];
  $ful = $_SESSION['name'];
  $eml = $_SESSION['email'];
  $pas = $_SESSION['pword'];

// $imge = file_get_contents($_FILES['imag']['tmp_name']);
// $img_nme = $_FILES['imag']['name'];
// $target = 'img_upload/' . $img_nme;

// move_uploaded_file($_FILES['imag']['tmp_name'], $target);

registry("INSERT INTO user_profile (sir_name,full_name,email) values (:sname,:fname,:mail)",
            array('sname' => $sir,
                  'fname' => $ful,
                  'mail' =>$eml), $conn);

registry("INSERT INTO user_access (email,passwords) values (:mail,:pass)",
            array('mail' => $eml,
                  'pass' => $pas), $conn);
            
header("Location: test.html");
die();
}

?> 