<?php
// API запрос
$url = "https://jsonplaceholder.typicode.com/posts/1";

$response = file_get_contents($url);
$data = json_decode($response, true);

echo "Заголовок: " . $data['title'] . "\n";
echo "Текст: " . $data['body'];
?>
