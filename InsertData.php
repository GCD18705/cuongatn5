<!DOCTYPE html>
<html>
    <link rel ="stylesheet" href="css/style2.css">
    <head>
        <title>ATN STORE</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>
            li {
                list-style: none;
                }
        </style>
    </head>
<body>
        <h1>INSERT DATA TO DATABASE</h1>
        <h2>Enter data into table</h2>
<ul>
    <form name="InsertData" action="InsertData.php" method="POST" >
        <li>ID:</li>
        <li><input type="text" name="ID" /></li>
        <li>Name</li>
        <li><input type="text" name="Name" /></li>
        <li>Price</li>
        <li><input type="text" name="Price" /></li>
        <li><input type="submit" value="Submit" /></li>
    </form>
</ul>

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

//Khởi tạo Prepared Statement
//$stmt = $pdo->prepare('INSERT INTO student (stuid, fname, email, classname) values (:id, :name, :email, :class)');

//$stmt->bindParam(':id','SV03');
//$stmt->bindParam(':name','Ho Hong Linh');
//$stmt->bindParam(':email', 'Linhhh@fpt.edu.vn');
//$stmt->bindParam(':class', 'GCD018');
//$stmt->execute();
//$sql = "INSERT INTO student(stuid, fname, email, classname) VALUES('SV02', 'Hong Thanh','thanhh@fpt.edu.vn','GCD018')";
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
