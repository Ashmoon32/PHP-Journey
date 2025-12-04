<?php
// Include your database classes
include("../classes/Libs/Database/MySQL.php");
include("../classes/Libs/Database/UsersTable.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

try {
    $mysql = new MySQL();
    $table = new UsersTable($mysql);

    echo "Database connection opened.\n<br>";

    // Manual fake data - Myanmar style names
    $fakeNames = [
        'Aung Aung', 'Ma Ma', 'Kyaw Kyaw', 'Su Su', 'Zaw Zaw',
        'Hla Hla', 'Min Min', 'Nu Nu', 'Myo Myo', 'Thida'
    ];
    
    $fakeStreets = [
        'Bahan Road', 'Sanchaung Street', 'Hledan Road', 'Insein Road', 'Tamwe Street',
        'Yankin Road', 'Thingangyun Street', 'Mingalardon Road', 'South Okkalapa Street', 'North Dagon Road'
    ];
    
    $cities = ['Yangon', 'Mandalay', 'Naypyidaw', 'Bago', 'Mawlamyine'];
    
    $createdCount = 0;
    
    for ($i = 0; $i < 10; $i++) {
        $name = $fakeNames[$i];
        $email = strtolower(str_replace(' ', '', $name)) . $i . '@gmail.com'; // Added $i to make unique
        
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => '09-' . rand(10000000, 99999999), // Myanmar phone format
            'address' => 'No. ' . rand(1, 999) . ', ' . $fakeStreets[$i] . ', ' . $cities[array_rand($cities)],
            'password' => md5('password'),
            'role_id' => $i < 5 ? rand(1, 3) : 1
        ];
        
        $result = $table->insert($data);
        if ($result) {
            $createdCount++;
            echo "Created user: " . $name . " (" . $email . ")<br>\n";
        } else {
            echo "Failed to create user: " . $name . "<br>\n";
        }
    }
    
    echo "Done! Created $createdCount users.<br>\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>\n";
}