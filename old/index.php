<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>

    <header class="position-fixed text-white top-0 start-0 w-100">
        <nav class="navbar navbar-expand-lg">
            <div class="container p-3">
                <a class="navbar-brand" href="#">
                    <h3 class="mb-0 d-flex align-items-center text-white">
                        <img src="assets/img/PML.svg" alt="Logo" class="me-2" style="height: 30px; width: auto;" />
                        <span>Paper Mug Lab</span>
                    </h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <div class="hero">
            <div class="container d-flex align-items-end h-100 pt-5 pb-5">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="text-white">
                          We find the problem.<br />We build the fix.<br />We prove it works.</h2>
                        <p class="text-white">
                          We help businesses leverage the power of AI<br>while ensuring their digital presence is stable, performant, and scalable.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Hero Ends -->
    </main>

    <div class="marquee-container">
      <div class="marquee-track">
        <div class="marquee-item">• TAXSUTRA</div>
        <div class="marquee-item">• SAM BRIGHT PVT. LTD.</div>
        <div class="marquee-item">• KEYSTONE ANKURAM</div>
        <div class="marquee-item">• CRAFTOLITE</div>
        <div class="marquee-item">• EXCELLO</div>
        <!-- Repeat enough items to fill the container + extra for seamless loop -->
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <div class="intro py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mb-3 d-block">
                    <h2 class="mb-4">Services</h2>
                    <p class="lead">
                      Bespoke website design, development, and server infrastructure. We fix cluttered, broken, or unmaintainable web properties, sell robust servers, and provide 24/7 technical support.
                    </p>
                </div>
                </div>
                <div class="row">
                <div class="col-md-3">
                    <div class="card border-1 p-3 rounded-0 mb-3 h-100">
                        <div class="card-header bg-transparent border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-brain-circuit-icon lucide-brain-circuit">
                                <path
                                    d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z" />
                                <path d="M9 13a4.5 4.5 0 0 0 3-4" />
                                <path d="M6.003 5.125A3 3 0 0 0 6.401 6.5" />
                                <path d="M3.477 10.896a4 4 0 0 1 .585-.396" />
                                <path d="M6 18a4 4 0 0 1-1.967-.516" />
                                <path d="M12 13h4" />
                                <path d="M12 18h6a2 2 0 0 1 2 2v1" />
                                <path d="M12 8h8" />
                                <path d="M16 8V5a2 2 0 0 1 2-2" />
                                <circle cx="16" cy="13" r=".5" />
                                <circle cx="18" cy="3" r=".5" />
                                <circle cx="20" cy="21" r=".5" />
                                <circle cx="20" cy="8" r=".5" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">AI Services</h5>
                            <p class="card-text">We diagnose and clean up broken, bloated, or unstable AI-generated
                                websites. Get human-written performance refactoring and architectural stabilization.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <a href="#"
                                class="btn p-0 font-weight-bold d-flex align-items-center gap-2 text-decoration-none">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-chevron-right-icon lucide-circle-chevron-right">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="m10 8 4 4-4 4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-1 p-3 rounded-0 mb-3 h-100">
                        <div class="card-header bg-transparent border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-server-icon lucide-server">
                                <rect x="2" y="2" width="20" height="8" rx="2" />
                                <rect x="2" y="14" width="20" height="8" rx="2" />
                                <line x1="6" y1="6" x2=".01" y2="6" />
                                <line x1="6" y1="18" x2=".01" y2="18" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">GO Live</h5>
                            <p class="card-text">We sell high-availability new and preowned server arrays. Secure your
                                absolute hardware independence with custom migration and live support.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <a href="#"
                                class="btn p-0 font-weight-bold d-flex align-items-center gap-2 text-decoration-none">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-chevron-right-icon lucide-circle-chevron-right">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="m10 8 4 4-4 4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-1 p-3 rounded-0 mb-3 h-100">
                        <div class="card-header bg-transparent border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-broom-sparkles-icon lucide-broom-sparkles">
                                <path d="M11 2v2" />
                                <path d="M12 3h-2" />
                                <path d="M13.5 10.5 22 2" />
                                <path
                                    d="M14.734 13.841a2 2 0 00-.314-2.42L12.58 9.58a2 2 0 00-2.421-.314l-7.657 4.461A1 1 0 002.3 15.3l6.403 6.403a1 1 0 001.571-.204z" />
                                <path d="M20 15v4" />
                                <path d="M22 17h-4" />
                                <path d="M4 4v4" />
                                <path d="m5 18 2-2" />
                                <path d="M6 6H2" />
                                <path d="m7.699 10.7 5.602 5.601" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Fix Support</h5>
                            <p class="card-text">Bespoke web and application development, immediate technical support,
                                and comprehensive refactoring for legacy digital assets.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <a href="#"
                                class="btn p-0 font-weight-bold d-flex align-items-center gap-2 text-decoration-none">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-chevron-right-icon lucide-circle-chevron-right">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="m10 8 4 4-4 4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-1 p-3 rounded-0 mb-3 h-100">
                        <div class="card-header bg-transparent border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-ruler-dimension-line-icon lucide-ruler-dimension-line">
                                <path d="M10 15v-3" />
                                <path d="M14 15v-3" />
                                <path d="M18 15v-3" />
                                <path d="M2 8V4" />
                                <path d="M22 6H2" />
                                <path d="M22 8V4" />
                                <path d="M6 15v-3" />
                                <rect x="2" y="12" width="20" height="8" rx="2" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Product Development</h5>
                            <p class="card-text"><strong class="d-block">Let's build something exceptional
                                    together.</strong>
                                Join forces with Paper Mug Lab to engineer high-end web sculptures optimized
                                specifically to drive modern commercial scale.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <a href="#"
                                class="btn p-0 font-weight-bold d-flex align-items-center gap-2 text-decoration-none">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-chevron-right-icon lucide-circle-chevron-right">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="m10 8 4 4-4 4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overview">
      <div class="container mb-3">
        <div class="row">
          <div class="col-8">
            <h2 class="mb-4">Human Integrity Over Synthetic Chaos</h2>
            <p class="lead">Paper Mug Lab is not a bloated marketing agency. We are a specialized code laboratory and server distributor. When digital platforms break, get cluttered, or fail under pressure — we fix the broken one.</p>
          </div>
        </div>
      </div>
      <div class="aboutImg p-5">
        <div class="container"></div>
      </div>
      
    </div>

    <div class="metrix">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-10">
            <h2 class="mb-4">We value diversity and understand its positive impact on businesses. While supporting our clients in achieving their diversity goals, we like to lead by example.</h2>
            <div class="row mb-5">
              <div class="col-md-6">
                <h3><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-icon lucide-arrow-up"><path d="m5 12 7-7 7 7"/><path d="M12 19V5"/></svg> 90% - <span class="small">CMS Development</span></h3>
                <div class="calc">
                  <div class="meter" style="width: 90%"></div>
                </div>
              </div>
              <div class="col-md-6">
                <h3><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-icon lucide-arrow-up"><path d="m5 12 7-7 7 7"/><path d="M12 19V5"/></svg>98% - <span class="small">Application Support</span></h3>
                <div class="calc">
                  <div class="meter" style="width: 98%"></div>
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-6">
                <h3><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-icon lucide-arrow-up"><path d="m5 12 7-7 7 7"/><path d="M12 19V5"/></svg>63% - <span class="small">Product Development</span></h3>
                <div class="calc">
                  <div class="meter" style="width: 63% "></div>
                </div>
              </div>
              <div class="col-md-6">
                <h3><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-icon lucide-arrow-up"><path d="m5 12 7-7 7 7"/><path d="M12 19V5"/></svg>76% - <span class="small">Server</span></h3>
                <div class="calc">
                  <div class="meter" style="width: 76%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials mt-5 py-5 bg-body-secondary">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="mb-4">Testimonials</h2>
            <p class="lead">
              In a landscape dominated by bots and AI, we're proudly human — committed to providing a genuine, personable experience.
            </p>
            <p class="lead">
            Our clients choose us because we deliver results, even when dealing with tight schedules, technical challenges, or location-specific requirements. But don't just take our word for it, read what some of our clients say about us.</p>
          </div>
          <div class="col-md-8">



    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">

      <div class="carousel-inner">

        <!-- Testimonial 1 -->
        <div class="carousel-item active">
          <div class="testimonial-item text-center mx-auto">

            <div class="testimonial-quote">
              <span class="quote-mark">“</span>
            </div>

            <blockquote class="lead mb-4">
              In a landscape dominated by bots and AI, we're proudly human —
              committed to providing a genuine, personable experience.
            </blockquote>

            <div class="testimonial-author">
              <h5 class="mb-1">John Smith</h5>
              <p class="mb-0 text-muted">Managing Director</p>
            </div>

          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="carousel-item">
          <div class="testimonial-item text-center mx-auto">

            <div class="testimonial-quote">
              <span class="quote-mark">“</span>
            </div>

            <blockquote class="lead mb-4">
              Our clients choose us because we deliver results, even when
              dealing with tight schedules and technical challenges.
            </blockquote>

            <div class="testimonial-author">
              <h5 class="mb-1">Sarah Williams</h5>
              <p class="mb-0 text-muted">Head of Operations</p>
            </div>

          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="carousel-item">
          <div class="testimonial-item text-center mx-auto">

            <div class="testimonial-quote">
              <span class="quote-mark">“</span>
            </div>

            <blockquote class="lead mb-4">
              They understood our requirements from the beginning and
              delivered an exceptional experience from start to finish.
            </blockquote>

            <div class="testimonial-author">
              <h5 class="mb-1">Michael Brown</h5>
              <p class="mb-0 text-muted">Creative Director</p>
            </div>

          </div>
        </div>

      </div>

      <!-- Previous -->
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#testimonialCarousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <!-- Next -->
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#testimonialCarousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
      </button>

      <!-- Indicators -->
      <div class="carousel-indicators position-static mt-4">
        <button
          type="button"
          data-bs-target="#testimonialCarousel"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Testimonial 1"
        ></button>

        <button
          type="button"
          data-bs-target="#testimonialCarousel"
          data-bs-slide-to="1"
          aria-label="Testimonial 2"
        ></button>

        <button
          type="button"
          data-bs-target="#testimonialCarousel"
          data-bs-slide-to="2"
          aria-label="Testimonial 3"
        ></button>
      </div>

    </div>





          </div>
        </div>
      </div>
    </div>

    <footer class="container mt-5">
        <div class="row">
            <div class="col-12">
                <p class="text-center">&copy; 2024 Your Company</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.0.0/jquery.min.js" integrity="sha512-8LENNbXmzI/Gbj+OwXmqR6V4QaUAw0/porPzy1+dQoJqC0JPHedWoe0DDOTL2uHA5XXJyIsPtiMHH86pVlay6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/scripts.js"></script>
    <!-- Bootstrap JS ends -->
</body>

</html>