<?php

$pageTitle =
    'Let\'s Discuss — Start Your Project | Paper Mug Lab';

$pageDescription =
    'Talk to Paper Mug Lab about building, fixing, supporting or taking your website or application live.';

$currentPage = 'lets-discuss';

require_once __DIR__ . '/config/config.php';

$successMessage = '';
$errorMessage = '';

$name = '';
$email = '';
$phone = '';
$company = '';
$service = '';
$budget = '';
$message = '';

/*
|--------------------------------------------------------------------------
| Handle Form Submission
|--------------------------------------------------------------------------
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $budget = trim($_POST['budget'] ?? '');
    $message = trim($_POST['message'] ?? '');

    /*
    |--------------------------------------------------------------------------
    | Validation
    |--------------------------------------------------------------------------
    */

    if ($name === '') {

        $errorMessage = 'Please enter your name.';

    } elseif ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errorMessage = 'Please enter a valid email address.';

    } elseif ($message === '') {

        $errorMessage = 'Please tell us a little about your requirement.';

    } else {

        try {

            /*
            |--------------------------------------------------------------------------
            | Database Connection
            |--------------------------------------------------------------------------
            */

            $pdo = new PDO(
                'mysql:host=' . DB_HOST .
                ';dbname=' . DB_NAME .
                ';charset=utf8mb4',
                DB_USER,
                DB_PASS,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );


            /*
            |--------------------------------------------------------------------------
            | Save Enquiry
            |--------------------------------------------------------------------------
            */

            $stmt = $pdo->prepare("
                INSERT INTO contact_enquiries
                (
                    name,
                    email,
                    phone,
                    company,
                    service,
                    budget,
                    message,
                    ip_address,
                    user_agent
                )
                VALUES
                (
                    :name,
                    :email,
                    :phone,
                    :company,
                    :service,
                    :budget,
                    :message,
                    :ip_address,
                    :user_agent
                )
            ");

            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':phone' => $phone,
                ':company' => $company,
                ':service' => $service,
                ':budget' => $budget,
                ':message' => $message,
                ':ip_address' => $_SERVER['REMOTE_ADDR'] ?? null,
                ':user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null
            ]);


            /*
            |--------------------------------------------------------------------------
            | Send Email Notification
            |--------------------------------------------------------------------------
            */

            $subject =
                'New Website Enquiry — ' . $name;

            $emailBody = "
New enquiry received from Paper Mug Lab website.

Name:
{$name}

Email:
{$email}

Phone:
{$phone}

Company:
{$company}

Service:
{$service}

Budget:
{$budget}

Message:
{$message}

--------------------------------
Submitted:
" . date('Y-m-d H:i:s') . "
";

            $headers = [];

            $headers[] =
                'From: ' . CONTACT_FROM_NAME .
                ' <' . CONTACT_FROM_EMAIL . '>';

            $headers[] =
                'Reply-To: ' . $email;

            $headers[] =
                'MIME-Version: 1.0';

            $headers[] =
                'Content-Type: text/plain; charset=UTF-8';

            mail(
                CONTACT_EMAIL,
                $subject,
                $emailBody,
                implode("\r\n", $headers)
            );


            /*
            |--------------------------------------------------------------------------
            | Success
            |--------------------------------------------------------------------------
            */

            $successMessage =
                'Thank you. Your enquiry has been received. We will get back to you shortly.';

            /*
            |--------------------------------------------------------------------------
            | Clear Form
            |--------------------------------------------------------------------------
            */

            $name = '';
            $email = '';
            $phone = '';
            $company = '';
            $service = '';
            $budget = '';
            $message = '';

        } catch (PDOException $e) {

            $errorMessage =
                'We could not submit your enquiry right now. Please try again or contact us directly.';
        }
    }
}

include __DIR__ . '/components/header.php';

?>

<!-- =========================================================
     LET'S DISCUSS HERO
========================================================= -->

<section class="pml-discuss-hero">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-7">

                <span class="pml-section-eyebrow">
                    Let's Discuss
                </span>

                <h1 class="pml-discuss-title">
                    Have something
                    <span>to build?</span>
                </h1>

                <p class="pml-discuss-description">
                    Tell us what you're trying to build, fix,
                    improve or take live. You don't need to have
                    everything figured out before starting
                    the conversation.
                </p>

                <div class="pml-discuss-points">

                    <div>
                        <span>01</span>
                        Build something new
                    </div>

                    <div>
                        <span>02</span>
                        Fix something broken
                    </div>

                    <div>
                        <span>03</span>
                        Improve an existing product
                    </div>

                    <div>
                        <span>04</span>
                        Get technical support
                    </div>

                </div>

            </div>


            <div class="col-lg-5">

                <div class="pml-discuss-visual">

                    <div class="discuss-circle discuss-circle-one"></div>
                    <div class="discuss-circle discuss-circle-two"></div>

                    <div class="discuss-center">

                        <span>
                            PML
                        </span>

                        <strong>
                            Let's<br>
                            Talk.
                        </strong>

                    </div>

                    <div class="discuss-node discuss-node-one">
                        BUILD
                    </div>

                    <div class="discuss-node discuss-node-two">
                        FIX
                    </div>

                    <div class="discuss-node discuss-node-three">
                        SUPPORT
                    </div>

                    <div class="discuss-node discuss-node-four">
                        LIVE
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FORM
========================================================= -->

<section class="pml-discuss-form-section">

    <div class="container">

        <div class="row g-5">

            <div class="col-lg-4">

                <div class="pml-discuss-form-intro">

                    <span class="pml-section-eyebrow">
                        Start Here
                    </span>

                    <h2>
                        Tell us
                        <span>what's happening.</span>
                    </h2>

                    <p>
                        Give us enough information to understand
                        your requirement. We'll take it from there.
                    </p>

                    <div class="pml-discuss-contact">

                        <span>
                            DIRECT CONTACT
                        </span>

                        <a href="tel:+919922863725">
                            +91 99228 63725
                        </a>

                    </div>

                </div>

            </div>


            <div class="col-lg-8">

                <div class="pml-discuss-form-card">

                    <?php if ($successMessage): ?>

                        <div class="pml-form-message pml-form-success">
                            <?= htmlspecialchars($successMessage) ?>
                        </div>

                    <?php endif; ?>


                    <?php if ($errorMessage): ?>

                        <div class="pml-form-message pml-form-error">
                            <?= htmlspecialchars($errorMessage) ?>
                        </div>

                    <?php endif; ?>


                    <form
                        method="POST"
                        action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                        novalidate
                    >

                        <div class="row g-4">

                            <!-- NAME -->

                            <div class="col-md-6">

                                <label
                                    for="name"
                                    class="pml-form-label"
                                >
                                    Your Name *
                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="pml-form-control"
                                    value="<?= htmlspecialchars($name) ?>"
                                    placeholder="Your name"
                                    required
                                >

                            </div>


                            <!-- EMAIL -->

                            <div class="col-md-6">

                                <label
                                    for="email"
                                    class="pml-form-label"
                                >
                                    Email *
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="pml-form-control"
                                    value="<?= htmlspecialchars($email) ?>"
                                    placeholder="you@company.com"
                                    required
                                >

                            </div>


                            <!-- PHONE -->

                            <div class="col-md-6">

                                <label
                                    for="phone"
                                    class="pml-form-label"
                                >
                                    Phone
                                </label>

                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    class="pml-form-control"
                                    value="<?= htmlspecialchars($phone) ?>"
                                    placeholder="+91"
                                >

                            </div>


                            <!-- COMPANY -->

                            <div class="col-md-6">

                                <label
                                    for="company"
                                    class="pml-form-label"
                                >
                                    Company
                                </label>

                                <input
                                    type="text"
                                    id="company"
                                    name="company"
                                    class="pml-form-control"
                                    value="<?= htmlspecialchars($company) ?>"
                                    placeholder="Company name"
                                >

                            </div>


                            <!-- SERVICE -->

                            <div class="col-md-6">

                                <label
                                    for="service"
                                    class="pml-form-label"
                                >
                                    What do you need?
                                </label>

                                <select
                                    id="service"
                                    name="service"
                                    class="pml-form-control"
                                >

                                    <option value="">
                                        Select a service
                                    </option>

                                    <option
                                        value="AI Stop"
                                        <?= $service === 'AI Stop' ? 'selected' : '' ?>
                                    >
                                        AI Stop
                                    </option>

                                    <option
                                        value="Go Live"
                                        <?= $service === 'Go Live' ? 'selected' : '' ?>
                                    >
                                        Go Live
                                    </option>

                                    <option
                                        value="Fix Support"
                                        <?= $service === 'Fix Support' ? 'selected' : '' ?>
                                    >
                                        Fix Support
                                    </option>

                                    <option
                                        value="Website Development"
                                        <?= $service === 'Website Development' ? 'selected' : '' ?>
                                    >
                                        Website Development
                                    </option>

                                    <option
                                        value="Application Development"
                                        <?= $service === 'Application Development' ? 'selected' : '' ?>
                                    >
                                        Application Development
                                    </option>

                                    <option
                                        value="UI / UX"
                                        <?= $service === 'UI / UX' ? 'selected' : '' ?>
                                    >
                                        UI / UX
                                    </option>

                                    <option
                                        value="Technical Support"
                                        <?= $service === 'Technical Support' ? 'selected' : '' ?>
                                    >
                                        Technical Support
                                    </option>

                                    <option
                                        value="Other"
                                        <?= $service === 'Other' ? 'selected' : '' ?>
                                    >
                                        Something Else
                                    </option>

                                </select>

                            </div>


                            <!-- BUDGET -->

                            <div class="col-md-6">

                                <label
                                    for="budget"
                                    class="pml-form-label"
                                >
                                    Approx. Budget
                                </label>

                                <select
                                    id="budget"
                                    name="budget"
                                    class="pml-form-control"
                                >

                                    <option value="">
                                        Select budget
                                    </option>

                                    <option
                                        value="Under ₹25,000"
                                        <?= $budget === 'Under ₹25,000' ? 'selected' : '' ?>
                                    >
                                        Under ₹25,000
                                    </option>

                                    <option
                                        value="₹25,000 - ₹50,000"
                                        <?= $budget === '₹25,000 - ₹50,000' ? 'selected' : '' ?>
                                    >
                                        ₹25,000 - ₹50,000
                                    </option>

                                    <option
                                        value="₹50,000 - ₹1,00,000"
                                        <?= $budget === '₹50,000 - ₹1,00,000' ? 'selected' : '' ?>
                                    >
                                        ₹50,000 - ₹1,00,000
                                    </option>

                                    <option
                                        value="₹1,00,000+"
                                        <?= $budget === '₹1,00,000+' ? 'selected' : '' ?>
                                    >
                                        ₹1,00,000+
                                    </option>

                                    <option
                                        value="Not sure"
                                        <?= $budget === 'Not sure' ? 'selected' : '' ?>
                                    >
                                        Not sure yet
                                    </option>

                                </select>

                            </div>


                            <!-- MESSAGE -->

                            <div class="col-12">

                                <label
                                    for="message"
                                    class="pml-form-label"
                                >
                                    Tell us about it *
                                </label>

                                <textarea
                                    id="message"
                                    name="message"
                                    class="pml-form-control pml-form-textarea"
                                    rows="7"
                                    placeholder="What are you building, fixing or trying to achieve?"
                                    required
                                ><?= htmlspecialchars($message) ?></textarea>

                            </div>


                            <!-- SUBMIT -->

                            <div class="col-12">

                                <button
                                    type="submit"
                                    class="pml-form-submit"
                                >
                                    Send Enquiry
                                    <span>↗</span>
                                </button>

                                <p class="pml-form-note">
                                    By submitting this form, you are
                                    requesting a conversation about
                                    your requirement.
                                </p>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     WHAT HAPPENS NEXT
========================================================= -->

<section class="pml-discuss-next">

    <div class="container">

        <div class="text-center">

            <span class="pml-section-eyebrow">
                What Happens Next
            </span>

            <h2>
                Simple from
                <span>here.</span>
            </h2>

        </div>


        <div class="row g-4 mt-4">

            <div class="col-md-4">

                <div class="pml-next-card">

                    <span>01</span>

                    <h3>
                        We Review
                    </h3>

                    <p>
                        We look at your requirement and understand
                        what you're trying to achieve.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="pml-next-card">

                    <span>02</span>

                    <h3>
                        We Discuss
                    </h3>

                    <p>
                        We ask the relevant questions and determine
                        the best way forward.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="pml-next-card pml-next-card-dark">

                    <span>03</span>

                    <h3>
                        We Get to Work
                    </h3>

                    <p>
                        Once the scope is clear, we move towards
                        building, fixing or supporting your product.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<?php include __DIR__ . '/components/footer.php'; ?>