<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- TITLE & AUTHOR -->
        <title>Dash - Dashboard</title>

        <!-- META DATA -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="57x57" href="client/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="client/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="client/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="client/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="client/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="client/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="client/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="client/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="client/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="client/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="client/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="client/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="client/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="client/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="client/img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Preload Stylesheet -->
        <link rel="stylesheet" href="client/css/preload.css">

        <!-- Main Stylesheet -->
        <link href="client/css/main.css" rel="stylesheet" type="text/css">

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- Google Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

        <!-- Google Cloud Platform -->
        <meta name="google-signin-client_id" content="284757123820-35aq2ncldsigfic24aforqculbssn8bm.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>

        <!-- Facebook SDK -->
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=404228607028267&autoLogAppEvents=1"></script>

        <!-- JavaScript -->
        <script src="client/js/main.js"></script>
        <script src="client/js/login.js"></script>

    </head>

    <body>

        <!-- Login Screen -->
        <section class="login" id="login-page">

            <form class="login__form">

                <!-- Enter Email or Sign In With Google -->
                <div class="login__slide login__slide--email">

                    <h1 class="login__title">Welcome To Dash</h1>

                    <h2 class="login__subtitle">Enter Your Email To Get Started</h2>

                    <!-- Email Address -->
                    <input type="email" name="email" placeholder="me@example.com" class="login__input">

                    <!-- Validation Error -->
                    <p id="email-error"></p>

                    <!-- Move To Next Slide -->
                    <button class="login-form__next">Next</button>

                    <h2 class="login-form__slide-or">Or</h2>

                    <!-- Social Media Login Buttons -->
                    <div class="login-buttons">

                        <!-- Google Login Buttons -->
                        <div class="login-buttons__button login-buttons__google">

                            <div class="g-signin2" data-onsuccess="onGoogleSignIn" data-width="250" data-height="40" data-theme="dark" data-longtitle="true"></div>

                        </div>

                        <!-- Facebook Login Buttons -->
                        <div class="login-buttons__button login-buttons__facebook">

                            <div class="fb-login-button" data-width="250" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="true" onlogin="checkLoginState();"></div>

                        </div>

                    </div>

                </div>

                <!-- Enter Your Password To Login -->
                <div class="login__slide login__slide--password">
                    
                    

                </div>

                <!-- Enter Your Name -->
                <div class="login__slide login__slide--create">

                </div>

                <!-- Enter and Comfirm a Password -->
                <div class="login__slide login__slide--confirm">

                </div>

                <!-- Link Your Google of Facebook Account -->
                <div class="login__slide login__slide--link">

                </div>

            </form>

        </section>

        <!-- Setup Page -->
        <section class="setup" id="setup-page">

            <!-- Setup Progress Bar -->
            <div class="setup__progress-bar">

                <div class="setup__progress-bar--inner"></div>

            </div>

            <!-- Setup Slide 1 -->
            <div class="setup__slide setup__slide--1"></div>

            <!-- Setup Slide 2 -->
            <div class="setup__slide setup__slide--2"></div>

            <!-- Setup Slide 3 -->
            <div class="setup__slide setup__slide--3"></div>

            <!-- Setup Slide 4 -->
            <div class="setup__slide setup__slide--4"></div>

        </section>

        <!-- Dashboard -->
        <main class="dashboard" id="dashboard-page">

            <!-- Settings Page -->
            <section class="settings" id="dashboard-settings">
            </section>

            <!-- Clock and Greeting -->
            <section class="clock" id="dashboard-clock">
            </section>

            <!-- Weather Forecast -->
            <section class="weather" id="dashboard-weather">
              <!-- Default City is Orlando -->
              <input type="text" value="Orlando" id="weatherCity">
              <button type="button" name="submiit" id="changeCity" style="display:none;">Go</button>
              <!-- weather img icon -->
              <div id="weatherImg"></div>
              <!-- temp & description -->
              <div id="description">
                <div id="temp"><span id="deg">&#8457;</span></div>	<!-- degree F symbol -->
                <div id="words"></div>
              </div>

            </section>

            <!-- News Section -->
            <section class="news" id="dashboard-news">
            </section>

            <!-- Quote of The Day -->
            <section class="quote" id="dashboard-quote">
            </section>

        </main>

    </body>

</html>
