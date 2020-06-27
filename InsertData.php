<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet"  href="css/style4.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>
            li {
                list-style: none;
                }
        </style>
    </head>
<body>
    <div class="InsertData">
        <h1>ATN SHOP</h1>

        <form name="InsertData" action="InsertData.php" method="POST">
            <div class="insertdata">
                <input type="text" name="id" action="InsertData.php" method="POST" placeholder="ID">
               
            </div>

            <div class="insertdata">
                <input type="text" name="name" action="InsertData.php" method="POST" placeholder="Name">
                
            </div>

            <div class="insertdata">
                <input type="text" name="price" action="InsertData.php" method="POST" placeholder="Price">
                
            </div>
            
           
                <li><input type="submit" value="Submit" /></li>
          
        </form>
    </div>
<?php

if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
         "host=
ec2-50-17-90-177.compute-1.amazonaws.com
;port=5432;user=ykfihlfzgugghi;password=3b76c3670154e3ecfacf9e72b205d2500238e846d334fb47dcc475e698d10947;dbname=dbamj2mjg2grs5",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
   ));
}  

if($pdo === false){
     echo "ERROR: Could not connect Database";
}

$sql = "INSERT INTO product(id, name, price)"
        . " VALUES('$_POST[id]','$_POST[name]','$_POST[price]')";
$stmt = $pdo->prepare($sql);
//$stmt->execute();
 if (is_null($_POST[id])) {
   echo "ID must be not null";
 }
 else
 {
    if($stmt->execute() == TRUE){
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: ";
    }
 }
?>
</body>
</html>
