<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="balanja.css">

<div class="container">
<h2>Selamat Belanja</h2>
<table border="1" style="float: right; margin-right: 1cm;">
    <thead>
        <tr >
            <th>Nomor</th>
            <th>Daftar</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="nomer">1</td>
            <td>TV</td>
            <td>Rp.4.200.000,-</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="nomer">2</td>
            <td>KULKAS</td>
            <td>Rp.3.100.000,-</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="nomer">3</td>
            <td>MESIN CUCI</td>
            <td>Rp.3.800.000,-</td>
        </tr>
    </tbody>
</table >
<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah_barang" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah_barang" name="jumlah_barang" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">keranjang</button>
    </div>
  </div>
</form>

<?php
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$pilih = $_POST['produk'];

$jumlah_barang = $_POST['jumlah_barang'];
if($pilih == 'TV') {
    $harga = 4200000;
} elseif($pilih == 'Kulkas') {
    $harga = 3100000;
} elseif($pilih == 'Mesin cuci') {
    $harga = 3800000;
}
$total = $jumlah_barang * $harga;

echo "Nama Customer : $nama";
echo "<br/>Produk Pilihan : $pilih";
echo "<br/>Jumlah : $jumlah_barang";
echo "<br/>Total Harga : $total";
?>
</div>