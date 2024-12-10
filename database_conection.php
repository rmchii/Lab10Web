<?php
include_once 'database.php';

$db = new Database();

// Data yang akan dimasukkan
$data = [
    ['nama' => 'suci', 'email' => 'ciucii@gmail.com'],
];

// Loop untuk memasukkan data
foreach ($data as $user) {
    $db->insert('users', $user);
}

echo "Data berhasil dimasukkan ke tabel users.";
