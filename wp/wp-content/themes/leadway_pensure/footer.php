<?php
$recent_news = get_posts(['category' => 2, 'numberposts' => 3]);
?>
<!-- Footer of page -->
<footer class="container-fluid">
    <hr class="hr-red">
    <div class="row">
        <div class="col-12 col-md-6 align-self-center newsHeader">
            <h1>LATEST NEWS</h1>
        </div>
        <div class="col-12 col-md-6 newsFeed">
            <ul class="list-unstyled">
                <?php foreach ($recent_news as $news) { ?>
                    <li class="media">
                        <img class="d-flex align-self-center mr-3"
                             src="<?= get_the_post_thumbnail_url($news->ID); ?>" alt="" height="50">

                        <div class="media-body">
                            <h5 class="mt-0"><?= $news->post_title ?></h5>

                            <p>
                                <?= summary($news->post_content, 100) ?>
                                <a href="<?= get_permalink($news) ?>">Read more</a>
                            </p>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px">
        <a class="col-12 col-md-6 btn-red" data-toggle="collapse" href="#sign" aria-expanded="false"
           aria-controls="sign">Sign-Up for News Letter</a>
        <a class="col-12 col-md-6 btn-red" data-toggle="collapse" data-target="#feed" aria-expanded="false"
           aria-controls="feed">Give us your Feedback</a>
    </div>
    <div class="row justify-content-around" style="margin-bottom: 10px">
        <div class="col-12 col-md-4 collapse" id="sign">
            <form>
                <div class="form-group">
                    <input class="form-control form-control-sm" type="text" placeholder="E-mail Address" required>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-outline-red btn-sm">Sign Up</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4 collapse" id="feed">
            <form>
                <div class="form-group">
                    <input class="form-control form-control-sm" type="text" placeholder="E-mail Address" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control form-control-sm" rows="3" cols="inherit"
                              placeholder="Please write here" required></textarea>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-outline-red btn-sm">Post Feedback</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row text-center">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <?php if (is_active_sidebar("footer_column_$i")) : ?>
                <div class="col-12 col-md-6 col-lg-3 <?= $i == 3 ? 'app' : '' ?>">
                    <?php strip_tags(dynamic_sidebar("footer_column_$i")) ?>
                </div>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
    <div class="row">
        <div class="col-12">
            <ul class="nav justify-content-center" style="margin-top: 15px">
                <li class="nav-item">
                    <a class="nav-link" href="#">Site Map</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Legal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Terms & Conditions</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row signature">
        <div class="col-12 col-md-4 align-self-center text-center "><img
                src="<?php echo get_bloginfo('template_directory'); ?>/images/pencom.png" height="90" width="90"
                alt=""/></div>
        <div class="col-12 col-md-4 align-self-center text-center">&copy; Leadway Pensure 2017</div>
        <div class="col-12 col-md-4 align-self-center text-center">Web Design & Digital by iNspire</div>
    </div>
    <a id="share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
    <a id="print"><i class="fa fa-print" aria-hidden="true"></i></a>
    <a href="javascript:" id="back-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</footer>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/owlcarousel/owl.carousel.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/595a40d350fd5105d0c83b06/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/index.js"></script>

<?php wp_footer(); ?>
