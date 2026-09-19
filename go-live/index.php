<?php

$pageTitle =
    'Go Live — Servers, Hosting & Deployment | Paper Mug Lab';

$pageDescription =
    'Paper Mug Lab provides server solutions, hosting, deployment and technical support to help websites and applications go live reliably.';

$currentPage = 'go-live';

include __DIR__ . '/../components/header.php';

?>

<!-- =========================================================
     GO LIVE HERO
========================================================= -->

<section class="pml-go-live-hero">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-7">

                <span class="pml-section-eyebrow">
                    Infrastructure & Deployment
                </span>

                <h1 class="pml-go-live-title">
                    Go Live.
                    <span>From server to production.</span>
                </h1>

                <p class="pml-go-live-description">
                    Your application is ready.
                    Now it needs somewhere reliable to run.
                    We help you choose, configure, deploy and support
                    the infrastructure behind your digital product.
                </p>

                <div class="pml-go-live-actions">

                    <a
                        href="<?= BASE_URL ?>/lets-discuss.php"
                        class="pml-btn pml-btn-primary"
                    >
                        Discuss Your Infrastructure
                        <span>↗</span>
                    </a>

                    <a
                        href="#go-live-services"
                        class="pml-btn pml-btn-outline"
                    >
                        Explore Solutions
                    </a>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="pml-server-visual">

                    <div class="server-rack">

                        <div class="server-unit">
                            <div class="server-indicator"></div>
                            <div class="server-lines"></div>
                            <span>APP</span>
                        </div>

                        <div class="server-unit">
                            <div class="server-indicator"></div>
                            <div class="server-lines"></div>
                            <span>DB</span>
                        </div>

                        <div class="server-unit">
                            <div class="server-indicator"></div>
                            <div class="server-lines"></div>
                            <span>API</span>
                        </div>

                        <div class="server-unit">
                            <div class="server-indicator"></div>
                            <div class="server-lines"></div>
                            <span>WEB</span>
                        </div>

                    </div>

                    <div class="server-status">
                        <span></span>
                        SYSTEM ONLINE
                    </div>

                    <div class="server-floating server-floating-one">
                        HOST
                    </div>

                    <div class="server-floating server-floating-two">
                        DEPLOY
                    </div>

                    <div class="server-floating server-floating-three">
                        SUPPORT
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     INTRO
========================================================= -->

<section class="pml-go-live-intro">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9 text-center">

                <span class="pml-section-eyebrow">
                    Go Live
                </span>

                <h2>
                    Infrastructure shouldn't be
                    <span>another problem.</span>
                </h2>

                <p>
                    Whether you are launching a new website, deploying
                    an application or looking for reliable infrastructure,
                    we help you get from development to production without
                    unnecessary complexity.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     SERVICES
========================================================= -->

<section
    class="pml-go-live-services"
    id="go-live-services"
>

    <div class="container">

        <div class="pml-section-heading">

            <div>

                <span class="pml-section-eyebrow">
                    Infrastructure Solutions
                </span>

                <h2>
                    Everything you need
                    <span>to go live.</span>
                </h2>

            </div>

            <p>
                Choose the infrastructure and support that fits
                your application, business and budget.
            </p>

        </div>


        <div class="row g-4">

            <!-- SERVER SALES -->

            <div class="col-md-6 col-lg-4">

                <div class="pml-go-live-card">

                    <div class="pml-card-number">
                        01
                    </div>

                    <div class="pml-go-live-icon">
                        SERVER
                    </div>

                    <h3>
                        Servers for Sale
                    </h3>

                    <p>
                        Infrastructure for businesses that need
                        dedicated computing resources for their
                        websites, applications or internal systems.
                    </p>

                    <a href="<?= BASE_URL ?>/go-live/servers.php">
                        Explore Servers
                        <span>↗</span>
                    </a>

                </div>

            </div>


            <!-- PRE-OWNED SERVERS -->

            <div class="col-md-6 col-lg-4">

                <div class="pml-go-live-card">

                    <div class="pml-card-number">
                        02
                    </div>

                    <div class="pml-go-live-icon">
                        USED
                    </div>

                    <h3>
                        Pre-Owned Servers
                    </h3>

                    <p>
                        Cost-conscious infrastructure options for
                        businesses looking for capable hardware without
                        the cost of buying everything new.
                    </p>

                    <a href="<?= BASE_URL ?>/go-live/pre-owned-servers.php">
                        View Options
                        <span>↗</span>
                    </a>

                </div>

            </div>


            <!-- HOSTING -->

            <div class="col-md-6 col-lg-4">

                <div class="pml-go-live-card">

                    <div class="pml-card-number">
                        03
                    </div>

                    <div class="pml-go-live-icon">
                        HOST
                    </div>

                    <h3>
                        Hosting
                    </h3>

                    <p>
                        Hosting infrastructure for websites and
                        applications with practical support for
                        deployment and ongoing operation.
                    </p>

                    <a href="<?= BASE_URL ?>/go-live/hosting.php">
                        Explore Hosting
                        <span>↗</span>
                    </a>

                </div>

            </div>


            <!-- DEPLOYMENT -->

            <div class="col-md-6 col-lg-4">

                <div class="pml-go-live-card">

                    <div class="pml-card-number">
                        04
                    </div>

                    <div class="pml-go-live-icon">
                        DEPLOY
                    </div>

                    <h3>
                        Application Deployment
                    </h3>

                    <p>
                        Take your website or application from
                        development to a production environment
                        with the right deployment setup.
                    </p>

                    <a href="<?= BASE_URL ?>/go-live/deployment.php">
                        Deployment Support
                        <span>↗</span>
                    </a>

                </div>

            </div>


            <!-- SERVER SETUP -->

            <div class="col-md-6 col-lg-4">

                <div class="pml-go-live-card">

                    <div class="pml-card-number">
                        05
                    </div>

                    <div class="pml-go-live-icon">
                        CONFIG
                    </div>

                    <h3>
                        Server Configuration
                    </h3>

                    <p>
                        Configure the required environment for
                        websites, APIs, databases and application
                        workloads.
                    </p>

                    <a href="<?= BASE_URL ?>/go-live/server-configuration.php">
                        Configure Infrastructure
                        <span>↗</span>
                    </a>

                </div>

            </div>


            <!-- SUPPORT -->

            <div class="col-md-6 col-lg-4">

                <div class="pml-go-live-card pml-go-live-card-dark">

                    <div class="pml-card-number">
                        06
                    </div>

                    <div class="pml-go-live-icon">
                        SUPPORT
                    </div>

                    <h3>
                        Infrastructure Support
                    </h3>

                    <p>
                        Need help after launch? Get technical support
                        for your server, hosting environment and
                        deployed applications.
                    </p>

                    <a href="<?= BASE_URL ?>/lets-discuss.php">
                        Talk to Us
                        <span>↗</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     INFRASTRUCTURE FLOW
========================================================= -->

<section class="pml-infrastructure">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-5">

                <span class="pml-section-eyebrow">
                    From Code to Production
                </span>

                <h2>
                    Your product.
                    <span>Our infrastructure thinking.</span>
                </h2>

                <p>
                    Going live isn't just about putting files on
                    a server. The environment needs to support the
                    application, database, APIs, traffic and future
                    growth.
                </p>

                <a
                    href="<?= BASE_URL ?>/lets-discuss.php"
                    class="pml-text-link"
                >
                    Discuss your setup
                    <span>↗</span>
                </a>

            </div>


            <div class="col-lg-7">

                <div class="pml-infrastructure-flow">

                    <div class="infra-step">

                        <span>01</span>

                        <strong>
                            CODE
                        </strong>

                        <small>
                            Application
                        </small>

                    </div>

                    <div class="infra-line"></div>

                    <div class="infra-step">

                        <span>02</span>

                        <strong>
                            SERVER
                        </strong>

                        <small>
                            Infrastructure
                        </small>

                    </div>

                    <div class="infra-line"></div>

                    <div class="infra-step">

                        <span>03</span>

                        <strong>
                            DEPLOY
                        </strong>

                        <small>
                            Production
                        </small>

                    </div>

                    <div class="infra-line"></div>

                    <div class="infra-step">

                        <span>04</span>

                        <strong>
                            LIVE
                        </strong>

                        <small>
                            Running
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     WHAT WE CAN HELP WITH
========================================================= -->

<section class="pml-go-live-capabilities">

    <div class="container">

        <div class="text-center mb-5">

            <span class="pml-section-eyebrow">
                Infrastructure Support
            </span>

            <h2>
                What can we help
                <span>you run?</span>
            </h2>

        </div>


        <div class="row g-3">

            <div class="col-md-6 col-lg-3">
                <div class="pml-capability">
                    Websites
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="pml-capability">
                    Web Applications
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="pml-capability">
                    Mobile APIs
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="pml-capability">
                    Databases
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="pml-capability">
                    WordPress
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="pml-capability">
                    React Applications
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="pml-capability">
                    PHP Applications
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="pml-capability">
                    AI Applications
                </div>
            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     WHY GO LIVE
========================================================= -->

<section class="pml-go-live-why">

    <div class="container">

        <div class="row g-5">

            <div class="col-lg-6">

                <span class="pml-section-eyebrow">
                    Why Go Live
                </span>

                <h2>
                    Launching is only
                    <span>the beginning.</span>
                </h2>

            </div>


            <div class="col-lg-6">

                <div class="pml-why-item">

                    <span>01</span>

                    <div>
                        <h3>
                            Practical Infrastructure
                        </h3>

                        <p>
                            Infrastructure decisions based on what
                            your application actually needs.
                        </p>
                    </div>

                </div>


                <div class="pml-why-item">

                    <span>02</span>

                    <div>
                        <h3>
                            Deployment Support
                        </h3>

                        <p>
                            Help getting your application from
                            development into a working production
                            environment.
                        </p>
                    </div>

                </div>


                <div class="pml-why-item">

                    <span>03</span>

                    <div>
                        <h3>
                            Ongoing Technical Support
                        </h3>

                        <p>
                            Infrastructure problems don't always
                            happen during development. We can help
                            when they happen in production too.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FINAL CTA
========================================================= -->

<section class="pml-go-live-cta">

    <div class="container">

        <div class="pml-go-live-cta-inner">

            <div class="pml-cta-decoration cta-decoration-one"></div>
            <div class="pml-cta-decoration cta-decoration-two"></div>

            <span class="pml-section-eyebrow">
                Ready to Launch?
            </span>

            <h2>
                Let's get your
                <span>product live.</span>
            </h2>

            <p>
                Tell us what you're building, what you're running
                and where you want to go.
            </p>

            <a
                href="<?= BASE_URL ?>/lets-discuss.php"
                class="pml-btn pml-btn-light"
            >
                Let's Discuss
                <span>↗</span>
            </a>

        </div>

    </div>

</section>


<?php include __DIR__ . '/../components/footer.php'; ?>
