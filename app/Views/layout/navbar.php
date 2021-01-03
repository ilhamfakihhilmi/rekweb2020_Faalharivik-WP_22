<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<nav>
    <div class="header_nav">
        <h3 class="logo">Teknow<span>logue</span></h3>
        <div class="menu">
            <div class="btn">
                <i class="fas fa-times close-btn"></i>
            </div>
            <a href="/">Home</a>

            <?php if (logged_in()) : ?>
                <div><a href="/pages/about">Product</a></div>
                <a href="/komik">Services</a>
                <div><a href="/user/index">Profile</a></div>

            <?php else : ?>
                <div class="btn_login" ><a href="/login">Login</a></div>

            <?php endif; ?>
            
        </div>
        <div class="btn">
            <i class="fas fa-bars menu-btn"></i>
        </div>
    </div>
</nav>




<body>
    <script type="text/javascript">
        //javascript for navigation bar effect on scroll
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle('sticky', window.scrollY > 0);
        });

        //javascript for responsive navigation sidebar menu
        var menu = document.querySelector('.menu');
        var menuBtn = document.querySelector('.menu-btn');
        var closeBtn = document.querySelector('.close-btn');

        menuBtn.addEventListener("click", () => {
            menu.classList.add('active');
        });

        closeBtn.addEventListener("click", () => {
            menu.classList.remove('active');
        });
    </script>

    <!-- <div class=" container">
    <nav>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/pages/about">Product</a></li>
            <li><a href="/komik">Komik</a></li>
            <li><a href="/orang">Orang</a></li>
        </ul>
        <div>
    </nav> <a class="cta_nav" href="/pages/contact"><button class="btn_nav">Contact</button></a> -->