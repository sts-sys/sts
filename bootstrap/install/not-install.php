<?php

$images = 'http://' . $_SERVER['HTTP_HOST'] . '/public/images/logo.png';
$favicon = 'http://' . $_SERVER['HTTP_HOST'] . '/public/favicon.png';
echo <<<HTML
<html>
    <head>
        <title>Welcome to STS Framework</title>
        <link rel="icon" type="image/png" href="{$favicon}" />
    </head>
    <body>
        <img src="{$images}" class="logo" />
        
        <div class="error">
        <!--  <h1 class="logo-text"><span class="logo-1">STS</span> <span class="logo-2">Framework!</span></h1> -->
        <h2 class="notice">Important Notice</h2>
        <!-- <p>This is a sample error message. Please replace it with the actual error message from your application.</p> -->
        <!-- <p>Please contact the system administrator or developer for further assistance.</p> -->
        <p>Your STS Framework is a powerful, lightweight, and flexible PHP framework that aims to simplify the development process for web applications.</p>
        <p>For more information, please visit <a href="https://github.com/sts-sys/sts" class="link">our GitHub repository</a>.</p>
        <p>To get started, please follow the <a href="https://github.com/sts-sys/sts?tab=readme-ov-file#install" class="link">installation instructions</a>.</p>
        </div>

        <style type="text/css">
            span.logo-1 {
                color: #336A86;
            }

            span.logo-2 {
                color: #8EAEC4;
            }

            h2.notice {
                font-size: 13px;
                color: #9f6363;
            }

            h1.logo-text {
                position: relative;
                text-shadow: 0px 2px 3px #00000026;
                font-size: 34px;
            }

            .error {
                display: block;
                margin: 20px auto;
                width: 80%;
                text-align: center;
                white-space: normal;
                font-size: 16px;
                background: #457a9314;
                padding: 10px 0;
                color: #5e5e5e;
                font-family: math;
                font-weight: 600;
                border-radius: 3px;
                box-shadow: 0px 2px 3px #00000021;
            }

            .logo {
                display: block;
                margin: 20px auto;
                width: 40%; 
                height: auto;
            }

            body {
                margin: 90px auto;
                padding: 30px 0;
                /*background: rgb(238,174,202);
                background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);*/
                background: rgb(236,242,245);
                background: radial-gradient(circle, rgba(236,242,245,1) 0%, rgba(183,210,241,1) 50%, rgba(148,187,233,1) 100%);
            }

            .composer {
                color: #3e3a3a;
                font-size: 14px;
                text-decoration: none;
            }

            .link {
                color: #3e3a3a;
                font-family: monospace;
                text-decoration: underline;
                font-size: 13px;
            }
        </style>
    </body>
</html>
HTML;