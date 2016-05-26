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
            <div id="js-pjax-container" data-pjax-container>
                <div class="setup-wrapper">
                    <div class="setup-header setup-org">
                        <h1>Welcome to GitHub</h1>
                        <p class="lead">
                            You’ve taken your first step into a larger world, <strong>@hujun123qwe123qwe</strong>.
                        </p>
                        <!-- Show steps for the signup flow -->
                        <ol class="steps">
                            <li class="complete">
                                <svg aria-hidden="true" class="octicon octicon-check" height="32" version="1.1" viewBox="0 0 12 16" width="24"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
                                <strong class="step">Completed</strong>
                                Set up a personal account
                            </li>
                            <li class="current">
                                <svg aria-hidden="true" class="octicon octicon-versions" height="32" version="1.1" viewBox="0 0 14 16" width="28"><path d="M13 3H7c-0.55 0-1 0.45-1 1v8c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1V4c0-0.55-0.45-1-1-1z m-1 8H8V5h4v6zM4 4h1v1h-1v6h1v1h-1c-0.55 0-1-0.45-1-1V5c0-0.55 0.45-1 1-1zM1 5h1v1H1v4h1v1H1c-0.55 0-1-0.45-1-1V6c0-0.55 0.45-1 1-1z"></path></svg>
                                <strong class="step">Step 2:</strong>
                                Choose your plan
                            </li>
                            <li class="step-dashboard">
                                <svg aria-hidden="true" class="octicon octicon-dashboard" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path d="M8 5h-1v-1h1v1z m4 3h-1v1h1v-1zM5 5h-1v1h1v-1z m-1 3h-1v1h1v-1z m11-5.5l-0.5-0.5-6.5 5c-0.06-0.02-1 0-1 0-0.55 0-1 0.45-1 1v1c0 0.55 0.45 1 1 1h1c0.55 0 1-0.45 1-1v-0.92l6-5.58zM13.41 6.59c0.19 0.61 0.3 1.25 0.3 1.91 0 3.42-2.78 6.2-6.2 6.2S1.3 11.92 1.3 8.5s2.78-6.2 6.2-6.2c1.2 0 2.31 0.34 3.27 0.94l0.94-0.94c-1.19-0.81-2.64-1.3-4.2-1.3C3.36 1 0 4.36 0 8.5s3.36 7.5 7.5 7.5 7.5-3.36 7.5-7.5c0-1.03-0.2-2.02-0.59-2.91l-1 1z"></path></svg>
                                <strong class="step">Step 3:</strong>
                                Go to your dashboard
                            </li>
                        </ol>
                    </div>
                    <div class="setup-main">
                        <div class="setup-form-container">
                            <!-- </textarea> --><!-- '"` -->
                        <form accept-charset="UTF-8" action="/join/plan" autocomplete="off" class="setup-form js-braintree-encrypt" data-braintree-key="MIIBCgKCAQEA2SzHdspMUv7qGZ83HnzVhLJKhf51rtUqnbnKBu6Oqe7U5NiEALZKpXDvHEJg3RN6blnDfv0m+4cO1Po/phgYxvJ2YizVH+Q0SzO1CehITZMh8JVBgxNCw5Pl1FmWXLm+umsFXatJYqd4tHWwT1SDqRygZjjNBDWPXveOWDVoGKxBzq7aqXwfoPR+fA6rYSLXJAPYdNW1JJUchmmQBbRzSflaquUHQhV/90yNUKPjpHywRuvjjJ60DU5Wg64pWBfhCRwRMxJNLm+ftvomelFs9arz6g7hOdvOA4BIzgX7xfgaH5foEZR28GABru/BSEADHjhXhWCqs6ws4idDytIfJwIDAQAB" data-form-nonce="e45f762bcdf7d75ad390d1c0c998de70ec8d0c4d" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="H+lGRvoGlhLZscJ0Ba09UF/PGtAj9Hul0PN03GrRxGv5KluHC29NTLm022D0uOl+LoyQOb12/J+6m7DFM/TPYw==" /></div>
                            <h2 class="setup-form-title mb-3">
                                Choose your personal plan
                            </h2>
                            <div class="currency-container js-details-container">
                                <label class="plan-choice plan-choice-free js-plan-choice-label open">
                                    <input type="radio" class="plan-choice-radio js-plan-choice" name="plan" value="free" checked>
                                    Unlimited public repositories for free.
                                </label>
                                <label class="plan-choice plan-choice-paid js-plan-choice-label">
                                    <input type="radio" class="plan-choice-radio js-plan-choice" name="plan" value="pro">
                                    <strong>Unlimited private repositories</strong> for
                                    <span class="default-currency">$7/month.</span>
                                    <span class="local-currency">¥45.92/month.</span>
                        <span class="toggle-currency">
                            <button type="button" class="btn-link toggle-currency js-details-target" %>
                                <span class="default-currency">(view in CNY)</span>
                                <span class="local-currency">(view in USD)</span>
                            </button>
                        </span>
                                </label>
                                <p class="note local-currency">Charges to your account will be made in <strong>US Dollars</strong>. Converted prices are
                                    provided as a convenience and are only an <em>estimate</em> based on <em>current</em> exchange
                                    rates. Local prices will change as the exchange rate fluctuates.
                                </p>
                                <p class="note mb-3">Don’t worry, you can cancel or upgrade at any time.</p>
                            </div>
                            <div class="form-checkbox setup-organization-next">
                                <label>
                                    <input class="js-setup-organization" id="setup_organization" name="setup_organization" type="checkbox" value="true" />
                                    Help me set up an organization next
                                    <p class="note details">
                                        Organizations are separate from personal accounts and are best suited for businesses who need to manage permissions for many employees.<br>
                                        <a href="https://help.github.com/categories/2/articles">Learn more about organizations.</a>
                                    </p>
                                </label>
                            </div>

                            <button class="btn btn-primary js-choose-plan-submit" data-org-text="Continue to setup organization">
                                Finish sign up
                            </button>
                        </form>    </div> <!-- /.setup-form-container -->
                    </div> <!-- /.setup-main -->
                    <div class="setup-secondary">
                        <div class="setup-info-module">
                            <h2>Both plans include:</h2>
                            <ul class="features-list">
                                <li><svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg> Collaborative code review</li>
                                <li><svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg> Issue tracking</li>
                                <li><svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg> Open source community</li>
                                <li><svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg> Unlimited public repositories</li>
                                <li><svg aria-hidden="true" class="octicon octicon-check" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg> Join any organization</li>
                            </ul>
                        </div>
                    </div>  <!-- /.setup-secondary -->
                </div> <!-- /.setup-wrapper -->
            </div>
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