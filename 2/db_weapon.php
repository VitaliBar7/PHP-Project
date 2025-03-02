<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("INSERT INTO weapons (id, name, damage, rarity, type_id) VALUES
    (1, 'Sword of Doom', 50, 'Legendary', 1),
    (2, 'Fire Bow', 35, 'Epic', 2),
    (3, 'Shadow Dagger', 25, 'Rare', 3),
    (4, 'Lightning Staff', 40, 'Legendary', 4),
    (5, 'Frost Axe', 30, 'Epic', 5)");

$conn->query("INSERT INTO weapon_skins (id, skin_name, weapon_id) VALUES
    (1, 'Golden Blade', 1),
    (2, 'Flaming Arrows', 2),
    (3, 'Dark Essence', 3),
    (4, 'Electric Surge', 4),
    (5, 'Icy Edge', 5)");

$conn->query("INSERT INTO weapon_upgrades (id, upgrade_name, bonus_damage, bonus_speed, weapon_id) VALUES
    (1, 'Sharp Edge', 10, 1.2, 1),
    (2, 'Fire Enhancement', 8, 1.1, 2),
    (3, 'Poison Boost', 5, 1.5, 3),
    (4, 'Lightning Charge', 12, 1.3, 4),
    (5, 'Ice Enhancement', 9, 1.2, 5)");

$conn->query("INSERT INTO weapon_abilities (id, ability_name, cooldown_seconds, effect_description, weapon_id) VALUES
    (1, 'Power Slash', 5, 'Delivers a strong slash dealing AoE damage', 1),
    (2, 'Fire Rain', 7, 'Shoots multiple flaming arrows in the air', 2),
    (3, 'Shadow Step', 3, 'Teleports the user behind the enemy', 3),
    (4, 'Storm Call', 6, 'Summons a thunderstorm to damage enemies', 4),
    (5, 'Frozen Blast', 8, 'Unleashes a cold explosion slowing enemies', 5)");

$result = $conn->query("SELECT * FROM weapons");
while ($row = $result->fetch_assoc()) {
    echo "Weapon: " . $row['name'] . " - Damage: " . $row['damage'] . "<br>";
}

$result = $conn->query("SELECT * FROM weapon_abilities");
while ($row = $result->fetch_assoc()) {
    echo "Weapon: " . $row['name'] . " - Damage: " . $row['damage'] . "<br>";
}

$result = $conn->query("SELECT * FROM weapon_skins");
while ($row = $result->fetch_assoc()) {
    echo "Weapon: " . $row['name'] . " - Damage: " . $row['damage'] . "<br>";
}

$result = $conn->query("SELECT * FROM weapon_types");
while ($row = $result->fetch_assoc()) {
    echo "Weapon: " . $row['name'] . " - Damage: " . $row['damage'] . "<br>";
}

$result = $conn->query("SELECT * FROM weapon_upgrades");
while ($row = $result->fetch_assoc()) {
    echo "Weapon: " . $row['name'] . " - Damage: " . $row['damage'] . "<br>";
}

$conn->query("DELETE FROM weapon_skins WHERE id = 1");
$conn->query("DELETE FROM weapon_abilities WHERE id = 3");

$conn->query("UPDATE weapons SET damage = 55 WHERE id = 1");
$conn->query("UPDATE weapon_upgrades SET bonus_damage = 15 WHERE id = 2");

$conn->close();

/*
DELETE FROM table_name;
ALTER TABLE table_name AUTO_INCREMENT = 1;
*/
