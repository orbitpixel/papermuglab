<?php

$pageTitle =
    'Fix Support — Website, App & Technical Support | Paper Mug Lab';

$pageDescription =
    'Paper Mug Lab fixes, improves and supports websites, web applications and digital products.';

$currentPage = 'fix-support';

include __DIR__ . '/../components/header.php';

?>

<!-- =========================================================
     FIX SUPPORT HERO
========================================================= -->

<section class="pml-fix-hero">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-7">

                <span class="pml-section-eyebrow">
                    Website & Application Support
                </span>

                <h1 class="pml-fix-title">
                    Something broken?
                    <span>We fix the broken one.</span>
                </h1>

                <p class="pml-fix-description">
                    Websites slow down. Applications break. Old code
                    becomes difficult to maintain. Bugs appear where
                    nobody expected them.
                    We investigate the problem, fix it and help make
                    the product more reliable.
                </p>

                <div class="pml-fix-actions">

                    <a
                        href="<?= BASE_URL ?>/lets-discuss.php"
                        class="pml-btn pml-btn-primary"
                    >
                        Tell Us What's Broken
                        <span>↗</span>
                    </a>

                    <a
                        href="#fix-services"
                        class="pml-btn pml-btn-outline"
                    >
                        Explore Support
                    </a>

                </div>

            </div>


            <div class="col-lg-5">

                <div class="pml-fix-visual">

                    <div class="fix-window">

                        <div class="fix-window-header">

                            <div class="fix-window-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <small>
                                application.log
                            </small>

                        </div>


                        <div class="fix-terminal">

                            <div>
                                <span class="terminal-muted">
                                    $
                                </span>
                                inspect application
                            </div>

                            <div class="terminal-error">
                                ERROR: unexpected response
                            </div>

                            <div>
                                <span class="terminal-muted">
                                    $
                                </span>
                                diagnose --system
                            </div>

                            <div class="terminal-warning">
                                3 issues detected
                            </div>

                            <div>
                                <span class="terminal-muted">
                                    $
                                </span>
                                fix --production
                            </div>

                            <div class="terminal-success">
                                ✓ system restored
                            </div>

                            <div>
                                <span class="terminal-muted">
                                    $
                                </span>
                                _
                            </div>

                        </div>

                    </div>


                    <div class="fix-orbit fix-orbit-one">
                        BUG
                    </div>

                    <div class="fix-orbit fix-orbit-two">
                        FIX
                    </div>

                    <div class="fix-orbit fix-orbit-three">
                        LIVE
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     INTRO
========================================================= -->

<section class="pml-fix-intro">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9 text-center">

                <span class="pml-section-eyebrow">
                    Fix Support
                </span>

                <h2>
                    Don't replace everything
                    <span>because something broke.</span>
                </h2>

                <p>
                    Sometimes the right solution isn't rebuilding
                    the entire product. It is understanding what
                    already exists, identifying the real problem
                    and fixing it properly.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     SERVICES
========================================================= -->

<section
    class="pml-fix-services"
    id="fix-services"
>

    <div class="container">

        <div class="pml-section-heading">

            <div>

                <span class="pml-section-eyebrow">
                    What We Fix
                </span>

                <h2>
                    Problems don't always
                    <span>need a rebuild.</span>
                </h2>

            </div>

            <p>
                From a single production bug to ongoing technical
                support, we work with the system you already have.
            </p>

        </div>


        <div class="row g-4">


            <!-- WEBSITE -->

            <div class="col-md-6 col-lg-4">

                <div class="pml-fix-card">

                    <div class="pml-card-number">
                        01
                    </div>

                    <div class="pml-fix-icon">
                        WEB
                    </div>

                    <h3>
                        Website Fixes
                    </h3>

                    <p>
                        Broken layouts, frontend issues, CMS problems,
                        JavaScript errors, compatibility issues and
                        other website problems.
                    </p>

                    <a href="<?= BASE_URL ?>/fix-support/website-fixes.php">
                        Fix My Website
                        <span>↗</span>
                    </a>

                </div>

            </div>


            <!-- WEB APPLICATION -->

            <div class="col-md-6 col-lg-4">

                <div class="pml-fix-card">

                    <div class="pml-card-number">
                        02
                    </div>

                    <div class="pml-fix-icon">
                        APP
                    </div>

                    <h3>
                        Application Fixes
                    </h3>

                    <p>
                        Diagnose and resolve issues in web applications,
                        APIs, dashboards and business systems.
                    </p>

                    <a href="<?= BASE_URL ?>/fix-support/application-fixes.php">
                        Fix My Application
                        <span>↗</span>
                    </a>

                </div>

            </div>


            <!-- LEGACY -->

            <div class="col-md-6 col-lg-4">

                <div class="pml-fix-card">

                    <div class="pml-card-number">
                        03
                    </div>

                    <div class="pml-fix-icon">
                        LEGACY
                    </div>

                    <h3>
                        Legacy Systems
                    </h3>

                    <p>
                        Working with older applications and codebases
                        that still run important business operations.
                    </p>

                    <a href="<?= BASE_URL ?>/fix-support/legacy-support.php">
                        Discuss Legacy Support
                        <span>↗</span>
                    </a>

                </div>

            </div>


            <!-- PERFORMANCE -->

            <div class="col-md-6 col-lg-4">

                <div class="pml-fix-card">

                    <div class="pml-card-number">
                        04
                    </div>

                    <div class="pml-fix-icon">
                        SPEED
                    </div>

                    <h3>
                        Performance Problems
                    </h3>

                    <p>
                        Slow pages, inefficient frontend code, heavy
                        applications and performance bottlenecks.
                    </p>

                    <a href="<?= BASE_URL ?>/fix-support/performance.php">
                        Improve Performance
                        <span>↗</span>
                    </a>

                </div>

            </div>


            <!-- UI UX -->

            <div class="col-md-6 col-lg-4">

                <div class="pml-fix-card">

                    <div class="pml-card-number">
                        05
                    </div>

                    <div class="pml-fix-icon">
                        UI/UX
                    </div>

                    <h3>
                        UI / UX Problems
                    </h3>

                    <p>
                        Interfaces that are difficult to use, inconsistent
                        components, poor information hierarchy and
                        outdated user experiences.
                    </p>

                    <a href="<?= BASE_URL ?>/fix-support/ui-ux.php">
                        Improve UI / UX
                        <span>↗</span>
                    </a>

                </div>

            </div>


            <!-- SUPPORT -->

            <div class="col-md-6 col-lg-4">

                <div class="pml-fix-card pml-fix-card-dark">

                    <div class="pml-card-number">
                        06
                    </div>

                    <div class="pml-fix-icon">
                        SUPPORT
                    </div>

                    <h3>
                        Ongoing Support
                    </h3>

                    <p>
                        Keep your website or application running with
                        ongoing maintenance, troubleshooting and
                        technical support.
                    </p>

                    <a href="<?= BASE_URL ?>/lets-discuss.php">
                        Get Support
                        <span>↗</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     HOW WE FIX
========================================================= -->

<section class="pml-fix-process">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-5">

                <span class="pml-section-eyebrow">
                    Our Approach
                </span>

                <h2>
                    Find the problem.
                    <span>Fix the cause.</span>
                </h2>

                <p>
                    We don't want to simply hide an error.
                    The objective is to understand why the problem
                    happened and address it at the right level.
                </p>

            </div>


            <div class="col-lg-7">

                <div class="pml-fix-process-list">

                    <div class="pml-fix-process-item">

                        <div class="process-number">
                            01
                        </div>

                        <div>
                            <h3>
                                Understand
                            </h3>

                            <p>
                                Understand the product, environment
                                and symptoms.
                            </p>
                        </div>

                    </div>


                    <div class="pml-fix-process-item">

                        <div class="process-number">
                            02
                        </div>

                        <div>
                            <h3>
                                Diagnose
                            </h3>

                            <p>
                                Trace the issue through the application,
                                code, infrastructure or user flow.
                            </p>
                        </div>

                    </div>


                    <div class="pml-fix-process-item">

                        <div class="process-number">
                            03
                        </div>

                        <div>
                            <h3>
                                Fix
                            </h3>

                            <p>
                                Implement the appropriate solution
                                without unnecessary changes.
                            </p>
                        </div>

                    </div>


                    <div class="pml-fix-process-item">

                        <div class="process-number">
                            04
                        </div>

                        <div>
                            <h3>
                                Validate
                            </h3>

                            <p>
                                Test the fix and check that the
                                original problem is actually resolved.
                            </p>

                        </div>

                    </div>


                    <div class="pml-fix-process-item">

                        <div class="process-number">
                            05
                        </div>

                        <div>
                            <h3>
                                Support
                            </h3>

                            <p>
                                Help maintain the product after
                                the immediate issue is resolved.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     TECHNOLOGIES
========================================================= -->

<section class="pml-fix-tech">

    <div class="container">

        <div class="text-center mb-5">

            <span class="pml-section-eyebrow">
                Technology
            </span>

            <h2>
                We work across
                <span>the stack.</span>
            </h2>

        </div>


        <div class="pml-fix-tech-grid">

            <div class="pml-fix-tech-item">
                HTML / CSS
            </div>

            <div class="pml-fix-tech-item">
                JavaScript
            </div>

            <div class="pml-fix-tech-item">
                React
            </div>

            <div class="pml-fix-tech-item">
                Next.js
            </div>

            <div class="pml-fix-tech-item">
                PHP
            </div>

            <div class="pml-fix-tech-item">
                WordPress
            </div>

            <div class="pml-fix-tech-item">
                MySQL
            </div>

            <div class="pml-fix-tech-item">
                REST APIs
            </div>

            <div class="pml-fix-tech-item">
                React Native
            </div>

            <div class="pml-fix-tech-item">
                AWS
            </div>

            <div class="pml-fix-tech-item">
                Git
            </div>

            <div class="pml-fix-tech-item">
                CI / CD
            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     SUPPORT TYPES
========================================================= -->

<section class="pml-fix-support-types">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="pml-support-box">

                    <span>ONE-TIME</span>

                    <h3>
                        Need a specific problem fixed?
                    </h3>

                    <p>
                        Bring us the issue. We'll investigate
                        and work towards a practical fix.
                    </p>

                    <a href="<?= BASE_URL ?>/lets-discuss.php">
                        Discuss a Problem
                        <span>↗</span>
                    </a>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="pml-support-box">

                    <span>ONGOING</span>

                    <h3>
                        Need someone to maintain it?
                    </h3>

                    <p>
                        Get continuing technical assistance for
                        your website or application.
                    </p>

                    <a href="<?= BASE_URL ?>/lets-discuss.php">
                        Discuss Support
                        <span>↗</span>
                    </a>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="pml-support-box pml-support-box-dark">

                    <span>NOT SURE?</span>

                    <h3>
                        Don't know what's wrong?
                    </h3>

                    <p>
                        That's okay. Start with the symptoms and
                        we'll help determine where to look.
                    </p>

                    <a href="<?= BASE_URL ?>/lets-discuss.php">
                        Start a Conversation
                        <span>↗</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FINAL CTA
========================================================= -->

<section class="pml-fix-cta">

    <div class="container">

        <div class="pml-fix-cta-inner">

            <div class="fix-cta-circle fix-cta-circle-one"></div>
            <div class="fix-cta-circle fix-cta-circle-two"></div>

            <span class="pml-section-eyebrow">
                Something Isn't Working?
            </span>

            <h2>
                Let's find out
                <span>what's wrong.</span>
            </h2>

            <p>
                Tell us what happened, what you've tried and
                what you need to get working again.
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
