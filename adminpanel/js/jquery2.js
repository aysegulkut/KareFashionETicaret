$(function(){
	$(document).on("keyup",function(){
		var degisken=$("input[name=genel_arama]").val();
		if(degisken.length>2){
			$("#sonuc").html("Aranan:"+degisken);
			var data="ara=" + degisken;
			$.ajax({
				type:'POST',
				url:'ajax/aramayap.php',
				data:data,
					success:function(cevap){
						$("#sonuc").html(cevap);
						}
			});
		}
	});
});