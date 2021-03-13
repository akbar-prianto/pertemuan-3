< html >
< kepala >
< title > PenggunaanSwitch - Case </ title >
</ head >
< body >
	Hari ini :
		<? Php
 			$ nama_hari = tanggal ( "l" );
 			Switch ( $ nama_hari )
 		{
 				Kasus  "Minggu" ;
 			Cetak ( "Minggu" );
 			cetak "Waktu untuk istirahat" ;
 				Istirahat ;
 				Kasus  "Senin" ;
 			Cetak ( "Senin <br>" );
 			print "Meeting awal minggu jam 08.00" ;
 				Istirahat ;
 				Kasus  "Selasa" ;
 			Cetak ( "Selasa <br>" );
 			cetak "Pembukaan Bengkel Diklat" ;
 				Istirahat ;
 				Kasus  "Rabu" ;
 			Print ( "Rabu <br>" );
 			print ( "Seminar Launchig Window Vista di JHCC" );
 				Istirahat ;
 				Kasus  "Thrusday" ;
 			Cetak ( "Kamis <br>" );
 			cetak "Pertemuan dengan Mahasiswa" ;
 				Istirahat ;
 				Kasus  "Jumat" ;
 			Cetak ( "Jum'at <br>" );
 			cetak "Jogging bersama" ;
 				Istirahat ;
 		default :
 			Cetak ( "Sabtu <br>" );
 			print "Survey harga ke Dusit, Mangga Dua" ;
 		}
	?>
</ body >
</ html >