<?php

$data = [
          [1, 1, 3, 1],
          [3, 7, 6, 2],
          [5, 8, 3, 4],
          [1, 2, 1, 1],
          [9, 10, 8, 5],
          [4, 4, 4, 9],

];

echo 'Perbandingan Print Tanpa Menggunakan Tag &lt pre &gt', "</br></br>";
print_r($data);

echo '</br></br>';
echo 'Print Dengan Menggunakan Tag &lt pre &gt';
echo '<pre>';
print_r($data);
echo '</pre>';
