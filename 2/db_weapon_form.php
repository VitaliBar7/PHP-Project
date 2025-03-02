<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_weapon";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['name']) && isset($_POST['damage']) && isset($_POST['rarity']) && isset($_POST['type_id'])) {
    $name = $_POST['name'];
    $damage = $_POST['damage'];
    $rarity = $_POST['rarity'];
    $type_id = $_POST['type_id'];

    $sql = "INSERT INTO weapons (name, damage, rarity, type_id) VALUES ('$name', '$damage', '$rarity', '$type_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New weapon inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['skin_name']) && isset($_POST['weapon_id'])) {
    $skin_name = $_POST['skin_name'];
    $weapon_id = $_POST['weapon_id'];

    $sql = "INSERT INTO weapon_skins (skin_name, weapon_id) VALUES ('$skin_name', '$weapon_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New skin inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['upgrade_name']) && isset($_POST['bonus_damage']) && isset($_POST['bonus_speed']) && isset($_POST['weapon_id'])) {
    $upgrade_name = $_POST['upgrade_name'];
    $bonus_damage = $_POST['bonus_damage'];
    $bonus_speed = $_POST['bonus_speed'];
    $weapon_id = $_POST['weapon_id'];

    $sql = "INSERT INTO weapon_upgrades (upgrade_name, bonus_damage, bonus_speed, weapon_id) VALUES ('$upgrade_name', '$bonus_damage', '$bonus_speed', '$weapon_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New upgrade inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if (isset($_POST['ability_name']) && isset($_POST['cooldown_seconds']) && isset($_POST['effect_description']) && isset($_POST['weapon_id'])) {
        $ability_name = $_POST['ability_name'];
        $cooldown_seconds = $_POST['cooldown_seconds'];
        $effect_description = $_POST['effect_description'];
        $weapon_id = $_POST['weapon_id'];

        $sql = "INSERT INTO weapon_abilities (ability_name, cooldown_seconds, effect_description, weapon_id) VALUES ('$ability_name', '$cooldown_seconds', '$effect_description', '$weapon_id')";

        if ($conn->query($sql) === TRUE) {
            echo "New ability inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
