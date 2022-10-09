
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

/* Ürün Slider*/
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
 
  if (n > 3) {slideIndex = 1}
  if (n < 1) {slideIndex = 3}
  for (i = 0; i < 3; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}

/*Yukarı Kaydır*/
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('.yukarikaydir').fadeIn();
        } else {
            $('.yukarikaydir').fadeOut();
        }
    });

    $('.yukarikaydir').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 700);
        return false;
    });
});

/*sayaç*/
$(document).ready(function(){
		    $('.count').prop('disabled', true);
   			$(document).on('click','.plus',function(){
				$('.count').val(parseInt($('.count').val()) + 1 );
    		});
        	$(document).on('click','.minus',function(){
    			$('.count').val(parseInt($('.count').val()) - 1 );
    				if ($('.count').val() == 0) {
						$('.count').val(1);
					}
    	    	});
 		});

/* form kontrolü*/
function validate(uyeol){
    var ad = uyeol.ad.value;
    var sifre = uyeol.sifre.value;
    var hata = [];
  
    if (!uzunlukkontrol(ad,5,10)) {
        hata.push("Adınızı en az 2 karakter olarak giriniz");
    }
  
    if (!uzunlukkontrol(sifre,6,8)) {
        hata.push("Şifrenizi Girin En az 6 En fazla 8 karakter");
    }
	
    if (hata.length > 0) {
        hatalarigoster(hata);
        return false;
    }
  
    return true;
}
  
function uzunlukkontrol(text, min, max){
    min = min || 1;
    max = max || 10000;
  
    if (text.length < min || text.length > max) {
        return false;
    }
    return true;
}
  
function hatalarigoster(hata){
    var msg = "Aşağıdaki hataları düzeltip tekrar deneyin...n";
    var numError;
    for (var i = 0; i<hata.length; i++) {
        numError = i + 1;
        msg += "n" + numError + ". " + hata[i];
    }
    alert(msg);
}

	
/*kullanimkosullari*/
/*function mesafelisozlesme() {
  document.getElementById("mesafelisozlesme").style.display = "none";
}*/