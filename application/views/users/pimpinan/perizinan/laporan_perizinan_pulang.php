
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Selamat Datang,
            <small><b><?php echo $this->session->userdata('nama_lengkap');?></b></small>
          </h1>
        </section>
        
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
		  <div class="row">
		<div class="col-xs-12">
			<div class="box">

<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
    $('#example2').dataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": false,
      "bSort": true,
      "bInfo": true,
      "bAutoWidth": false
    });
  });
</script>

      <center><h3  class="box-title">---Data Perizinan Pulang---</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
	<div class="box-header">
				
				<form method="POST" action="<?php echo site_url()?>/pimpinan/laporan_perizinan_pulang">
				<table>
				<tr>
				<td><b>Pilih Bulan :&nbsp&nbsp<b>
				</td>
				<td colspan=3>
				<select name="bln">
									<option value="">--Pilih--</option>
									<?php
									$bln=$this->db->query("select distinct date_format(tanggal_pergi, '%m') as bulan, date_format(tanggal_pergi, '%M') as nama_bulan from santri s join perizinan p on(p.nis=s.nis) where cek_kedatangan is not null and jenis_izin='pulang'")->result();
									foreach($bln as $data) { 
										if($_POST){
											$bln = $_POST['bln'];
											if($bln==$data->bulan){
												?><option value="<?php echo $data->bulan?>" selected><?php echo $data->nama_bulan ?></option> <?php
											}else{
												?><option value="<?php echo $data->bulan?>"><?php echo $data->nama_bulan ?></option> <?php
											}
										}else{
											?><option value="<?php echo $data->bulan?>"><?php echo $data->nama_bulan ?></option> <?php
										}
									?>
									<?php } ?>
								</select></td></tr>
								<tr>
							<td>&nbsp&nbsp</td>
							
								</tr>
				<tr>
				<td><b>Pilih Tahun :&nbsp&nbsp<b>
				</td>
				<td colspan=3>
				<select name="thn">
									<option value="">--Pilih--</option>
									<?php
									$thn=$this->db->query("select distinct date_format(tanggal_pergi, '%Y') as tahun from santri s join perizinan p on(p.nis=s.nis) where  cek_kedatangan is not null and jenis_izin='pulang'")->result();
									foreach($thn as $data) { 
										if($_POST){
											$thn = $_POST['thn'];
											if($thn==$data->tahun){
												?><option value="<?php echo $data->tahun?>" selected><?php echo $data->tahun ?></option> <?php
											}else{
												?><option value="<?php echo $data->tahun?>"><?php echo $data->tahun ?></option><?php
											}
										}else{
												?><option value="<?php echo $data->tahun?>"><?php echo $data->tahun ?></option> <?php
										}?>
									 
									<?php } ?>
								</select>
				</td><td>&nbsp&nbsp</td>
									<td><input type="submit" name="search" value="Tampilkan"/></td></tr></table></form></div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><center>NO</center></th>
            <th><center>FOTO</center></th>
            <th><center>NIS</center></th>
            <th><center>ID IZIN</center></th>
            <th><center>NAMA LENGKAP</center></th>
            <th><center>WAKTU PERGI</center></th>
            <th><center>WAKTU DATANG</center></th>
            <th><center>KEPERLUAN</center></th>
            <th><center>CEK KEDATANGAN</center></th>
          </tr>
        </thead>
        <tbody>
		<?php $nourut=0;
		foreach ($pulang as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $nourut ?></td>
	<td><?php echo $data->photo!=''?'<img src="'.base_url().'/upload/foto_profil/'.$data->photo.'" width="100" height="100">':'belum ada foto'?></td>
	<td><?php echo $data->nis;?></td>
	<td><?php echo $data->id_izin;?></td>
	<td><?php echo $data->nama_lengkap;?></td>
	<td><?php echo date("d-M-Y",strtotime($data->tanggal_pergi))?> ( <?php echo $data->jam_pergi?> )</td>
	<td><?php echo date("d-M-Y",strtotime($data->tanggal_datang))?> ( <?php echo $data->jam_datang?> )</td>
		<td><?php echo $data->keperluan;?></td>
		<td><?php echo $data->cek_kedatangan;?></td>
		
	</tr> <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		