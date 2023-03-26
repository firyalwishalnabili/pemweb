<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data Customer</title>
</head>
<body style="background-color: pink;">
  <h3 align="center">INSERT DATA CUSTOMERS</h3>
  <form action="" method="post">
    <table align="center" bgcolor="deeppink"  width="35%">
    <tr>
      <td>Customer Number</td><br>
      <td><input type="number" name="customerNumber" size="11"></td>
    </tr>
    <tr>
      <td>Customer Name</td><br>
      <td><input type="text" name="customerName" size="50"></td>
    </tr>
    <tr>
      <td>Contact Last Name</td><br>
      <td><input type="text" name="contactLastName" size="50"></td>
    </tr>
    <tr>
      <td>Contact First Name</td><br>
      <td><input type="text" name="contactFirstName" size="50"></td>
    </tr>
    <tr>
      <td>Phone</td><br>
      <td><input type="text" name="phone" size="50"></td>
    </tr>
    <tr>
      <td>Address Line 1</td><br>
      <td><input type="text" name="addressLine1" size="50"></td>
    </tr>
    <tr>
      <td>Address Line 2</td><br>
      <td><input type="text" name="addressLine2" size="50"></td>
    </tr>
    <tr>
      <td>City</td><br>
      <td><input type="text" name="city" size="50"></td>
    </tr>
    <tr>
      <td>State</td><br>
      <td><input type="text" name="state" size="50"></td>
    </tr>
    <tr>
      <td>Postal Code</td><br>
      <td><input type="text" name="postalCode" size="15"></td>
    </tr>
    <tr>
      <td>Country</td><br>
      <td><input type="text" name="country" size="50"></td>
    </tr>
    <tr>
      <td>Credit limit</td><br>
      <td><input type="number" name="creditLimit" size="100"></td>
    </tr>
  </table>
  <table align="center" bgcolor="white"  width="10%">
    <tr>
      <br><br>
      <td><input type="submit" name="save" value="Insert"></td>
      <td><input type="reset" name="reset" value="Reset form"></td>
      <td><input type="button" name="back" value="Back to main" onclick="self.history.back()"></td>
    </tr>
  </table>
  </form>
  <?php
  include "koneksi.php";
  if (isset($_POST['save'])){
    $simpan = mysqli_query($koneksi, "insert into customers set 
    customerNumber = '$_POST[customerNumber]',
    customerName = '$_POST[customerName]',
    contactLastName = '$_POST[contactLastName]',
    contactFirstName = '$_POST[contactFirstName]',
    phone = '$_POST[phone]',
    addressLine1 = '$_POST[addressLine1]',
    addressLine2 = '$_POST[addressLine2]',
    city = '$_POST[city]',
    state = '$_POST[state]',
    postalCode = '$_POST[postalCode]',
    country = '$_POST[country]',
    creditLimit = '$_POST[creditLimit]';");
    if ($simpan){
      echo "<script> alert ('Data berhasil disimpan')</script>";
      header ("refresh:0;interface.php");
    }
    else{
      echo "<script> alert ('Data tidak berhasil disimpan')</script>";
      header ("refresh:0;interface.php");
    }
  }
?>
</body>
</html>