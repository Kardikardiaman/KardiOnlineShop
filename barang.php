<?php 
require_once("db.php");
$sql = $conn->prepare("SELECT * FROM barang WHERE id=?");
	$sql->bind_param("i",$_GET["id"]);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {		
		$row = $result->fetch_assoc();
	}
	$conn->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
<meta property="fb:app_id" content="1722304247789264" />
<meta property="og:url"                content="http://sambal.ga/barang.php?id=<?php echo $row["id"]?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $row["nama"]?>" />
<meta property="og:description"        content="<?php echo $row["keterangan"]?>" />
<meta property="og:image"              content="http://sambal.ga/gambar/<?php echo $row["gambar"]?>" />
  <meta charset="UTF-8">
  <title>Kardi Online Shop</title>
</head>

<body>

		
	<article>
		<p>Pakaian adalah bahan tekstil dan serat yang digunakan sebagai penutup tubuh. Pakaian adalah kebutuhan pokok manusia selain makanan dan tempat berteduh/tempat tinggal (rumah). Manusia membutuhkan pakaian untuk melindungi dan menutup dirinya. Namun seiring dengan perkembangan kehidupan manusia, pakaian juga digunakan sebagai simbol status, jabatan, ataupun kedudukan seseorang yang memakainya. Perkembangan dan jenis-jenis pakaian tergantung pada adat-istiadat, kebiasaan, dan budaya yang memiliki ciri khas masing-masing. Pakaian juga meningkatkan keamanan selama kegiatan berbahaya seperti hiking dan memasak, dengan memberikan penghalang antara kulit dan lingkungan. Pakaian juga memberikan penghalang higienis, menjaga toksin dari badan dan membatasi penularan kuman.</p>
		<p>Salah satu tujuan utama dari pakaian adalah untuk menjaga pemakainya merasa nyaman. Dalam iklim panas busana menyediakan perlindungan dari terbakar sinar matahari atau berbagai dampak lainnya, sedangkan di iklim dingin sifat insulasi termal umumnya lebih penting.

Pakaian melindungi bagian tubuh yang tidak terlihat. Pakaian bertindak sebagai perlindungan dari unsur-unsur yang merusak, termasuk hujan, salju dan angin atau kondisi cuaca lainnya, serta dari matahari. Pakaian juga mengurangi tingkat risiko selama kegiatan, seperti bekerja atau olahraga. Pakaian kadang-kadang dipakai sebagai perlindungan dari bahaya lingkungan tertentu, seperti serangga, bahan kimia berbahaya, senjata, dan kontak dengan zat abrasif. Sebaliknya, pakaian dapat melindungi lingkungan dari pemakai pakaian, seperti memakai masker.</p>
	</article>
  </body>
</html>
