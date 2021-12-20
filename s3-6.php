<?php

$sentence = $_POST['sentence'] ?? null;
$word = $_POST['word'] ?? null;

if ($word) {
$result = str_replace($word, '', $sentence);
echo 'Полученный результат: ' . $result;
}
else if ($sentence) {
$letters = 'уеыаоэяию';
$count = 0;
$ls = mb_str_split($letters);

foreach(mb_str_split($sentence) as $t) {
foreach($ls as $l) {
if ($t === $l) {
$count = $count + 1;
$ls = array_diff($ls, [$l]);
continue 2;
}
}
}

echo 'Число гласных букв: ' . $count;
}