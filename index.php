<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body style="text-align: center;">

<form id="formGonder">
	
<b>Ağıl Sayısı :   </b>
<input type="number" name="agil_sayi"> <br><br>


<b>Ağıl Kapasitesi : </b>
<input type="number" name="agil_kapasite"> <br><br>	

<b>Toplam Koyun : </b>
<input type="number" name="toplam_koyun"> <br><br><br>	

<button class="hesapla">Hesapla</button>

</form>

<b id="sonuc"> </b>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	
	 $(document).ready(function(){

	 
      	$("#formGonder").submit(function(e){
			e.preventDefault(); //formun gönderilmesini durdurduk.
		});

	 	
	 	$(".hesapla").click(function(){
	 		
	 		var sayilar=$("#formGonder").serialize();
	 		
	 		$.ajax({
		 		url:"islem.php",
		 		type:"post",
		 		data:sayilar,
		 		 success: function(e){
	                   $('#sonuc').html( e);
	             },
	 		});
	 		
	 	})
	 	
           
    });
</script>
</body>
</html>
