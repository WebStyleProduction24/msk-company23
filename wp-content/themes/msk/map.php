<?php
/**
 * Контейнер с картой
 *
 * @package MSK+
 */
?>

<?php if ( is_front_page() ) { ?>

    <div id="map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A19bee56aa55bb6e557a83ca6ab1e79a8e064a98928a3fc40236d312bd46bb9db&amp;source=constructor" width="100%" height="240" frameborder="0"></iframe>

<?php } else { ?>   

    <div class="karta">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A19bee56aa55bb6e557a83ca6ab1e79a8e064a98928a3fc40236d312bd46bb9db&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>

    <?php } ?> 
    
</div>