<?php

session_start();

$value=array();

$value['amount'] = $_POST['transamount'];
$value['type']   = $_POST['trans'];

?>
<html>
<body>
<form action="form.php" method="post">
Amount: <input type="text" name="transamount">

<input type="submit">   <br>


credit:<input type="radio" value="credit" name="trans">
debit:<input type="radio" value="debit" name= "trans">: <br />
</form>

</body>
</html>










