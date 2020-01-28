
    <div id="menu3" class="footer">
        <div class="container-footer">
            г. Талдом, 2018 г.
        </div>
        <div class="container-developer">
            <h2>Сайт разработан</h2>
            <button onClick='location.href="https://vk.com/alexei_karyavin"'>Ссылка VK</button>
        </div>
    </div>
    </div>

    <!-- SCRIPTS -->
    <script src="assest/js/jquery.min.js"></script>
    <script src="assest/js/parallax.min.js"></script>
    <script src="assest/js/tattoo.js"></script>
    <script src="assest/js/wow.min.js"></script>

    <script>
        new WOW().init();
        $(document).ready(function(){
    $(".container-menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});
    </script>
</script>
</body>
</html>