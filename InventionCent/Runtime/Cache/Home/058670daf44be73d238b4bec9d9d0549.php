<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class=" is-copy-enabled">
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width">
    <meta content="origin" name="referrer" />

    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/frameworks.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/github.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/site.css" type="text/css"/>
    <title>Sign in to GitHub · GitHub</title>

</head>
<body class="logged-out   env-production windows  session-authentication">
<div class="header header-logged-out" role="banner">
    <div class="container clearfix">
        <a class="header-logo" href="https://github.com/" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
            <svg aria-hidden="true" class="octicon octicon-mark-github" height="48" version="1.1" viewBox="0 0 16 16" width="48"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59 0.4 0.07 0.55-0.17 0.55-0.38 0-0.19-0.01-0.82-0.01-1.49-2.01 0.37-2.53-0.49-2.69-0.94-0.09-0.23-0.48-0.94-0.82-1.13-0.28-0.15-0.68-0.52-0.01-0.53 0.63-0.01 1.08 0.58 1.23 0.82 0.72 1.21 1.87 0.87 2.33 0.66 0.07-0.52 0.28-0.87 0.51-1.07-1.78-0.2-3.64-0.89-3.64-3.95 0-0.87 0.31-1.59 0.82-2.15-0.08-0.2-0.36-1.02 0.08-2.12 0 0 0.67-0.21 2.2 0.82 0.64-0.18 1.32-0.27 2-0.27 0.68 0 1.36 0.09 2 0.27 1.53-1.04 2.2-0.82 2.2-0.82 0.44 1.1 0.16 1.92 0.08 2.12 0.51 0.56 0.82 1.27 0.82 2.15 0 3.07-1.87 3.75-3.65 3.95 0.29 0.25 0.54 0.73 0.54 1.48 0 1.07-0.01 1.93-0.01 2.2 0 0.21 0.15 0.46 0.55 0.38C13.71 14.53 16 11.53 16 8 16 3.58 12.42 0 8 0z"></path></svg>
        </a>
    </div>
</div>

<div role="main" class="main-content">
    <div id="js-pjax-container" data-pjax-container>
        <div class="auth-form " id="login">
            <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/session" data-form-nonce="59bafeae4d8551f703d1157d77178beff13d75fb" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="MrB+8rLABY+EXMS1AcuQ4Vs4LAxXhtSI2or6N+/GihTj8R6ufAclXu7P1udZo9ETDpeKsghAGGRuRiW1GoFiAA==" /></div>      <div class="auth-form-header">
            <h1>Sign in to GitHub</h1>
        </div>
            <div id="js-flash-container">
            </div>
            <div class="auth-form-body">
                <label for="login_field">
                    Username or email address
                </label>
                <input autocapitalize="off" autocorrect="off" autofocus="autofocus" class="form-control input-block" id="login_field" name="login" tabindex="1" type="text" />

                <label for="password">
                    Password <a href="/password_reset" class="label-link">Forgot password?</a>
                </label>
                <input class="form-control form-control input-block" id="password" name="password" tabindex="2" type="password" />

                <input class="btn btn-primary btn-block" data-disable-with="Signing in…" name="commit" tabindex="3" type="submit" value="Sign in" />
            </div>
        </form>
            <p class="create-account-callout mt-3">
                New to GitHub?
                <a href="/join?source=login" data-ga-click="Sign in, switch to sign up">Create an account</a>.
            </p>
        </div>
    </div>
    <div class="modal-backdrop"></div>
</div>

<div class="container">
    <div class="site-footer" role="contentinfo">
        <ul class="site-footer-links">
            <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
            <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
            <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
            <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact</a></li>
        </ul>
    </div>
</div>

</body>
</html>