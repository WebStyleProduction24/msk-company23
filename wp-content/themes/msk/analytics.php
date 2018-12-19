<?php
/**
 * Footer для подключения аналитик и доп скриптов
 *
 * @package MSK+
 */
?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41759689 = new Ya.Metrika({
                    id:41759689,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
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
<!-- /Yandex.Metrika counter -->


<?php if( is_page( '20' ) ){ ?>
<!--<script src="http://shansu.ru/wp-content/themes/llorix-one-lite/wow.js"></script>
<script src="/wp-content/themes/msk/jquery.event.move.js"></script> 
<script src="/wp-content/themes/msk/jquery.min.js"></script><script src="/wp-content/themes/msk/jquery.twentytwenty.js"></script>-->


<script>
    $(document).ready(function(){
        $(".eksterery1").click(function(){
            $(".eksterery1").toggleClass("active");
            $(".interery1,.dizajn-landshafta1,.3d-vizualizatsiya1,.vce").removeClass("active");  
            $(".interery,.dizajn-landshafta,.3d-vizualizatsiya").toggleClass("opa"); return false; }); 
        $(".interery1").click(function(){
            $(".interery1").toggleClass("active");
            $(".eksterery1,.dizajn-landshafta1,.3d-vizualizatsiya1,.vce").removeClass("active");  
            $(".eksterery,.dizajn-landshafta,.3d-vizualizatsiya").toggleClass("opa"); return false; }); 
        $(".dizajn-landshafta1").click(function(){
            $(".dizajn-landshafta1").toggleClass("active");
            $(".interery1,.3d-vizualizatsiya1,.eksterery1,.vce").removeClass("active");    
            $(".interery,.eksterery,.3d-vizualizatsiya").toggleClass("opa"); return false; });   
        $(".3d-vizualizatsiya1").click(function(){
            $(".3d-vizualizatsiya1").toggleClass("active");
            $(".interery1,.dizajn-landshafta1,.eksterery1,.vce").removeClass("active");    
            $(".interery,.eksterery,.dizajn-landshafta").toggleClass("opa"); 
            $(".3d-vizualizatsiya").removeClass("opa"); return false; });  
        $(".vce").click(function(){
            $(".vce").toggleClass("active");
            $(".interery1,.dizajn-landshafta1,.eksterery1,.3d-vizualizatsiya1").removeClass("active");     
            $(".eksterery,.interery,.eksterery,.dizajn-landshafta,.3d-vizualizatsiya").removeClass("opa"); return false; });    
        });</script> 
    <?php } ?>

    <?php wp_footer(); ?>
