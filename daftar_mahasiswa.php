<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa Adzhimatinur Azzahra</title>
  </head>
  <body>
  <div class="container-fluid">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Tahun Angkatan</th>
      <th scope="col">Prodi</th>
      <th scope="col">IPK</th>
    </tr>
  </thead>

<?php
require_once "class_mahasiswa.php";
$mahasiswa1 = new Mahasiswa("0110221075", "Adzhimatinur Az-Zahra", 2021, "TI03", 3.96);
$mahasiswa2 = new Mahasiswa("0110221082", "Ammar Ayyasy", 2021, "TI03", 3.87);
$mahasiswa3 = new Mahasiswa("0110221081", "Anggi Novita Sari Harahap", 2021, "TI03", 3.96);
$mahasiswa4 = new Mahasiswa("0110221076", "Deriyamsi Ritonga", 2021, "TI03", 3.96);
$mahasiswa5 = new Mahasiswa("0110221078", "Farida Afrina", 2021, "TI03", 3.79);
$mahasiswa6 = new Mahasiswa("0110221092", "Faqih Azhar", 2021, "TI03", 3.96);
$mahasiswa7 = new Mahasiswa("0110221085", "Gilbran Khatami", 2021, "TI03", 3.79);
$mahasiswa8 = new Mahasiswa("0110221093", "Restu Abie Sucipto", 2021, "TI03", 3.79);
$mahasiswa9 = new Mahasiswa("0110221080", "Seri Ani Ritonga", 2021, "TI03", 3.96);
$mahasiswa10 = new Mahasiswa("0110221076", "Yulia Ananda Siregar", 2021, "TI03", 3.96);

echo '<tbody>
    <tr>
        <th scope="row">1</th>
        <td>'.$mahasiswa1->nama.'</td>
        <td>'.$mahasiswa1->nim.'</td>
        <td>'.$mahasiswa1->thn_angkatan.'</td>
        <td>'.$mahasiswa1->prodi.'</td>
        <td>'.$mahasiswa1->ipk.'</td>
    </tr>

    <tr>
    <th scope="row">2</th>
        <td>'.$mahasiswa2->nama.'</td>
        <td>'.$mahasiswa2->nim.'</td>
        <td>'.$mahasiswa2->thn_angkatan.'</td>
        <td>'.$mahasiswa2->prodi.'</td>
        <td>'.$mahasiswa2->ipk.'</td>
    </tr>

    <tr>
    <th scope="row">3</th>
        <td>'.$mahasiswa3->nama.'</td>
        <td>'.$mahasiswa3->nim.'</td>
        <td>'.$mahasiswa3->thn_angkatan.'</td>
        <td>'.$mahasiswa3->prodi.'</td>
        <td>'.$mahasiswa3->ipk.'</td>
    </tr>

    <tr>
    <th scope="row">4</th>
        <td>'.$mahasiswa4->nama.'</td>
        <td>'.$mahasiswa4->nim.'</td>
        <td>'.$mahasiswa4->thn_angkatan.'</td>
        <td>'.$mahasiswa4->prodi.'</td>
        <td>'.$mahasiswa4->ipk.'</td>
    </tr>

    <tr>
    <th scope="row">5</th>
        <td>'.$mahasiswa5->nama.'</td>
        <td>'.$mahasiswa5->nim.'</td>
        <td>'.$mahasiswa5->thn_angkatan.'</td>
        <td>'.$mahasiswa5->prodi.'</td>
        <td>'.$mahasiswa5->ipk.'</td>
    </tr>

    <tr>
    <th scope="row">6</th>
        <td>'.$mahasiswa6->nama.'</td>
        <td>'.$mahasiswa6->nim.'</td>
        <td>'.$mahasiswa6->thn_angkatan.'</td>
        <td>'.$mahasiswa6->prodi.'</td>
        <td>'.$mahasiswa6->ipk.'</td>
    </tr>

    <tr>
    <th scope="row">7</th>
        <td>'.$mahasiswa7->nama.'</td>
        <td>'.$mahasiswa7->nim.'</td>
        <td>'.$mahasiswa7->thn_angkatan.'</td>
        <td>'.$mahasiswa7->prodi.'</td>
        <td>'.$mahasiswa7->ipk.'</td>
    </tr>

    <tr>
    <th scope="row">8</th>
        <td>'.$mahasiswa8->nama.'</td>
        <td>'.$mahasiswa8->nim.'</td>
        <td>'.$mahasiswa8->thn_angkatan.'</td>
        <td>'.$mahasiswa8->prodi.'</td>
        <td>'.$mahasiswa8->ipk.'</td>
    </tr>

    <tr>
    <th scope="row">9</th>
        <td>'.$mahasiswa9->nama.'</td>
        <td>'.$mahasiswa9->nim.'</td>
        <td>'.$mahasiswa9->thn_angkatan.'</td>
        <td>'.$mahasiswa9->prodi.'</td>
        <td>'.$mahasiswa9->ipk.'</td>
    </tr>
  
    <tr>
    <th scope="row">10</th>
        <td>'.$mahasiswa10->nama.'</td>
        <td>'.$mahasiswa10->nim.'</td>
        <td>'.$mahasiswa10->thn_angkatan.'</td>
        <td>'.$mahasiswa10->prodi.'</td>
        <td>'.$mahasiswa10->ipk.'</td>
    </tr>
    </tbody>'
  ?>

</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>