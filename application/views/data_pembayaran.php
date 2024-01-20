


<div class="page-container2 ml-2">
<div class="card">
  <div class="card-header">
    Data Pembayaran
  </div>
</div> 

<table class="table table-bordered 700px">
		<tr>
		<th>No</th>
		<th>Bulan</th>
		<th>Tahun</th>
		<th>Jumlah Meter</th>
		<th>Jumlah Pembayaran</th>
		<th>Status Pembayaran</th>
		</tr>
		<?php 
		$no=1;
		foreach($pemakaian as $pmk) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php if ($pmk->bulan =='012020')  { 
				 echo "Januari"; 
				}elseif($pmk->bulan =='022020') {
				 	echo "Februari";
				 	}elseif($pmk->bulan=='032020'){
				 	echo "Maret";
				 	}elseif($pmk->bulan=='042020'){
				 	echo "April";
				 	}elseif($pmk->bulan=='052020'){
				 	echo "Mei";
				 }elseif($pmk->bulan=='062020'){
				 	echo "Juni";
				 }elseif($pmk->bulan =='072020'){
				 	echo "Juli";	
         }elseif($pmk->bulan =='082020'){
				 	echo "Agustus";
				 	}elseif($pmk->bulan =='092020'){
				 	echo "September";
				 	}elseif($pmk->bulan =='102020'){
				 	echo "Oktober";
				 	}elseif($pmk->bulan =='112020'){
				 	echo "November";
					}elseif($pmk->bulan =='122020'){
				 	echo "Desember";

				 	}elseif($pmk->bulan =='012021') {
				 	echo "Januari";
				 	}elseif($pmk->bulan =='022021') {
				 	echo "Februari";
				 	}elseif($pmk->bulan=='032021'){
				 	echo "Maret";
				 	}elseif($pmk->bulan=='042021'){
				 	echo "April";
				 	}elseif($pmk->bulan=='052021'){
				 	echo "Mei";
				 }elseif($pmk->bulan=='062021'){
				 	echo "Juni";
				 }elseif($pmk->bulan =='072021'){
				 	echo "Juli";	
         }elseif($pmk->bulan =='082021'){
				 	echo "Agustus";
				 	}elseif($pmk->bulan =='092021'){
				 	echo "September";
				 	}elseif($pmk->bulan =='102021'){
				 	echo "Oktober";
				 	}elseif($pmk->bulan =='112021'){
				 	echo "November";
					}elseif($pmk->bulan =='122021'){
				 	echo "Desember";

				 		}elseif($pmk->bulan =='012022') {
				 	echo "Januari";
				 	}elseif($pmk->bulan =='022022') {
				 	echo "Februari";
				 	}elseif($pmk->bulan=='032022'){
				 	echo "Maret";
				 	}elseif($pmk->bulan=='042022'){
				 	echo "April";
				 	}elseif($pmk->bulan=='052022'){
				 	echo "Mei";
				 }elseif($pmk->bulan=='062022'){
				 	echo "Juni";
				 }elseif($pmk->bulan =='072022'){
				 	echo "Juli";	
         }elseif($pmk->bulan =='082022'){
				 	echo "Agustus";
				 	}elseif($pmk->bulan =='092022'){
				 	echo "September";
				 	}elseif($pmk->bulan =='102022'){
				 	echo "Oktober";
				 	}elseif($pmk->bulan =='112022'){
				 	echo "November";
					}elseif($pmk->bulan =='122022'){
				 	echo "Desember";

				 		}elseif($pmk->bulan =='012023') {
				 	echo "Januari";
				 	}elseif($pmk->bulan =='022023') {
				 	echo "Februari";
				 	}elseif($pmk->bulan=='032023'){
				 	echo "Maret";
				 	}elseif($pmk->bulan=='042023'){
				 	echo "April";
				 	}elseif($pmk->bulan=='052023'){
				 	echo "Mei";
				 }elseif($pmk->bulan=='062023'){
				 	echo "Juni";
				 }elseif($pmk->bulan =='072023'){
				 	echo "Juli";	
         }elseif($pmk->bulan =='082023'){
				 	echo "Agustus";
				 	}elseif($pmk->bulan =='092023'){
				 	echo "September";
				 	}elseif($pmk->bulan =='102023'){
				 	echo "Oktober";
				 	}elseif($pmk->bulan =='112023'){
				 	echo "November";
					}elseif($pmk->bulan =='122023'){
				 	echo "Desember";

				 		}elseif($pmk->bulan =='012024') {
				 	echo "Januari";
				 	}elseif($pmk->bulan =='022024') {
				 	echo "Februari";
				 	}elseif($pmk->bulan=='032024'){
				 	echo "Maret";
				 	}elseif($pmk->bulan=='042024'){
				 	echo "April";
				 	}elseif($pmk->bulan=='052024'){
				 	echo "Mei";
				 }elseif($pmk->bulan=='062024'){
				 	echo "Juni";
				 }elseif($pmk->bulan =='072024'){
				 	echo "Juli";	
         }elseif($pmk->bulan =='082024'){
				 	echo "Agustus";
				 	}elseif($pmk->bulan =='092024'){
				 	echo "September";
				 	}elseif($pmk->bulan =='102024'){
				 	echo "Oktober";
				 	}elseif($pmk->bulan =='112024'){
				 	echo "November";
					}elseif($pmk->bulan =='122024'){
				 	echo "Desember";

				 		}elseif($pmk->bulan =='012025') {
				 	echo "Januari";
				 	}elseif($pmk->bulan =='022025') {
				 	echo "Februari";
				 	}elseif($pmk->bulan=='032025'){
				 	echo "Maret";
				 	}elseif($pmk->bulan=='042025'){
				 	echo "April";
				 	}elseif($pmk->bulan=='052025'){
				 	echo "Mei";
				 }elseif($pmk->bulan=='062025'){
				 	echo "Juni";
				 }elseif($pmk->bulan =='072025'){
				 	echo "Juli";	
         }elseif($pmk->bulan =='082025'){
				 	echo "Agustus";
				 	}elseif($pmk->bulan =='092025'){
				 	echo "September";
				 	}elseif($pmk->bulan =='102025'){
				 	echo "Oktober";
				 	}elseif($pmk->bulan =='112025'){
				 	echo "November";
					}elseif($pmk->bulan =='122025'){
				 	echo "Desember";

				 		}elseif($pmk->bulan =='012026') {
				 	echo "Januari";
				 	}elseif($pmk->bulan =='022026') {
				 	echo "Februari";
				 	}elseif($pmk->bulan=='032026'){
				 	echo "Maret";
				 	}elseif($pmk->bulan=='042026'){
				 	echo "April";
				 	}elseif($pmk->bulan=='052026'){
				 	echo "Mei";
				 }elseif($pmk->bulan=='062026'){
				 	echo "Juni";
				 }elseif($pmk->bulan =='072026'){
				 	echo "Juli";	
         }elseif($pmk->bulan =='082026'){
				 	echo "Agustus";
				 	}elseif($pmk->bulan =='092026'){
				 	echo "September";
				 	}elseif($pmk->bulan =='102026'){
				 	echo "Oktober";
				 	}elseif($pmk->bulan =='112026'){
				 	echo "November";
					}elseif($pmk->bulan =='122026'){
				 	echo "Desember";

				 		}elseif($pmk->bulan =='012027') {
				 	echo "Januari";
				 	}elseif($pmk->bulan =='022027') {
				 	echo "Februari";
				 	}elseif($pmk->bulan=='032027'){
				 	echo "Maret";
				 	}elseif($pmk->bulan=='042027'){
				 	echo "April";
				 	}elseif($pmk->bulan=='052027'){
				 	echo "Mei";
				 }elseif($pmk->bulan=='062027'){
				 	echo "Juni";
				 }elseif($pmk->bulan =='072027'){
				 	echo "Juli";	
         }elseif($pmk->bulan =='082027'){
				 	echo "Agustus";
				 	}elseif($pmk->bulan =='092027'){
				 	echo "September";
				 	}elseif($pmk->bulan =='102027'){
				 	echo "Oktober";
				 	}elseif($pmk->bulan =='112027'){
				 	echo "November";
				 }else{
				 	echo "Desember";
				 } ?></td>
				 <td><?php echo substr($pmk->bulan, 2) ?></td>
					<td><?php echo number_format($pmk->meter_akhir - $pmk->meter_awal) ?></td>
					<td><?php echo number_format($pmk->meter_akhir - $pmk->meter_awal)*500 ?></td>
					<td>
						<?php if($pmk->status_pembayaran == "selesai"){ ?> <button class="btn btn-success">Sudah Dibayar</button>
					<?php }else{ ?>
						<a href="<?php echo base_url('pemakaian/pembayaran/'.$pmk->id_pemakaian) ?>" class="btn btn-primary">Lihat Status Pembayaran</a>
					<?php } ?>
					</td>
					<?php endforeach; ?>
			</tr>
		
	</table>
</div>