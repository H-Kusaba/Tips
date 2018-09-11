<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}"></noscript>

</head>
<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="#" class="logo">
                    <span class="symbol"><img src="{{ asset('images/logo.svg') }}" alt="" /></span>
                    <span class="title">@yield('title')</span>
                </a>

                <Nav>
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <Menu>
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="generic.html">Ipsum veroeros</a></li>
                <li><a href="generic.html">Tempus  etiam</a></li>
                <li><a href="generic.html">Consequat dolor</a></li>
                <li><a href="elements.html">Elements</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                @yield('main')
            </div>
        </div>

        <!-- Footer -->
        @yield('footer')
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Get in touch</h2>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <input type="text" name="name" id="name" placeholder="Name" />
                            </div>
                            <div class="field half">
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="field">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send" class="primary" /></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <h2>Follow</h2>
                    <ul class="icons">
                        <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
                        <li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
                        <li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
                        <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                        <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                    </ul>
                </section>
                <ul class="copyright">
                    <li>Copyright © D-MIX,Inc. All Rights Reserved.</li>
                </ul>
            </div>
        </footer>
        

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/browser.min.js') }}"></script>
    <script src="{{ asset('js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>