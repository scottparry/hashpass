<!doctype html>
<html lang="en-US" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#">
<head>
    <title>HashPass | Open Source Stateless Password Manager</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />

    <meta name="robots" content="noodp, noydir" />
    <meta name="description" content="Remember one master password to access all of your passwords, anywhere, anytime, on any device. Never storing any data or having to synchronize anything." />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="HashPass | Open Source Stateless Password Manager" />
    <meta property="og:description" content="Remember one master password to access all of your passwords, anywhere, anytime, on any device. Never storing any data or having to synchronize anything." />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="HashPass" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="HashPass | Open Source Stateless Password Manager" />
    <meta name="twitter:description" content="Remember one master password to access all of your passwords, anywhere, anytime, on any device. Never storing any data or having to synchronize anything." />

    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%7CPoppins%3A400%2C500%2C600" media="screen" />
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" media="screen" />
    <link rel="stylesheet" href="assets/css/minified.css.php" media="screen" />
</head>

<body id="index">
    <?php require( "includes/generator.php" ); ?>

    <!-- wrapper -->
    <div id="wrapper">

        <!-- header -->
        <header id="main">
            <div class="boxed">

                <!-- nav -->
                <nav id="primary">
                    <div id="site-logo">
                        <h1><a href="#"><i class="fas fa-shield-alt"></i> H@$hPa$$</a></h1>
                    </div>

                    <ul>
                        <li><a href="#how"><i class="far fa-question-circle"></i> How It Works</a></li>
                        <li><a href="//github.com/scottparry/hashpass"><i class="fab fa-github"></i> View Source</a></li>
                    </ul>
                </nav>
                <!-- /nav -->

                <!-- intro -->
                <div id="intro" class="one-half">
                    <h2>Stateless Password Manager.</h2>
                    <p>Remember one master password to access all of your passwords, anywhere, anytime, on any device.</p>
                    <p>Never storing any data or having to synchronize anything.</p>

                    <a href="#how" class="button button-medium" title="How It Works">How It Works</a>
                </div>
                <!--/intro -->

                <!-- generator -->
                <form id="generator" class="one-half" action="" method="post">

                    <div class="one-full">
                        <label for="fullname">Full Name </label>
                        <input type="text" id="fullname" name="fullname" autocorrect="off" autocapitalize="none" autocomplete="off" value="" placeholder="John Doe" required />
                        <i class="icon fas fa-user-secret"></i>
                    </div>

                    <div class="one-full">
                        <label for="website">Website</label><br>
                        <input type="text" id="website" name="website" autocorrect="off" autocapitalize="none" autocomplete="off" value="" placeholder="example.com" required />
                        <i class="fas fa-globe-americas"></i>
                    </div>

                    <div class="one-full">
                        <label for="masterpassword">Master Password</label>
                        <input type="password" id="masterpassword" name="masterpassword" autocorrect="off" autocapitalize="none" autocomplete="off" value="" pattern=".{8,}" title="For security, the master password must be 8 characters or more." placeholder="•••••••••••••••••••••" required />
                        <i class="fas fa-key"></i>
                    </div>

                    <div class="one-full input-option-hidden visuallyhidden">
                        <label for="length">Password Length</label>
                        <input type="number" id="length" name="length" autocorrect="off" autocapitalize="none" autocomplete="off" value="16" min="8" pattern=".{8,}" title="For security, the password must be 8 characters or more." required />
                    </div>

                    <div class="one-full input-option-hidden visuallyhidden">
                        <label for="counter">Counter</label>
                        <input type="number" id="counter" name="counter" autocorrect="off" autocapitalize="none" autocomplete="off" value="1" min="1" required />
                    </div>

                    <div class="one-full">
                        <label for="generatedpassword">Generated Password</label>
                        <input type="text" id="generatedpassword" value="<?php echo $generated_password; ?>" name="generatedpassword" autocorrect="off" autocapitalize="none" autocomplete="off" readonly />
                        <i class="fas fa-shield-alt"></i>
                        <a href="#" id="copy-generated" title="Copy to Clipboard"><i class="fas fa-clipboard"></i></a>

                        <span id="copied-to-clipboard">Password Copied!</span>
                    </div>

                    <div class="one-full">
                        <a href="#" id="options" title="Advanced Options">Advanced Options</a>
                    </div>

                    <button type="submit" id="generate">Generate Password</button>
                </form>
                <!-- /generator -->

            </div>
        </header>
        <!-- /header -->

        <!-- main content -->
        <article id="page" itemscope="" itemtype="http://schema.org/WebPage">
            <div class="boxed">
                <div id="how" itemprop="mainContentOfPage">

                    <div class="one-third">
                        <h5>Simple.</h5>
                        <p>Never save passwords again. With the same input of full name, website &amp; master password, HashPass will always return the same password.</p>
                        <p>Simply access HashPass whenever you need to recalculate a password.</p>
                    </div>

                    <div class="one-third">
                        <h5>Secure.</h5>
                        <p>Using <a href="//en.wikipedia.org/wiki/PBKDF2" title="PBKDF2" target="_blank">PBKDF2</a> with 200,000 iterations for the derivation, hashed with <a href="//en.wikipedia.org/wiki/SHA-2" title="SHA-512">SHA-512</a>, and finally passed through base85.</p>
                        <p>Depending on the master password, generated passwords are between 100 &mdash; 128bit entropy.</p>
                    </div>

                    <div class="one-third">
                        <h5>Open.</h5>
                        <p>Nothing to hide. HashPass is open source. Meaning it's free, auditable, community driven and can be hosted wherever you like.</p>
                        <p>All source code is available to view, contribute or fork on <a href="//github.com/scottparry/hashpass" title="GitHub" target="_blank">GitHub</a>.</p>
                    </div>

                </div>
            </div>
        </article>
        <!-- /main content -->

    </div>
    <!-- /wrapper -->

    <!-- footer -->
    <footer id="main">
        <div id="copyright" class="boxed">
            <p>
	            Released under the <a href="//github.com/scottparry/hashpass/blob/master/LICENSE" target="_blank">GPL v3 license</a>. 
  
                Copyright &copy; 2018 <a href="#" target="_blank"><i class="fas fa-shield-alt"></i> H@$hPa$$</a>. 
                <br> 
                Icons by <a href="//fontawesome.com/" target="_blank">FontAwesome</a>.
            </p>
        </div>
    </footer>
    <!-- /footer -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/application.js"></script>
</body>
</html>