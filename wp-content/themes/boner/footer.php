<footer>

    <div style="width: 100%;display: table">
        <div style="" class="fb-like mobile320" data-href="http://www.facebook.com/barbaraboner.co.uk" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-colorscheme="dark"></div>
    </div>

    <div id="mail" class="mc_popup"
    <?php //setcookie("user", "First Time", time()+31536000);
if($_COOKIE["user"]==null || $_COOKIE["user"]=="") { ?><?php } ?> >
        <a href="#" class="mc_popup-close">cl</a>
        <div class="mc_popup-content">SUBSCRIBE SO WE CAN KEEP YOU UP TO DATE WITH NEWS AND OFFERS</div>
        <div id= "status_message"> </div>
        <?php mailchimpSF_signup_form(); ?>
    </div>
    <ul id="social">
        <li id="socialnews">
            <a href="#">
                <img class="color" src="<?php bloginfo("template_url"); ?>/img/newsletter-hover.jpg">
                <img class="bw" src="<?php bloginfo("template_url"); ?>/img/newsletter.jpg">
            </a>
        </li>
        <li id="socialinstagram">
            <a target="_blank" href="http://instagram.com/barbara_bonner">
                <img class="color" src="<?php bloginfo("template_url"); ?>/img/insta-hover.jpg">
                <img class="bw" src="<?php bloginfo("template_url"); ?>/img/insta.jpg">
            </a>
        </li>
        <li>
            <a target="_blank" href="https://www.facebook.com/barbaraboner.co.uk">
                <img class="color" src="<?php bloginfo("template_url"); ?>/img/fb-hover.jpg">
                <img class="bw" src="<?php bloginfo("template_url"); ?>/img/fb.jpg">
            </a>
        </li>
        <li>
            <a target="_blank" href="http://pinterest.com/bbonnerofficial/">
                <img class="color" src="<?php bloginfo("template_url"); ?>/img/pinterest-hover.jpg">
                <img class="bw" src="<?php bloginfo("template_url"); ?>/img/pinterest.jpg">
            </a>
        </li>
        <li>
            <a target="_blank" href="https://twitter.com/BB_Bonner">
                <img class="color" src="<?php bloginfo("template_url"); ?>/img/twitter-hover.jpg">
                <img class="bw" src="<?php bloginfo("template_url"); ?>/img/twitter.jpg">
            </a>
        </li>
        <span class="tip">Follow: BarbaraBoner</span>
    </ul>
    <div id="credit">

        <p>Site by <a href="http://andwhat.com" target="_blank">andwhat</a></p>
    </div>
</footer>

<section id="modal" style="display:none" class="hide">
    <figure>
    <a class="close" href="#" title="Close">&#10005;</a>
    </figure>
</section>

<?php wp_footer(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
<script src="//cdn.foxycart.com/barbaraboner/foxycart.colorbox.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
