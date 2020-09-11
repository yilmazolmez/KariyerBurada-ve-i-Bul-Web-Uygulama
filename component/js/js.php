<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> 	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

 
<script type="text/javascript">
	var uyeGiris = document.getElementById('uye-giris');
    var firmaGiris = document.getElementById('firma-giris');
	var sifrelerUyusmuyor = document.getElementById('sifrelerUyusmuyor');


	// herhangi bir yere basınca pencere kapanması için
	window.onclick = function(event) {
    if (event.target == uyeGiris) {
        uyeGiris.style.display = "none";
    }  
    if (event.target == firmaGiris) {
        firmaGiris.style.display = "none";
    }  
    if (event.target == sifrelerUyusmuyor) {
        sifrelerUyusmuyor.style.display = "none";
    } 
}

 
$({ Counter: 0 }).animate({
  Counter: $('.Single1').text()
}, {
  duration: 3000,
  easing: 'swing',
  step: function() {
    $('.Single1').text(Math.ceil(this.Counter));
  }
});
$({ Counter: 0 }).animate({
  Counter: $('.Single2').text()
}, {
  duration: 3000,
  easing: 'swing',
  step: function() {
    $('.Single2').text(Math.ceil(this.Counter));
  }
});$({ Counter: 0 }).animate({
  Counter: $('.Single3').text()
}, {
  duration: 3000,
  easing: 'swing',
  step: function() {
    $('.Single3').text(Math.ceil(this.Counter));
  } 
});

</script>