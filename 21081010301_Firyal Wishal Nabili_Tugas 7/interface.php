<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="background-color: pink;">
  <table align="center">
    <tr>
      <td align="center">TUGAS PEMWEB 5</td>
    </tr>
    <tr>
      <td align="center">21081010301</td>
    </tr>
    <tr>
      <td align="center">FIRYAL WISHAL NABILI</td>
    </tr>
  </table>
  
  <p>&nbsp &nbsp &nbsp &nbsp &nbsp</p>
  <h2 align="center">TABEL CUSTOMERS</h2>
  <h3 align="center" bg-color="white"><a href="insertcustomer.php">Insert Data Customer</a></h3>
  <table border="1" align="center" width="83%" >
    <tr style="background-color: deeppink;">
      <th>Customer Number</th>
      <th>Customer Name</th>
      <th>Contact Last Name</th>
      <th>Contact First Name</th>
      <th>Phone</th>
      <th>Address line 1</th>
      <th>Address line 2</th>
      <th>City</th>
      <th>State</th>
      <th>Postal Code</th>
      <th>Country</th>
      <th>Sales Rep Employee Number</th>
      <th>Credit limit</th>
    </tr>
    <tr>
      <?php
        include "koneksi.php";
        $query = mysqli_query ($koneksi, "Select * From customers");
        while ($data = mysqli_fetch_array($query)){
      ?>
      <td style="background-color: hotpink";>
        <?php echo $data['customerNumber']; ?></td>
      <td style="background-color: white;">
          <?php echo $data['customerName']; ?></td>
      <td style="background-color: white;">
          <?php echo $data['contactLastName']; ?></td>
      <td style="background-color: white;">
          <?php echo $data['contactFirstName']; ?></td>
      <td style="background-color: white;">
          <?php echo $data['phone']; ?></td>
      <td style="background-color: white;">
          <?php echo $data['addressLine1']; ?></td>
      <td style="background-color: white;">
          <?php echo $data['addressLine2']; ?></td>
      <td style="background-color: white;">
          <?php echo $data['city']; ?></td>
      <td style="background-color: white;">
          <?php echo $data['state']; ?></td>
      <td style="background-color: white;">
          <?php echo $data['postalCode']; ?></td>
      <td style="background-color: white;">
          <?php echo $data['country']; ?></td>
      <td style="background-color: white;">
          <?php echo $data['salesRepEmployeeNumber'];?></td>
      <td style="background-color: white;">
          <?php echo $data['creditLimit'];?></td>
    </tr>
    <?php
      }
    ?>
  </table>
  <h1>&nbsp &nbsp &nbsp &nbsp &nbsp</h1>
  <h2 align="center">TABEL PRODUCTS</h2>
  <h3 align="center" bg-color="white"><a href="insertproduct.php">Insert Data Product</a></h3>
  <table border="1" align="center" width="83%" >
    <tr style="background-color: deeppink;">
      <th>Product Code</th>
      <th>Product Name</th>
      <th>Product Line</th>
      <th>Product Scale</th>
      <th>Product Vendor</th>
      <th>Product Description</th>
      <th>Quantity In Stock</th>
      <th>Buy Price</th>
      <th>MSIP</th>
    </tr>
    <tr>
      <?php
        include "koneksi.php";
        $query2 = mysqli_query ($koneksi, "Select * From products");
        while ($data = mysqli_fetch_array($query2)){
      ?>
      <td style="background-color: hotpink;">
        <?php echo $data['productCode']; ?></td>
      <td style="background-color: white;">
        <?php echo $data['productName']; ?></td>
      <td style="background-color: white;">
        <?php echo $data['productLine']; ?></td>
      <td style="background-color: white;">
        <?php echo $data['productScale']; ?></td>
      <td style="background-color: white;">
        <?php echo $data['productVendor']; ?></td>
      <td style="background-color: white;">
        <?php echo $data['productDescription']; ?></td>
      <td style="background-color: white;">
        <?php echo $data['quantityInStock']; ?></td>
      <td style="background-color: white;">
        <?php echo $data['buyPrice']; ?></td>
      <td style="background-color: white;">
        <?php echo $data['MSRP']; ?></td>
    </tr>
    <?php
      }
    ?>
  </table>
</body>
</html>