<?php

$product = [];
$product['id'] = $_POST['id'];
$product['name'] = $_POST['name'];
$product['price'] = $_POST['price'];
echo $product['price'];
$product['disc'] = $_POST['disc'];
if ($product['disc'] == "" || $product['disc'] == null) {
    $product['disc'] == 0;
} else {
    $product['disc'] = $product['disc'];
};
$product['image'] = 'https://fastly.picsum.photos/id/902/350/350.jpg?hmac=VGy50trdETKDp9Rtt5brwMQ7JYG7S3kZHCvy5slG1Io';
$product['otherImage'] = 'https://fastly.picsum.photos/id/626/350/350.jpg?hmac=LnDvOPY_RWw3EbQJEIZrg1ZBUdG2UhwhuuzL5oGVr0k';

// Menampilkan hasil
echo 'ID: ' . htmlspecialchars($product['id']) . '<br>';
echo 'Name: ' . htmlspecialchars($product['name']) . '<br>';
echo 'Price: ' . htmlspecialchars($product['price']) . '<br>';
echo 'Discount: ' . htmlspecialchars($product['disc']) . '<br>';

?>
