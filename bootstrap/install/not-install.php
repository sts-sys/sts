<?php

$images = 'http://' . $_SERVER['HTTP_HOST'] . '/public/images/logo.png';
echo <<<HTML
<img src="{$images}" class="logo" />

<div class="error">
    <p>The STS Framework is not installed. Please run <span class="composer">"composer install"</span> in the root directory of your project.</p>
    <p>For more documentations please fallow the <a href="https://github.com/sts-sys/sts?tab=readme-ov-file#install" class="link">link</a></p>
</div>

<style type="text/css">
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
        text-decoration: none;
        font-family: monospace;
    }
</style>
HTML;