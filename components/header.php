<?php

require_once __DIR__ . '/../config/config.php';


/*
|--------------------------------------------------------------------------
| Page SEO Defaults
|--------------------------------------------------------------------------
*/

$pageTitle = $pageTitle ??
    'Paper Mug Lab — Website, Application & AI Development';

$pageDescription = $pageDescription ??
    'Paper Mug Lab builds, fixes and supports websites, web applications, mobile apps and AI-powered digital products.';

$currentPage = $currentPage ?? '';


/*
|--------------------------------------------------------------------------
| Canonical URL
|--------------------------------------------------------------------------
|
| Production domain:
| https://papermuglab.com
|
| Keep BASE_URL for local development.
|
*/

$siteUrl = defined('SITE_URL')
    ? rtrim(SITE_URL, '/')
    : 'https://papermuglab.com';


$requestPath = parse_url(
    $_SERVER['REQUEST_URI'] ?? '/',
    PHP_URL_PATH
);

$basePath = defined('BASE_URL')
    ? rtrim(BASE_URL, '/')
    : '';

$canonicalPath = $requestPath;


/*
|--------------------------------------------------------------------------
| Remove Local BASE_URL From Canonical
|--------------------------------------------------------------------------
*/

if ($basePath !== '' && strpos($canonicalPath, $basePath) === 0) {

    $canonicalPath = substr(
        $canonicalPath,
        strlen($basePath)
    );

}


/*
|--------------------------------------------------------------------------
| Normalize Canonical URL
|--------------------------------------------------------------------------
*/

if ($canonicalPath === '' || $canonicalPath === '/') {

    $canonicalUrl = $siteUrl . '/';

} else {

    $canonicalUrl =
        $siteUrl .
        '/' .
        ltrim($canonicalPath, '/');

}


/*
|--------------------------------------------------------------------------
| Open Graph Image
|--------------------------------------------------------------------------
*/

$ogImage =
    $siteUrl .
    '/assets/images/pml-og-image.jpg';

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <!-- =====================================================
         BASIC META
    ====================================================== -->

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>"
    >

    <meta
        name="robots"
        content="index, follow, max-image-preview:large"
    >


    <!-- =====================================================
         PAGE TITLE
    ====================================================== -->

    <title>
        <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>
    </title>


    <!-- =====================================================
         CANONICAL
    ====================================================== -->

    <link
        rel="canonical"
        href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>"
    >


    <!-- =====================================================
         FAVICON
    ====================================================== -->

    <link
        rel="icon"
        type="image/svg+xml"
        href="<?= BASE_URL ?>/assets/images/favicon.svg"
    >

    <link
        rel="apple-touch-icon"
        href="<?= BASE_URL ?>/assets/images/apple-touch-icon.png"
    >


    <!-- =====================================================
         OPEN GRAPH
    ====================================================== -->

    <meta
        property="og:type"
        content="website"
    >

    <meta
        property="og:site_name"
        content="Paper Mug Lab"
    >

    <meta
        property="og:title"
        content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>"
    >

    <meta
        property="og:description"
        content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>"
    >

    <meta
        property="og:url"
        content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>"
    >

    <meta
        property="og:image"
        content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>"
    >

    <meta
        property="og:image:alt"
        content="Paper Mug Lab"
    >

    <meta
        property="og:locale"
        content="en_IN"
    >


    <!-- =====================================================
         TWITTER / X
    ====================================================== -->

    <meta
        name="twitter:card"
        content="summary_large_image"
    >

    <meta
        name="twitter:title"
        content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>"
    >

    <meta
        name="twitter:description"
        content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>"
    >

    <meta
        name="twitter:image"
        content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>"
    >

    <meta
        name="twitter:image:alt"
        content="Paper Mug Lab"
    >


    <!-- =====================================================
         PRECONNECT
    ====================================================== -->

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >


    <!-- =====================================================
         BOOTSTRAP CSS
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- =====================================================
         BOOTSTRAP ICONS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >


    <!-- =====================================================
         GOOGLE FONTS
    ====================================================== -->

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >


    <!-- =====================================================
         PAPER MUG LAB CSS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="<?= BASE_URL ?>/assets/css/style.css"
    >


    <!-- =====================================================
         ORGANIZATION STRUCTURED DATA
    ====================================================== -->

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Paper Mug Lab",
        "url": "https://papermuglab.com",
        "logo": "https://papermuglab.com/assets/images/logo.svg",
        "email": "hello@papermuglab.com",
        "telephone": "+91 9922863725",
        "description": "Paper Mug Lab builds, fixes and supports websites, applications and AI-powered digital products."
    }
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1L6296CN7E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-1L6296CN7E');
    </script>

</head>


<body>

<?php echo $basePath ?>

<!-- =========================================================
     HEADER
========================================================= -->

<header class="pml-header">

    <nav class="navbar navbar-expand-lg">

        <div class="container">


            <!-- =================================================
                 LOGO
            ================================================== -->

            <a
                class="navbar-brand pml-logo"
                href="<?= BASE_URL ?>/"
                aria-label="Paper Mug Lab Home"
            >

                <!-- Brand Triangle -->

                <span
                    class="pml-logo-mark"
                    aria-hidden="true"
                ></span>


                <!-- Two-line Wordmark -->

                <span class="pml-logo-text">

                    <span class="pml-logo-line">
                        Paper Mug Lab
                    </span>

                </span>

            </a>


            <!-- =================================================
                 MOBILE MENU BUTTON
            ================================================== -->

            <button
                class="navbar-toggler pml-menu-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavigation"
                aria-controls="mainNavigation"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >

                <span></span>
                <span></span>

            </button>


            <!-- =================================================
                 NAVIGATION
            ================================================== -->

            <div
                class="collapse navbar-collapse"
                id="mainNavigation"
            >

                <ul
                    class="navbar-nav ms-auto align-items-lg-center gap-lg-4"
                >


                    <!-- AI STOP -->

                    <li class="nav-item">

                        <a
                            class="nav-link <?= $currentPage === 'ai-stop' ? 'active' : '' ?>"
                            href="<?= BASE_URL ?>/ai-stop/"
                        >
                            AI Stop
                        </a>

                    </li>


                    <!-- GO LIVE -->

                    <li class="nav-item">

                        <a
                            class="nav-link <?= $currentPage === 'go-live' ? 'active' : '' ?>"
                            href="<?= BASE_URL ?>/go-live/"
                        >
                            Go Live
                        </a>

                    </li>


                    <!-- FIX SUPPORT -->

                    <li class="nav-item">

                        <a
                            class="nav-link <?= $currentPage === 'fix-support' ? 'active' : '' ?>"
                            href="<?= BASE_URL ?>/fix-support/"
                        >
                            Fix Support
                        </a>

                    </li>


                    <!-- WORK -->

                    <li class="nav-item">

                        <a
                            class="nav-link <?= $currentPage === 'work' ? 'active' : '' ?>"
                            href="<?= BASE_URL ?>/work/"
                        >
                            Work
                        </a>

                    </li>


                    <!-- INSIGHTS -->

                    <li class="nav-item">

                        <a
                            class="nav-link <?= $currentPage === 'insights' ? 'active' : '' ?>"
                            href="<?= BASE_URL ?>/insights/"
                        >
                            Insights
                        </a>

                    </li>


                    <!-- LET'S DISCUSS -->

                    <li class="nav-item ms-lg-2 mt-3 mt-lg-0">

                        <a
                            href="<?= BASE_URL ?>/lets-discuss.php"
                            class="pml-header-cta"
                        >

                            Let's Discuss

                            <span>
                                ↗
                            </span>

                        </a>

                    </li>


                </ul>

            </div>

        </div>

    </nav>

</header>