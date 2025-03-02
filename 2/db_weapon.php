<?php
$con = new mysqli("localhost", "root", "", "db_weapon");
if (!$con) {
    die("Could not connect" . $con->connect_error);
} else {
    print("Connect is success");
    print("<br><br>");
    print("<hr>");
    
    $result = $con->query("SELECT * FROM weapons");
    while ($row = $result->fetch_object()) {
        print_r($row);
        print("<hr>");
    }
        
}

$name = $_POST['name_weapon'];
$damage = $_POST['damage_weapon'];
$rarity = $_POST['rarity_weapon'];
$type_id = $_POST['type_id_weapon'];
$weapon_id = $_POST['weapon_id'];

$sql_weapon = "INSERT INTO weapons (name, damage, rarity, type_id) VALUES ('$name', '$damage', '$rarity', '$type_id ')";
if ($con->query($sql_weapon)) {
    echo ("Weapon added successfully!");
}

$update_weapon = "UPDATE weapons SET name = '$name' , damage = '$damage' , rarity = '$rarity' , type_id = '$type_id' WHERE id = '$weapon_id'";

if (mysqli_query($con,$update_weapon)){
    echo"Weapon Update Sucssuful";
}
else {
    echo"Error Updating Weapon";
}
?>