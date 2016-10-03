<?php

  
session_start();
  $objConnect = mysqli_connect($_POST['ddhost'],"u823771559_gunui",$_POST['pwd'],"u823771559_gunui");
  if ($objConnect)
  {
    echo "Database Connected.</br>";
  }
  else
  {
    echo "Database Connect Failed.</br>";
  }

  $_user = mysqli_real_escape_string($objConnect,$_POST['usr']);
  $_Pass = mysqli_real_escape_string($objConnect,$_POST['pwd']);

  $strSQL = "SELECT * FROM User_ WHERE User LIKE '".$_POST['usr']."'and Password LIKE '".$_POST['pwd']."'";


  $objQuery = mysqli_query($objConnect, $strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_BOTH);

  if(!$objResult)
  {
    echo "Username and Password Incorrect!";
  }
  else
  {
    $_SESSION["user_ID"] = $objResult["User_ID"];
    $_SESSION["Permisstion"] = $objResult["Permisstion"];

    session_write_close();

    if($objResult["Permisstion"] == "ADMIN")
    {
      header("location:Admin_page.php");
    }
    else
    {
      echo "Permisstion Denied!";
    }
  }
  mysqli_close($objConnect);
?>