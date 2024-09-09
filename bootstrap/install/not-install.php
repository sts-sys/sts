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
        <!-- <p>This is a sample error message. Please replace it with the actual error message from your application.</p> -->
        <!-- <p>Please contact the system administrator or developer for further assistance.</p> -->
        <p style="padding: 0 15px">Your application is a flexible and modular web application designed to be highly customizable and efficient. It includes a robust theming system that allows users to manage different themes, each with its own assets, layouts, partials, views, and translations. Themes are stored in a dedicated directory, and the application supports multiple themes that can be dynamically switched or customized.</p>
        <p style="padding: 0 15px">The application leverages traits and directives for template management, allowing for complex templates with custom directives for error handling, dynamic content blocks, SEO optimization, form validation, and more. This structure provides flexibility and scalability, making it easy to extend and maintain.<br />Overall, your application aims to provide a powerful and user-friendly platform for developers to build, customize, and manage dynamic web content efficiently.</p>
        <hr>
        <h2 class="notice">Important Notice</h2>
        <p>To get started, please follow the <a href="https://github.com/sts-sys/sts?tab=readme-ov-file#install" class="link">installation instructions</a>.</p>
        <p>For help with your project, please join our <a href="https://github.com/sts-sys/sts" class="link">GitHub repository</a>.</p>
        <p>For more information, please visit <a href="https://github.com/sts-sys/sts/wiki" class="link">our documentation</a>.</p>
        </div>
        <div style="text-align: center;"> 
        <span class="link" style="text-decoration: none;">&copy; 2024 - STS Solutions. All right reserved.</span> | <a style="text-decoration: none;" href="https://github.com/sts-sys/sts/issues" class="link">Report an Issue</a> | <a style="text-decoration: none;" href="https://github.com/sts-sys/sts/wiki" class="link">Learn More</a>
        </div>
        <style type="text/css">
            span.logo-1 {
                color: #336A86;
                text-shadow: 0px 1px 0px #00000061;
            }

            hr {
                border: 1px solid #6588bd21;
            }

            span.logo-2 {
                color: #8EAEC4;
                text-shadow: 0px 1px 0px #00000061;
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
                background: transparent;
                padding: 10px 0;
                color: #5e5e5e;
                font-family: math;
                font-weight: 600;
                border-radius: 3px;
                border-bottom: 3px solid #3e3a3a14;
                box-shadow: 0 8px 4px #3e3a3a12;
            }

            .error > p {
                padding: 0 5px;
                margin: 4px auto;
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
