< html >
< kepala >
< judul > contoh Penggunaan IF </ title >
</ head >
< body >
	< formulir >
		 Besar Pembelian:
		< Masukan  jenis = teks  nama = total_beli > < br > < br >
		< input  type = submit  value = " Tentukan Diskon " >
	</ formulir >
	<? php
 	if ( isset ( $ total_beli ))
 	{
 		$ total_beli = intval ( $ total_beli );
 		$ diskon = 0 ;
 		if ( $ total_beli > = 200000 ) {
 			$ diskon = 0.1 ;
 		}
 		lain  jika ( $ total_beli > = 100000 ) {
 			$ diskon = 0,05 ;
 		}
 		lain {
 			$ diskon = 0.01 ;
 		}

 		$ diskon = $ diskon * intval ( $ total_beli );
 		printf ( "Diskon =% s <br> \ n" , $ diskon );
 		printf ( "Pembayaran =% s <br> \ n" , $ total_beli - $ diskon );
 	}
	?>
</ body >
</ html >