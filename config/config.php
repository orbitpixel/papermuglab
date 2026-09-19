<?php

/**
 * =========================================================
 * Paper Mug Lab
 * Global Configuration
 * =========================================================
 *
 * Local development:
 * http://localhost/papermuglab/
 *
 * Production:
 * https://papermuglab.com/
 *
 */


/*
|--------------------------------------------------------------------------
| Error Reporting
|--------------------------------------------------------------------------
|
| Development:
| Show PHP errors while building locally.
|
| Production:
| Set display_errors to 0.
|
*/

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

error_reporting(E_ALL);


/*
|--------------------------------------------------------------------------
| Site Configuration
|--------------------------------------------------------------------------
*/

define(
    'SITE_NAME',
    'Paper Mug Lab'
);


/*
|--------------------------------------------------------------------------
| Base URL
|--------------------------------------------------------------------------
|
| Used for internal links and assets.
|
| Local:
| /papermuglab
|
| Production:
| /
|
*/

define(
    'BASE_URL',
    ''
);


/*
|--------------------------------------------------------------------------
| Production Website URL
|--------------------------------------------------------------------------
|
| Used for:
| - Canonical URLs
| - Open Graph URLs
| - Structured data
| - Sitemap references
|
*/

define(
    'SITE_URL',
    'https://papermuglab.com'
);


/*
|--------------------------------------------------------------------------
| Brand Configuration
|--------------------------------------------------------------------------
*/

define(
    'BRAND_COLOR',
    '#7200B9'
);

define(
    'TEXT_COLOR',
    '#303336'
);


/*
|--------------------------------------------------------------------------
| Contact Information
|--------------------------------------------------------------------------
*/

define(
    'CONTACT_EMAIL',
    'hello@papermuglab.com'
);

define(
    'CONTACT_FROM_EMAIL',
    'hello@papermuglab.com'
);

define(
    'CONTACT_FROM_NAME',
    'Paper Mug Lab'
);

define(
    'CONTACT_PHONE',
    '+91 9922863725'
);


/*
|--------------------------------------------------------------------------
| Database Configuration
|--------------------------------------------------------------------------
|
| Current configuration is for local development.
|
*/

define(
    'DB_HOST',
    'localhost'
);

define(
    'DB_NAME',
    'papermuglab'
);

define(
    'DB_USER',
    'root'
);

define(
    'DB_PASS',
    'Root123!'
);


/*
|--------------------------------------------------------------------------
| Database Charset
|--------------------------------------------------------------------------
*/

define(
    'DB_CHARSET',
    'utf8mb4'
);


/*
|--------------------------------------------------------------------------
| PDO Connection
|--------------------------------------------------------------------------
|
| The connection is created only when getDatabase()
| is called.
|
*/

function getDatabase(): PDO
{
    static $pdo = null;

    if ($pdo instanceof PDO) {
        return $pdo;
    }


    $dsn =
        'mysql:host=' . DB_HOST .
        ';dbname=' . DB_NAME .
        ';charset=' . DB_CHARSET;


    try {

        $pdo = new PDO(
            $dsn,
            DB_USER,
            DB_PASS,
            [
                PDO::ATTR_ERRMODE =>
                    PDO::ERRMODE_EXCEPTION,

                PDO::ATTR_DEFAULT_FETCH_MODE =>
                    PDO::FETCH_ASSOC,

                PDO::ATTR_EMULATE_PREPARES =>
                    false
            ]
        );


        return $pdo;


    } catch (PDOException $e) {

        /*
        |--------------------------------------------------------------------------
        | Development Error
        |--------------------------------------------------------------------------
        */

        if (ini_get('display_errors')) {

            die(
                'Database connection failed: ' .
                htmlspecialchars(
                    $e->getMessage(),
                    ENT_QUOTES,
                    'UTF-8'
                )
            );

        }


        /*
        |--------------------------------------------------------------------------
        | Production Error
        |--------------------------------------------------------------------------
        |
        | Do not expose database credentials/errors
        | to website visitors.
        |
        */

        error_log(
            'Paper Mug Lab database connection failed: ' .
            $e->getMessage()
        );


        http_response_code(500);

        die(
            'Unable to connect to the database.'
        );

    }
}


/*
|--------------------------------------------------------------------------
| Site Assets
|--------------------------------------------------------------------------
*/

define(
    'LOGO_URL',
    BASE_URL . '/assets/images/logo.svg'
);

define(
    'FAVICON_URL',
    BASE_URL . '/assets/images/favicon.svg'
);

define(
    'OG_IMAGE_URL',
    SITE_URL . '/assets/images/pml-og-image.jpg'
);


/*
|--------------------------------------------------------------------------
| SEO Defaults
|--------------------------------------------------------------------------
*/

define(
    'DEFAULT_PAGE_TITLE',
    'Paper Mug Lab — Website, Application & AI Development'
);

define(
    'DEFAULT_PAGE_DESCRIPTION',
    'Paper Mug Lab builds, fixes and supports websites, web applications, mobile apps and AI-powered digital products.'
);


/*
|--------------------------------------------------------------------------
| Security
|--------------------------------------------------------------------------
*/

define(
    'SESSION_NAME',
    'pml_session'
);


/*
|--------------------------------------------------------------------------
| Application Settings
|--------------------------------------------------------------------------
*/

define(
    'APP_ENV',
    'development'
);


/*
|--------------------------------------------------------------------------
| Timezone
|--------------------------------------------------------------------------
*/

date_default_timezone_set(
    'Asia/Kolkata'
);

/*
|--------------------------------------------------------------------------
| SMTP / Email Configuration
|--------------------------------------------------------------------------
*/

define(
    'SMTP_HOST',
    'smtp.papermuglab.com'
);

define(
    'SMTP_PORT',
    587
);

define(
    'SMTP_USERNAME',
    'hello@papermuglab.com'
);

define(
    'SMTP_PASSWORD',
    '5PHa$2@0$u'
);

define(
    'SMTP_ENCRYPTION',
    'tls'
);