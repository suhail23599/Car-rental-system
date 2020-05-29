<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){
  $Name=$_POST['Name'];
  $location=$_POST['location'];
  $email=$_POST['email'];
  $phonenumber=$_POST['phonenumber'];
  $Licensenumber=$_POST['Licensenumber'];
  $password=$_POST['password'];

  $sql = "INSERT INTO users (Name,Location,Email,PhoneNumber,LicenseNumber,Password) VALUES(?,?,?,?,?,?)";
  $stmtinsert = $db->prepare($sql);
  $result = $stmtinsert->execute([$Name,$location,$email,$phonenumber,$Licensenumber,$password]);
  if($result){
    echo 'sucessfully saved';
  }
  else{
    echo 'errors detected';
  }
}else{
  echo 'No data';
}
