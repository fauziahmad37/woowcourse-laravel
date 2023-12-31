<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="stylesheet" href="assets/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="assets/css/index.min.css">
    </head>
    <body class="min-100-vh bg-light-subtle">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <nav id="nav-top" class="navbar bg-primary">
                <div class="container">
                    <ul class="w-100 list-unstyled row align-items-center mb-0">
                        <li class="col-12 col-md-6 d-flex flex-column flex-sm-row flex-nowrap">
                            <a class="link-offset-2 link-underline link-underline-opacity-0 text-white mb-1 mb-lg-0" href="tel:+81289617462">
                                <span class="me-1">&#9742;</span>081289617462
                            </a>
                            <a class="ms-0 ms-sm-4 link-offset-2 link-underline link-underline-opacity-0 text-white mb-1 mb-lg-0" href="mailto:admin@admin.com">
                                <span class="me-1">&#9993;</span>admin@admin.com
                            </a>
                        </li>
                        <li class="col-12 col-md-6 d-flex flex-column flex-sm-row flex-nowrap justify-content-end">
                            <a class="link-offset-2 link-underline link-underline-opacity-0 text-white me-3 mb-1 mb-lg-0" href="<?=url('login')?>">
                                <i class="fa-solid fa-right-to-bracket"></i><span class="ms-2">Login</span>
                            </a>
                            <a class="link-offset-2 link-underline link-underline-opacity-0 text-white mb-1 mb-lg-0" href="#">
                                <i class="fa-solid fa-user-plus"></i><span class="ms-1">Register</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main id="content">
            <nav id="nav-bottom" class="navbar navbar-expand-lg sticky-top" >
                <div class="container">
                    <a class="navbar-brand" href="#"><h1 class="fs-4 m-0">WoowCourse</h1></a>
                    <button class="navbar-toggler" type="button" id="btn-opennav" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item rounded">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item rounded">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item position-relative rounded">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="false">
                              Categories
                            </a>
                            <ul class="list-unstyled custom-dropdown collapse" id="collapse_1">
                                <li class="nav-item"><a class="nav-link">Pelajaran</a></li>
                                <li class="nav-item"><a class="nav-link">IT Dan Komputer</a></li>
                            </ul>
                          </li>
                          <li class="nav-item rounded">
                            <a class="nav-link" aria-disabled="true">Disabled</a>
                          </li>
                        </ul>
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <div id="jumbotron" class="container py-4">
                <div class="row py-4 mt-4 position-relative">
                    <div class="col-12">
                        <h1 class="top text-center text-uppercase mt-4 pt-5">
                            <span class="text-primary">Woow</span>
                            <span class="text-white">Course</span>
                        </h1>
                        <h3 class="text-center text-white text-shadow">
                            <i>We provides always our best educational services for our all students</i>
                        </h3>
                    </div>
                </div>
            </div>
        </main>
        <section id="popular-courses"  class="container py-5 my-3">
            <h3 class="text-center w-100 m-0">POPULAR COURSES</h3>
            <h5 class="text-center fs-5 fw-normal w-100 mb-4">sample of popular courses</h5>
            <div class="row">

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card position-relative card-popular-course">
                        <span class="label-harga">320K</span>
                        <img class="img-fluid" src="assets/images/sm2.jpg">
                        <div class="card-body d-flex flex-column align-items-center">
                            <img  class=" teacher-icon rounded-circle border-1 shadow-sm" src="assets/images/image.png">
                            <h4 class="w-100 text-center text-capitalize mt-2">Bahasa Inggris</h4>
                            <p class="text-justify overflow-hidden">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam.
                            </p>
                        </div>
                        <div class="card-footer courses-grid-footer">
                            <div class="row justify-content-evenly">
                                <div class="col">
                                    <i class="fa-solid fa-calendar-days text-primary"></i>
                                    <small class="text-capitalize ms-1">2 hours</small>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-book text-primary"></i>
                                    <small class="text-capitalize ms-1">10 lesson</small>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-chair text-primary"></i>
                                    <small class="text-capitalize ms-1">12 Seats</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card position-relative card-popular-course mb-3 mb-lg-0">
                        <img class="img-fluid" src="assets/images/sm2.jpg">
                        <div class="card-body d-flex flex-column align-items-center">
                            <img  class=" teacher-icon rounded-circle border-1 shadow-sm" src="assets/images/image.png">
                            <h4 class="w-100 text-center text-capitalize mt-2">Bahasa Inggris</h4>
                            <p class="text-justify overflow-hidden">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam.
                            </p>
                        </div>
                        <div class="card-footer courses-grid-footer">
                            <div class="row justify-content-evenly">
                                <div class="col">
                                    <i class="fa-solid fa-calendar-days text-primary"></i>
                                    <small class="text-capitalize ms-1">2 hours</small>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-book text-primary"></i>
                                    <small class="text-capitalize ms-1">10 lesson</small>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-chair text-primary"></i>
                                    <small class="text-capitalize ms-1">12 Seats</small>
                                </div>
                            </div>
                        </div>
                        <span class="label-harga">320K</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card position-relative card-popular-course mb-3 mb-lg-0">
                        <img class="img-fluid" src="assets/images/sm2.jpg">
                        <div class="card-body d-flex flex-column align-items-center">
                            <img  class=" teacher-icon rounded-circle border-1 shadow-sm" src="assets/images/image.png">
                            <h4 class="w-100 text-center text-capitalize mt-2">Bahasa Inggris</h4>
                            <p class="text-justify overflow-hidden">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam.
                            </p>
                        </div>
                        <div class="card-footer courses-grid-footer">
                            <div class="row justify-content-evenly">
                                <div class="col">
                                    <i class="fa-solid fa-calendar-days text-primary"></i>
                                    <small class="text-capitalize ms-1">2 hours</small>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-book text-primary"></i>
                                    <small class="text-capitalize ms-1">10 lesson</small>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-chair text-primary"></i>
                                    <small class="text-capitalize ms-1">12 Seats</small>
                                </div>
                            </div>
                        </div>
                        <span class="label-harga">320K</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card position-relative card-popular-course mb-3 mb-lg-0">
                        <img class="img-fluid" src="assets/images/sm2.jpg">
                        <div class="card-body d-flex flex-column align-items-center">
                            <img  class=" teacher-icon rounded-circle border-1 shadow-sm" src="assets/images/image.png">
                            <h4 class="w-100 text-center text-capitalize mt-2">Bahasa Inggris</h4>
                            <p class="text-justify overflow-hidden">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam.
                            </p>
                        </div>
                        <div class="card-footer courses-grid-footer">
                            <div class="row justify-content-evenly">
                                <div class="col">
                                    <i class="fa-solid fa-calendar-days text-primary"></i>
                                    <small class="text-capitalize ms-1">2 hours</small>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-book text-primary"></i>
                                    <small class="text-capitalize ms-1">10 lesson</small>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-chair text-primary"></i>
                                    <small class="text-capitalize ms-1">12 Seats</small>
                                </div>
                            </div>
                        </div>
                        <span class="label-harga">320K</span>
                    </div>
                </div>

            </div>
        </section>
        <!-- start instructures -->
        <section id="instructures" class="container py-5 my-3">
            <h3 class="text-center text-uppercase w-100 m-0">course teachers</h3>
            <h5 class="text-center fs-5 fw-normal w-100 mb-4">sample of teachers</h5>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <figure class="figure material-shadow-1">
                        <img class="img-fluid" src="assets/images/person/1.jpg">
                        <div class="overlay py-2 px-3">
                            <h4 class="mb-0 w-100 text-uppercase text-shadow">pak kampret</h4>
                            <figcaption class="figcaption mb-3 text-capitalize text-shadow-sm text-secondary fw-semibold">machine learning</figcaption>
                            <p class="text-justify text-shadow-sm mt-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </p>
                            <div class="row flex-nowrap">
                                <div class="col fw-bold">
                                    <i class="fa-solid fa-users-line text-warning"></i> 24 Students
                                </div>
                                <div class="col fw-bold">
                                    <i class="fa-solid fa-book text-warning"></i> 3 Courses
                                </div>
                            </div>
                        </div>

                    </figure>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <figure class="figure material-shadow-1">
                        <img class="img-fluid" src="assets/images/person/1.jpg">
                        <div class="overlay px-3 py-2">
                            <h4 class="mb-0 w-100 text-uppercase text-shadow">bebek</h4>
                            <figcaption class="figcaption mb-3 text-capitalize text-shadow-sm text-secondary fw-semibold">electric guitar</figcaption>
                            <p class="text-justify text-shadow-sm mt-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </p>
                            <div class="row flex-nowrap">
                                <div class="col fw-bold">
                                    <i class="fa-solid fa-users-line text-warning"></i> 24 Students
                                </div>
                                <div class="col fw-bold">
                                    <i class="fa-solid fa-book text-warning"></i> 3 Courses
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <figure class="figure material-shadow-1">
                        <img class="img-fluid" src="assets/images/person/1.jpg">
                        <div class="overlay px-3 py-2">
                            <h4 class="mb-0 w-100 text-uppercase text-shadow">Jebir</h4>
                            <figcaption class="figcaption mb-3 text-capitalize text-shadow-sm text-secondary fw-semibold">astronout</figcaption>
                            <p class="text-justify text-shadow-sm mt-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </p>
                            <div class="row flex-nowrap">
                                <div class="col fw-bold">
                                    <i class="fa-solid fa-users-line text-warning"></i> 24 Students
                                </div>
                                <div class="col fw-bold">
                                    <i class="fa-solid fa-book text-warning"></i> 3 Courses
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <figure class="figure material-shadow-1">
                        <img class="img-fluid" src="assets/images/person/1.jpg">
                        <div class="overlay px-3 py-2">
                            <h4 class="mb-0 w-100 text-uppercase text-shadow">jamet</h4>
                            <figcaption class="figcaption mb-3 text-capitalize text-shadow text-secondary fw-semibold">Drawing</figcaption>
                            <p class="text-justify text-shadow-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </p>
                            <div class="row flex-nowrap">
                                <div class="col fw-bold">
                                    <i class="fa-solid fa-users-line text-warning"></i> 24 Students
                                </div>
                                <div class="col fw-bold">
                                    <i class="fa-solid fa-book text-warning"></i> 3 Courses
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </section>
        <!-- end instructures -->

        <!-- START FOOTER -->
        <footer class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3"></div>
                    <div class="col-12 col-lg-3"></div>
                    <div class="col-12 col-lg-3"></div>
                </div>
                <div class="row"></div>
            </div>
        </footer>
        <!-- END FOOTER -->
        <a role="button" href="#" class="btn btn-primary p-0 m-0
                                     floating-button rounded-circle
                                     text-white
                                     text-shadow
                                     shadow pb-2" >&#8679;</a>
        <script src="assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" async defer></script>
        <script src="assets/js/main.js" async defer></script>
        <script src="assets/js/index.js" async defer></script>
    </body>
</html>
