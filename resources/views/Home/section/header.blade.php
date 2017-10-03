<header id="navigation" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">تغییر ناوبری</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->
            <!-- logo -->
            <h1 class="navbar-brand">
                <a href="{{ URL::route('index') }}#body"><img src="/viewSite/img/logo.png" height="40" width="164" alt=""></a>
            </h1>
            <!-- /logo -->
        </div>
        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav menu">
                <li><a href="{{ URL::route('index') }}#top" >خانه</a></li>
                <li><a href="{{ URL::route('index') }}#features">خدمات</a></li>
                <li><a href="{{ URL::route('index') }}#portfolio">نمونه کارها</a></li>
                <li><a href="{{ URL::route('index') }}#team">تیم</a></li>
                <li><a href="{{ URL::route('index') }}#pricing-table">قیمت</a></li>
                <li><a href="{{ URL::route('index') }}#blog">مقالات</a></li>
                <li><a href="{{ URL::route('index') }}#testimonial">ویدئوها</a></li>
                <li><a href="{{ URL::route('index') }}#contact-form">تماس با ما</a></li>
            </ul>
        </nav>
        <!-- /main nav -->
    </div>
</header>
