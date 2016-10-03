<?php
session_start();
if ($_SESSION["Permisstion"] == "ADMIN")
{
$objConnect = mysqli_connect($_POST['ddhost'],"u823771559_gunui","lkitlogmL","u823771559_gunui");
  if ($objConnect)
  {
  
  $strSQL = "SELECT * FROM User_ WHERE Permisstion != 'ADMIN'";


  $objQuery = mysqli_query($objConnect, $strSQL);
  ?>
<table width="650" border="1">
  <tr>
    <th width="91"> <div align="center">User_ID </div></th>
    <th width="98"> <div align="center">User </div></th>
    <th width="71"> <div align="center">Time </div></th>
  <th width="50"> <div align="center">Edit </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["User_ID"];?></div></td>
    <td><?php echo $result["User"];?></td>
    <td align="right"><?php echo $result["Time"];?></td>
  <!--<td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?CustomerID=<?php echo $result["CustomerID"];?>';}">Delete</a></td>-->
  </tr>

  <?php
}
  }else
  {
    echo "Database Connect Failed.</br>";
  }

  

}else
{
  session_unset();
  session_destroy();
  header("location:Login.php");
}

?>