<script src="{{mix('js/app.js')}}"></script>
<!-- slider parallax effect jquery-->
<script src="assets/js/parallax-effect.js"></script>

<!-- latest jquery-->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- menu js-->
<script src="assets/js/menu.js"></script>

<!-- lazyload js-->
<script src="assets/js/lazysizes.min.js"></script>

<!-- popper js-->
<script src="assets/js/popper.min.js"></script>

<!-- slick js-->
<script src="assets/js/slick.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/bootstrap.js"></script>

<!-- Bootstrap Notification js-->
<script src="assets/js/bootstrap-notify.min.js"></script>

<!-- footer reveal js-->
<script src="assets/js/footer-reveal.min.js"></script>

<!-- Theme js-->
<script src="{{ mix('js/script.js') }}" ></script>


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

</script>