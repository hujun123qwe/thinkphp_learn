<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="is-copy-enabled">
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width">
    <meta content="origin-when-cross-origin" name="referrer" />

    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/frameworks.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/github.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/site.css" type="text/css"/>

    <title>Join GitHub · GitHub</title>
</head>

<body class="logged-out env-production windows signup">

    
        <header class="site-header js-details-container" role="banner">
            <div class="container-responsive">
            </div>
        </header>
    

    
<div role="main" class="main-content">
    <div class="shade-gradient">
        <div class="setup-wrapper">
            <div class="setup-header setup-org">
                <h1>Join GitHub</h1>
                <p class="lead">The best way to design, build, and ship software.</p>
                <!-- Show steps if user is creating an organiation -->
                <ol class="steps">
                    <li class="current">
                        <svg aria-hidden="true" class="octicon octicon-person" height="32" version="1.1" viewBox="0 0 8 16" width="16"><path d="M7 6H1c-0.55 0-1 0.45-1 1v5h2v3c0 0.55 0.45 1 1 1h2c0.55 0 1-0.45 1-1V12h2V7c0-0.55-0.45-1-1-1z m0 5h-1V9h-1v6H3V9h-1v2H1V7h6v4z m0-8C7 1.34 5.66 0 4 0S1 1.34 1 3s1.34 3 3 3 3-1.34 3-3zM4 5c-1.11 0-2-0.89-2-2S2.89 1 4 1s2 0.89 2 2-0.89 2-2 2z"></path></svg>
                        <strong class="step">Step 1:</strong>
                        注 册
                    </li>
                    <li>
                        <svg aria-hidden="true" class="octicon octicon-versions" height="32" version="1.1" viewBox="0 0 14 16" width="28"><path d="M13 3H7c-0.55 0-1 0.45-1 1v8c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1V4c0-0.55-0.45-1-1-1z m-1 8H8V5h4v6zM4 4h1v1h-1v6h1v1h-1c-0.55 0-1-0.45-1-1V5c0-0.55 0.45-1 1-1zM1 5h1v1H1v4h1v1H1c-0.55 0-1-0.45-1-1V6c0-0.55 0.45-1 1-1z"></path></svg>
                        <strong class="step">Step 2:</strong>
                        选 择
                    </li>
                    <li>
                        <svg aria-hidden="true" class="octicon octicon-dashboard" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path d="M8 5h-1v-1h1v1z m4 3h-1v1h1v-1zM5 5h-1v1h1v-1z m-1 3h-1v1h1v-1z m11-5.5l-0.5-0.5-6.5 5c-0.06-0.02-1 0-1 0-0.55 0-1 0.45-1 1v1c0 0.55 0.45 1 1 1h1c0.55 0 1-0.45 1-1v-0.92l6-5.58zM13.41 6.59c0.19 0.61 0.3 1.25 0.3 1.91 0 3.42-2.78 6.2-6.2 6.2S1.3 11.92 1.3 8.5s2.78-6.2 6.2-6.2c1.2 0 2.31 0.34 3.27 0.94l0.94-0.94c-1.19-0.81-2.64-1.3-4.2-1.3C3.36 1 0 4.36 0 8.5s3.36 7.5 7.5 7.5 7.5-3.36 7.5-7.5c0-1.03-0.2-2.02-0.59-2.91l-1 1z"></path></svg>
                        <strong class="step">Step 3:</strong>
                        Go to your dashboard
                    </li>
                </ol>
            </div>
            <div class="setup-main ">
                <div class="setup-form-container">
                    <form accept-charset="UTF-8" action="/register" autocomplete="off" class="setup-form js-signup-form" id="signup-form" method="post">
                        <h2 class="setup-form-title mb-3">
                            Create your personal account
                        </h2>
                        <dl class="form-group">
                            <dt class="input-label">
                                <label autocapitalize="off" autofocus="autofocus" data-autocheck-url="/signup_check/username" for="user_login" name="user_name">Username</label>
                            </dt>
                            <dd>
                                <input autocapitalize="off" autofocus="autofocus" class="form-control" data-autocheck-url="/signup_check/username" id="user_login" name="user_name" size="30" type="text" /><p class="note">This will be your username — you can enter your organization’s username next.</p></dd></dl>
                        <dl class="form-group">
                            <dt class="input-label">
                                <label autocapitalize="off" data-autocheck-url="/signup_check/email" for="user_email" name="student_id">Student IDCard</label>
                            </dt>
                            <dd>
                                <input autocapitalize="off" class="form-control" data-autocheck-url="/signup_check/email" id="user_email" name="student_id" size="30" type="number" />
                                <p class="note">You will occasionally receive account related emails. We promise not to share your email with anyone.</p>
                            </dd>
                        </dl>
                        <dl class="form-group">
                            <dt class="input-label">
                                <label data-autocheck-url="/signup_check/password" for="user_password" name="user_password">Password</label>
                            </dt>
                            <dd>
                                <input class="form-control" data-autocheck-url="/signup_check/password" id="user_password" name="user_password" size="30" type="password" />
                                <p class="note">Use at least one lowercase letter, one numeral, and seven characters.</p>
                            </dd>
                        </dl>
                        <input type="hidden" name="source" class="js-signup-source" value="login">
                        <p class="tos-info">By clicking on "Create an account" below, you are agreeing to the
                            <a href="https://help.github.com/terms" target="_blank">Terms of Service</a> and the
                            <a href="https://help.github.com/privacy" target="_blank">Privacy Policy</a>.</p>
                        <button type="submit" class="btn btn-primary" id="signup_button" data-disable-with="Creating account&hellip;">Create an account</button>
                    </form>
                </div> <!-- /.setup-form-container -->
            </div> <!-- /.setup-main -->

            <div class="setup-secondary">
                <div class="setup-info-module">
                    <h2>You’ll love GitHub</h2>
                    <ul class="features-list">
                        <li><strong>Unlimited</strong> collaborators</li>
                        <li><strong>Unlimited</strong> public repositories</li>
                        <li class="list-divider"></li>
                        <li><svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg> Great communication</li>
                        <li><svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg> Friction-less development</li>
                        <li><svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg> Open source community</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-backdrop"></div>
</div>


    
        <div class="container site-footer-container">
            <div class="site-footer" role="contentinfo">
                <a href="https://github.com" aria-label="Homepage" class="site-footer-mark" title="GitHub">
                    <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59 0.4 0.07 0.55-0.17 0.55-0.38 0-0.19-0.01-0.82-0.01-1.49-2.01 0.37-2.53-0.49-2.69-0.94-0.09-0.23-0.48-0.94-0.82-1.13-0.28-0.15-0.68-0.52-0.01-0.53 0.63-0.01 1.08 0.58 1.23 0.82 0.72 1.21 1.87 0.87 2.33 0.66 0.07-0.52 0.28-0.87 0.51-1.07-1.78-0.2-3.64-0.89-3.64-3.95 0-0.87 0.31-1.59 0.82-2.15-0.08-0.2-0.36-1.02 0.08-2.12 0 0 0.67-0.21 2.2 0.82 0.64-0.18 1.32-0.27 2-0.27 0.68 0 1.36 0.09 2 0.27 1.53-1.04 2.2-0.82 2.2-0.82 0.44 1.1 0.16 1.92 0.08 2.12 0.51 0.56 0.82 1.27 0.82 2.15 0 3.07-1.87 3.75-3.65 3.95 0.29 0.25 0.54 0.73 0.54 1.48 0 1.07-0.01 1.93-0.01 2.2 0 0.21 0.15 0.46 0.55 0.38C13.71 14.53 16 11.53 16 8 16 3.58 12.42 0 8 0z"></path></svg>
                </a>
            </div>
        </div>
    

</body>
</html>