<!DOCTYPE html>

          <!-- search form -->
   
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
		
<script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/js/exporting.js"></script>
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


<center>

<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: '<a href="<?php echo site_url().'/pimpinan/gt_pergi'?>">Grafik Perizinan Pergi Santri</a>'
         },
         xAxis: {
            categories: ['BULAN'],
         },
         yAxis: {
            title: {
               text: 'Jumlah'
            }
         },
              series:             
            [
            <?php 
                foreach($pergi1 as $row):                    
                ?>
                  {
                      name: '<?php echo $row->bulan; ?>',
                      data: [<?php echo $row->jumlah; ?>]
                  },
                
                  <?php endforeach; ?>
            
            ]
            
      });
   });	
</script>                           
                                   <div id='container'></div>
</center>
</div>
</div>

</div>
	</section>
	
	
