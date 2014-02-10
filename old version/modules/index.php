<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Index page | ryanschumann.net | Layout</title>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="/css/screen.css" rel="stylesheet" type="text/css" media="screen">
            

    </head>
    <body>

        <section id="page_section">
            <div>

                <header id="page_header">
                    <div>
                      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
                    </div>
                </header>

                <div id="main_nav">
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
                </div>
                
                <div id="content">
                    <p>Welcome to my portfolio. Please use the links above to see what I have created.</p>
                    <figure>
                        <img src="/pics/rsportfolio.jpg" alt="My Portfolio Cover">
                    </figure>
                </div>

                <footer id="page_footer">
                    <div>
                        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
                        <div class="links">
                        <p>Last Updated: <?php echo date('j F Y', getlastmod()) ?></p>
                        </div>
                        </div>
                </footer>
            </div>
        </section>
        <script> src="/js/analytics.js"</script>
    </body>
</html>