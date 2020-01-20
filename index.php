<?php
print ("<h3>Tugas 9 PHP</h3>");

echo "<b>Soal 1:</b>. ";
echo "Deret bilangan fibonacci 0 sampai 20<br><br>";
$angka_sebelumnya = 0;
$angka_sekarang = 1;

echo "<b>$angka_sebelumnya $angka_sekarang</b>";

for ($i=0; $i<20; $i++)
{
  $output = $angka_sekarang + $angka_sebelumnya;
  echo "<b> $output</b>";

  $angka_sebelumnya = $angka_sekarang;
  $angka_sekarang = $output;
}
echo "<br><br><br>";
echo "<b>Soal 2:</b>. ";
echo "Deret bilangan prima 0 sampai 200<br><br>";
for ($prima=2;$prima<=200;$prima++) {
  $cek = 0;
  for ($a = 2; $a < $prima; $a++) {
    if ($prima % $a == 0)
    {$cek = 1;}
  }
  if ($cek == 0) {
    echo "<b> $prima, </b>";

  }
}
?>
