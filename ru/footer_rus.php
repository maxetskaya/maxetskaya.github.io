        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <p style="float: left">&copy;  2015-2017 Надежда Максецкая</p>
                    <p style="float: right;">Разработка сайта - <a href="mailto:krav4uks@gmail.com">Александр Кравчук</a></p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <script src="/js/slick.js" type="text/javascript" charset="utf-8"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>

  <!-- Script Carousel -->
  <script type="text/javascript">
  $(document).on('ready', function() {
    $(".variable").slick({
      dots: false,
      infinite: true,
      variableWidth: true,
      autoplay: true,
      autoplaySpeed: 900
    });
  });
</script>

	<!-- Script to Activate the Carousel -->
	<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
	<script type="text/javascript">
    $(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
            helpers     : {
            title   : { type : 'inside' },
            buttons : {}
        }
    });
});
    </script>
    <!-- Analytics -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65348820-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- END Analytics -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter31529893 = new Ya.Metrika({
                    id:31529893,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/31529893" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- END Yandex.Metrika counter -->

</body>
</html>
