<!-- header -->
<div class="header">
    <!-- container -->
    <div class="container">
        <!-- header-top -->
        <div class="header-top">
            <div class="header-logo">
                <a href="index.html"><img src="<?= BASEURL ?>assets/images/logo.png" alt="" /></a>
            </div>
            <div class="header-right">
                <ul>
                    <li class="phone">+371 282 20 760</li>
                    <li class="mail"><a href="mailto:example@mail.com">eony321v@gmail.com</a></li>
                    <li>

                        <ul class="list-inline">
                            <li><a href="#"> <i style="color: #000" class="fa fa-facebook"></i></a></li>
                            <li> <a href="#"><i style="color: #000"class="fa fa-linkedin"></i></a></li>
                            <li> <a href="#"><i style="color: #000"class="fa fa-google-plus"></i></a></li>
                            <li> <a href="#"><i style="color: #000"class="fa fa-youtube"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //header-top -->
        <div class="top-nav">
            <span class="menu"><img src="<?= BASEURL ?>assets/images/menu.png" alt=""></span>
            <ul class="nav">
                <li class="dropdown1"><a href="index.html">HOME</a>
                    <ul class="dropdown2">
                        <li><a href="single.html">lorem</a></li>
                        <li><a href="single.html">dorem sia</a></li>
                        <li><a href="single.html">erik</a></li>
                        <li><a href="single.html">ipsum padamans</a></li>
                        <li><a href="single.html">behance</a></li>
                    </ul>
                </li>
                <li class="dropdown1"><a href="men.html">MEN</a>
                    <ul class="dropdown2">
                        <li><a href="men.html">Clothing</a></li>
                        <li><a href="men.html">Footwear</a></li>
                        <li><a href="men.html">Watches</a></li>
                        <li><a href="men.html">Accessories</a></li>
                    </ul>
                </li>     
                <li class="dropdown1"><a href="women.html">WOMEN</a>
                    <ul class="dropdown2">
                        <li><a href="women.html">Ethnic Wear</a></li>
                        <li><a href="women.html">Western Wear</a></li>
                        <li><a href="women.html">All Jewellery</a></li>
                        <li><a href="women.html">Beauty & Wellness</a></li>
                    </ul>
                </li>              
                <li class="dropdown1"><a href="women.html">KIDS</a>
                    <ul class="dropdown2">
                        <li><a href="women.html">Clothing</a></li>
                        <li><a href="women.html">Footwear</a></li>
                        <li><a href="women.html">Accessories</a></li>
                    </ul>
                </li>  
                <li class="dropdown1"><a href="men.html">SALE</a>
                    <ul class="dropdown2">
                        <li><a href="men.html">Clothing</a></li>
                        <li><a href="men.html">Footwear</a></li>
                        <li><a href="men.html">Watches</a></li>
                        <li><a href="men.html">Accessories</a></li>
                    </ul>
                </li>  					           
                <li><a href="about.html">ABOUT US</a></li>            
                <li><a href="404.html">SUPPORT</a></li>
            </ul>
        </div>
        <div class="search">
            <form>
                <input type="text" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = 'Search...';
                        }" required="">
            </form>
        </div>
        <div class="clearfix"> </div>
        <!-- script-for-menu -->
        <script>
            $("span.menu").click(function () {
                $(" ul.nav").slideToggle("slow", function () {
                });
            });
        </script>
    </div>
    <!-- //container -->
</div>

<!-- //header -->