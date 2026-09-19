<?php

$pageTitle =
    'Insights — Technology, AI, Development & Product | Paper Mug Lab';

$pageDescription =
    'Insights from Paper Mug Lab covering AI applications, web development, product engineering, performance and technology.';

$currentPage = 'insights';

include __DIR__ . '/../components/header.php';

?>

<!-- =========================================================
     INSIGHTS HERO
========================================================= -->

<section class="pml-insights-hero">

    <div class="container">

        <div class="row align-items-end g-5">

            <div class="col-lg-8">

                <span class="pml-section-eyebrow">
                    Insights
                </span>

                <h1 class="pml-insights-title">
                    Technology worth
                    <span>thinking about.</span>
                </h1>

            </div>

            <div class="col-lg-4">

                <p class="pml-insights-description">
                    Practical thoughts on building, fixing and
                    improving websites, applications, AI products
                    and digital systems.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FEATURED INSIGHT
========================================================= -->

<section class="pml-featured-insight">

    <div class="container">

        <div class="pml-featured-card">

            <div class="row align-items-center g-5">

                <div class="col-lg-7">

                    <div class="pml-insight-feature-visual">

                        <div class="feature-code">

                            <div class="feature-code-top">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="feature-code-body">

                                <div>
                                    <span class="code-purple">
                                        const
                                    </span>
                                    application =
                                    <span class="code-purple">
                                        build
                                    </span>();
                                </div>

                                <div>
                                    application.
                                    <span class="code-purple">
                                        fails
                                    </span>();
                                </div>

                                <div class="code-error">
                                    // What now?
                                </div>

                                <div>
                                    <span class="code-purple">
                                        diagnose
                                    </span>(application);
                                </div>

                                <div>
                                    <span class="code-purple">
                                        fix
                                    </span>(rootCause);
                                </div>

                                <div class="code-success">
                                    // Back to production
                                </div>

                            </div>

                        </div>

                        <div class="feature-orbit feature-orbit-one">
                            BUILD
                        </div>

                        <div class="feature-orbit feature-orbit-two">
                            FIX
                        </div>

                    </div>

                </div>


                <div class="col-lg-5">

                    <span class="pml-insight-label">
                        Featured
                    </span>

                    <h2>
                        Building with AI
                        doesn't mean
                        <span>ignoring engineering.</span>
                    </h2>

                    <p>
                        AI can accelerate development, but the resulting
                        application still needs architecture, testing,
                        security, performance and maintainability.
                    </p>

                    <div class="pml-insight-meta">
                        AI / Engineering
                    </div>

                    <a
                        href="<?= BASE_URL ?>/insights/building-with-ai.php"
                        class="pml-project-link"
                    >
                        Read Insight
                        <span>↗</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     INSIGHT CATEGORIES
========================================================= -->

<section class="pml-insight-categories">

    <div class="container">

        <div class="text-center">

            <span class="pml-section-eyebrow">
                Explore
            </span>

            <h2>
                Ideas across
                <span>the stack.</span>
            </h2>

        </div>


        <div class="pml-category-grid">

            <a
                href="#ai"
                class="pml-category-card"
            >
                <span>01</span>
                <strong>AI</strong>
                <small>AI applications & engineering</small>
            </a>

            <a
                href="#development"
                class="pml-category-card"
            >
                <span>02</span>
                <strong>Development</strong>
                <small>Web, mobile & application development</small>
            </a>

            <a
                href="#product"
                class="pml-category-card"
            >
                <span>03</span>
                <strong>Product</strong>
                <small>UX, product thinking & digital products</small>
            </a>

            <a
                href="#performance"
                class="pml-category-card"
            >
                <span>04</span>
                <strong>Performance</strong>
                <small>Speed, accessibility & web quality</small>
            </a>

        </div>

    </div>

</section>


<!-- =========================================================
     ARTICLES
========================================================= -->

<section class="pml-insight-articles">

    <div class="container">


        <!-- AI -->

        <div
            class="pml-insight-group"
            id="ai"
        >

            <div class="pml-insight-group-heading">

                <div>
                    <span class="pml-section-eyebrow">
                        AI
                    </span>

                    <h2>
                        AI & Application Engineering
                    </h2>
                </div>

                <span class="pml-insight-count">
                    01
                </span>

            </div>


            <div class="row g-4">

                <div class="col-md-6 col-lg-4">

                    <article class="pml-insight-card">

                        <div class="pml-insight-card-number">
                            01
                        </div>

                        <span>
                            AI
                        </span>

                        <h3>
                            Building AI Applications That
                            Actually Solve Problems
                        </h3>

                        <p>
                            AI is only useful when it solves a real
                            user or business problem.
                        </p>

                        <a
                            href="<?= BASE_URL ?>/insights/building-ai-applications.php"
                        >
                            Read
                            <span>↗</span>
                        </a>

                    </article>

                </div>


                <div class="col-md-6 col-lg-4">

                    <article class="pml-insight-card">

                        <div class="pml-insight-card-number">
                            02
                        </div>

                        <span>
                            AI
                        </span>

                        <h3>
                            What to Check When an
                            AI-Built Application Breaks
                        </h3>

                        <p>
                            A practical way to investigate applications
                            generated or accelerated using AI tools.
                        </p>

                        <a
                            href="<?= BASE_URL ?>/insights/ai-application-debugging.php"
                        >
                            Read
                            <span>↗</span>
                        </a>

                    </article>

                </div>


                <div class="col-md-6 col-lg-4">

                    <article class="pml-insight-card">

                        <div class="pml-insight-card-number">
                            03
                        </div>

                        <span>
                            AI
                        </span>

                        <h3>
                            AI Code Review:
                            Beyond Syntax
                        </h3>

                        <p>
                            Why generated code still needs engineering
                            judgement and review.
                        </p>

                        <a
                            href="<?= BASE_URL ?>/insights/ai-code-review.php"
                        >
                            Read
                            <span>↗</span>
                        </a>

                    </article>

                </div>

            </div>

        </div>


        <!-- DEVELOPMENT -->

        <div
            class="pml-insight-group"
            id="development"
        >

            <div class="pml-insight-group-heading">

                <div>
                    <span class="pml-section-eyebrow">
                        Development
                    </span>

                    <h2>
                        Building Better Applications
                    </h2>
                </div>

                <span class="pml-insight-count">
                    02
                </span>

            </div>


            <div class="row g-4">

                <div class="col-md-6 col-lg-4">

                    <article class="pml-insight-card">

                        <div class="pml-insight-card-number">
                            01
                        </div>

                        <span>
                            Frontend
                        </span>

                        <h3>
                            When Should You Use React
                            for a Website?
                        </h3>

                        <p>
                            Understanding when a React-based frontend
                            makes sense and when it doesn't.
                        </p>

                        <a
                            href="<?= BASE_URL ?>/insights/react-website.php"
                        >
                            Read
                            <span>↗</span>
                        </a>

                    </article>

                </div>


                <div class="col-md-6 col-lg-4">

                    <article class="pml-insight-card">

                        <div class="pml-insight-card-number">
                            02
                        </div>

                        <span>
                            Architecture
                        </span>

                        <h3>
                            Why Reusable Components
                            Matter
                        </h3>

                        <p>
                            Component architecture can improve consistency,
                            maintenance and development speed.
                        </p>

                        <a
                            href="<?= BASE_URL ?>/insights/reusable-components.php"
                        >
                            Read
                            <span>↗</span>
                        </a>

                    </article>

                </div>


                <div class="col-md-6 col-lg-4">

                    <article class="pml-insight-card">

                        <div class="pml-insight-card-number">
                            03
                        </div>

                        <span>
                            APIs
                        </span>

                        <h3>
                            Headless Architecture:
                            When Does It Make Sense?
                        </h3>

                        <p>
                            Separating content and presentation can
                            unlock flexibility, but it isn't always
                            the right choice.
                        </p>

                        <a
                            href="<?= BASE_URL ?>/insights/headless-architecture.php"
                        >
                            Read
                            <span>↗</span>
                        </a>

                    </article>

                </div>

            </div>

        </div>


        <!-- PRODUCT -->

        <div
            class="pml-insight-group"
            id="product"
        >

            <div class="pml-insight-group-heading">

                <div>
                    <span class="pml-section-eyebrow">
                        Product
                    </span>

                    <h2>
                        Product & User Experience
                    </h2>
                </div>

                <span class="pml-insight-count">
                    03
                </span>

            </div>


            <div class="row g-4">

                <div class="col-md-6 col-lg-4">

                    <article class="pml-insight-card">

                        <div class="pml-insight-card-number">
                            01
                        </div>

                        <span>
                            UX
                        </span>

                        <h3>
                            Good UI Isn't Enough
                        </h3>

                        <p>
                            A polished interface still needs to solve
                            the user's actual problem.
                        </p>

                        <a
                            href="<?= BASE_URL ?>/insights/good-ui.php"
                        >
                            Read
                            <span>↗</span>
                        </a>

                    </article>

                </div>


                <div class="col-md-6 col-lg-4">

                    <article class="pml-insight-card">

                        <div class="pml-insight-card-number">
                            02
                        </div>

                        <span>
                            Product
                        </span>

                        <h3>
                            From Feature Request
                            to Product Requirement
                        </h3>

                        <p>
                            Turning vague requirements into something
                            developers and users can actually work with.
                        </p>

                        <a
                            href="<?= BASE_URL ?>/insights/product-requirements.php"
                        >
                            Read
                            <span>↗</span>
                        </a>

                    </article>

                </div>


                <div class="col-md-6 col-lg-4">

                    <article class="pml-insight-card">

                        <div class="pml-insight-card-number">
                            03
                        </div>

                        <span>
                            Design
                        </span>

                        <h3>
                            Designing Interfaces
                            for Real Products
                        </h3>

                        <p>
                            Product interfaces need to support workflows,
                            not just look good in a design file.
                        </p>

                        <a
                            href="<?= BASE_URL ?>/insights/product-interface-design.php"
                        >
                            Read
                            <span>↗</span>
                        </a>

                    </article>

                </div>

            </div>

        </div>


        <!-- PERFORMANCE -->

        <div
            class="pml-insight-group"
            id="performance"
        >

            <div class="pml-insight-group-heading">

                <div>
                    <span class="pml-section-eyebrow">
                        Performance
                    </span>

                    <h2>
                        Performance & Quality
                    </h2>
                </div>

                <span class="pml-insight-count">
                    04
                </span>

            </div>


            <div class="row g-4">

                <div class="col-md-6 col-lg-4">

                    <article class="pml-insight-card">

                        <div class="pml-insight-card-number">
                            01
                        </div>

                        <span>
                            Web Vitals
                        </span>

                        <h3>
                            Why Your Website
                            Feels Slow
                        </h3>

                        <p>
                            A look at the common technical causes
                            behind slow websites.
                        </p>

                        <a
                            href="<?= BASE_URL ?>/insights/website-performance.php"
                        >
                            Read
                            <span>↗</span>
                        </a>

                    </article>

                </div>


                <div class="col-md-6 col-lg-4">

                    <article class="pml-insight-card">

                        <div class="pml-insight-card-number">
                            02
                        </div>

                        <span>
                            Accessibility
                        </span>

                        <h3>
                            Accessibility Should
                            Be Built In
                        </h3>

                        <p>
                            Accessibility is part of product quality,
                            not something to add at the end.
                        </p>

                        <a
                            href="<?= BASE_URL ?>/insights/accessibility.php"
                        >
                            Read
                            <span>↗</span>
                        </a>

                    </article>

                </div>


                <div class="col-md-6 col-lg-4">

                    <article class="pml-insight-card">

                        <div class="pml-insight-card-number">
                            03
                        </div>

                        <span>
                            Engineering
                        </span>

                        <h3>
                            Technical Debt:
                            When Should You Fix It?
                        </h3>

                        <p>
                            Not every old piece of code needs to be
                            rewritten. Knowing what matters is critical.
                        </p>

                        <a
                            href="<?= BASE_URL ?>/insights/technical-debt.php"
                        >
                            Read
                            <span>↗</span>
                        </a>

                    </article>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CTA
========================================================= -->

<section class="pml-insights-cta">

    <div class="container">

        <div class="pml-insights-cta-inner">

            <span class="pml-section-eyebrow">
                Have a Technical Question?
            </span>

            <h2>
                Sometimes the fastest way
                <span>to learn is to ask.</span>
            </h2>

            <p>
                Tell us what you're trying to build, fix or improve.
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
