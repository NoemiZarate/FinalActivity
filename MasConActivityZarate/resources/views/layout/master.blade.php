<!DOCTYPE HTML>
<!--
    Introspect by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>@yield('Title')</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    </head>
    <body>

        <!-- Header -->
            <header id="header">
                <div class="inner">
                    <a href="/index" class="logo">introspect</a>
                    <nav id="nav">
                        <a href="/">Home</a>
                        <a href="/generic">Generic</a>
                        <a href="/element">Elements</a>
                    </nav>
                </div>
            </header>
      <section>
          @yield('section')
      </section>

  

        <!-- Footer -->
            <section id="footer">
                <div class="inner">
                    <header>
                        <h2>Get in Touch</h2>
                    </header>
                    <form method="post" action="#">
                        <div class="field half first">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" />
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="6"></textarea>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="alt" /></li>
                        </ul>
                    </form>
                    <div class="copyright">
                        &copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>
                    </div>
                </div>
            </section>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>