<html>
<head>
<title>
</title>
</head>
<body>
<h3><center><a style="color:black"href="javascript:window.print()"> LAPORAN PELANGGARAN SANTRI</a></center></h3>
<table>
<tr>
<br>
<td><h4>Periode: <?php echo $bln ?>-<?php echo $thn ?></h4></td>
</tr>
</table>
<table BORDER="1">  
        <thead>
          <tr>
            <th><center>NO</center></th>
            <th><center>FOTO</center></th>
            <th><center>NIS</center></th>
            <th><center>NAMA LENGKAP</center></th>
            <th><center>WAKTU PELANGGARAN</center></th>
            <th><center>JENIS PELANGGARAN</center></th>
            <th><center>NAMA PELANGGARAN</center></th>
            <th><center>HUKUMAN</center></th>
          </tr>
        </thead>
        <tbody>
		<?php $nourut=0;
		foreach ($cetak as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $nourut ?></td>
	<td><?php echo $data->photo!=''?'<img src="'.base_url().'/upload/foto_profil/'.$data->photo.'" width="100" height="100">':'belum ada foto'?></td>
	<td><?php echo $data->nis;?></td>
	<td><?php echo $data->nama_lengkap;?></td>
	<td><?php echo date("d-M-Y",strtotime($data->tanggal_pelanggaran))?>( <?php echo $data->jam_pelanggaran?>)</td>
		<td><?php echo $data->jenis_pelanggaran;?></td>
		<td><?php echo $data->nama_pelanggaran;?></td>
			<td><?php echo $data->hukuman;?></td>
	</tr> <?php } ?>
		</tbody>
      </table>
	  </body>
	  </html>