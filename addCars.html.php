<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add cars</title>
</head>
<body>
  <form action="addCars.html.php" method="post">
    Title: <input type="text" name="title">
    <br>
    Brand: <input type="text" name="brand">
    <br>
    Year of Manufacture: <input type="number" placeholder="e.g. 2010" name="yom">
    <br>
    Gearbox: <input type="text" name="gearbox" placeholder="Manual or Automatic">
    <br>
    Mileage: <input type="text" name="mileage">
    <br>
    Engine Size: <input type="text" name="engine">
    <br>
    Door Number: <input type="number" name="doors" placeholder="maximum of 4">
    <br>
    Price: <input type="number" name="price">
    <br>
    <br>
    <!-- <input type="number" name=""> -->
    <input type="submit" name="submit" value="Submit Car Deets">
  </form>
  <?php
  include('Api.php');

  if (isset($_POST['submit'])){

    $data = [
      'title' => $_POST['title'],
      'brand' => $_POST['brand'],
      'yom' => $_POST['yom'],
      'gearbox' => $_POST['gearbox'],
      'mileage' => $_POST['mileage'],
      'engine_size' => $_POST['engine'],
      'door_number' => $_POST['doors'],
      'price' => $_POST['price']
    ];

    $conn = new Api($pdo, 'whipplug', 'car_id');
    $re = $conn->insert($data);
    echo 'Data entry successful';
  }
  else{
    echo 'Data entry failure';
  }

  ?>
  
</body>
</html>