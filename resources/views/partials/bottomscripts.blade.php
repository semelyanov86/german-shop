<script src="{{mix('js/app.js')}}"></script>
<!-- slider parallax effect jquery-->
<script src="{{asset('assets/js/parallax-effect.js')}}"></script>

<!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- menu js-->
<script src="{{asset('assets/js/menu.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>

<!-- popper js-->
<script src="{{asset('assets/js/popper.min.js')}}"></script>

<!-- slick js-->
<script src="{{asset('assets/js/slick.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap.js')}}"></script>

<!-- Bootstrap Notification js-->
<script src="{{asset('assets/js/bootstrap-notify.min.js')}}"></script>

<!-- footer reveal js-->
<script src="{{asset('assets/js/footer-reveal.min.js')}}"></script>

<!-- Theme js-->
<script src="{{ mix('js/script.js') }}" ></script>

<!-- Countdown Plugin js-->
<script src="{{asset('assets/js/jquery.time-to.min.js')}}" ></script>


<script>
    $(window).on('load',function(){
        $('#exampleModal').modal('show');
    });
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
    $('footer').footerReveal();
	
	//Countdown
	
	$('head').append("<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/countdown.css')}}\" media=\"screen\">");
	var userTime = document.getElementById('timeInput').value;
	var userArr = userTime.split('-');
	$('#countdown-timer').timeTo({
      timeTo: new Date(userArr[0], userArr[1], userArr[2]),
      displayDays: 2,
      theme: "black",
      displayCaptions: true,
      fontSize: 34,
      captionSize: 14,
      lang: 'de'
    });

</script>