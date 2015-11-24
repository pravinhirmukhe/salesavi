<div class="container" style="height: 140px"></div>
<!-- banner -->
<div class="banner">
    <!-- banner Slider starts Here -->
    <script src="<?= BASEURL ?>assets/js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!--//End-slider-script -->
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider3">
            <li>
                <div class="banner-bg">
                    <div class="container">
                        <div class="banner-info">
                            <h2>RIGHT IS WHITE.<span>LEFT IS BLACK</span></h2>
                            <p>Inspired by Brasil’s bold colors and matching up to football’s on-pitch
                                playmakers, these kicks are ready to stand out.
                            </p>
                            <a href="#">SHOP BRASIL</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-bg banner-img2">
                    <div class="container">
                        <div class="banner-info">
                            <h2>RIGHT IS BLUE.<span>LEFT IS PINK</span></h2>
                            <p>Inspired by bold colors and matching up to football’s on-pitch
                                playmakers, these kicks are ready to stand out.
                            </p>
                            <a href="#">SHOP BRASIL</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-bg banner-img">
                    <div class="container">
                        <div class="banner-info">
                            <h2>RIGHT IS PINK.<span>LEFT IS BLUE</span></h2>
                            <p>Inspired by Brasil’s bold colors and matching up to football’s on-pitch
                                playmakers, these Brasil’s kicks are ready to stand out.
                            </p>
                            <a href="#">SHOP BRASIL</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-bg">
                    <div class="container">
                        <div class="banner-info">
                            <h2>RIGHT IS WHITE.<span>LEFT IS BLACK</span></h2>
                            <p>Inspired by bold colors and matching up to football’s on-pitch
                                playmakers, these kicks are ready to stand out.
                            </p>
                            <a href="#">SHOP BRASIL</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-bg banner-img2">
                    <div class="container">
                        <div class="banner-info">
                            <h2>RIGHT IS BLUE.<span>LEFT IS PINK</span></h2>
                            <p>Inspired by Brasil’s bold colors and matching up to football’s on-pitch
                                playmakers, these kicks Brasil’s are ready to stand out.
                            </p>
                            <a href="#">SHOP BRASIL</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- //banner -->