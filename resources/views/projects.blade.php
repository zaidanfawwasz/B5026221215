<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Project's zaidanfawwasz</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('styles.css') }}" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Project's zaidanfawwasz</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/resume') }}">My Journey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/projects') }}">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="thisisme">This is me!</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Tak Terhenti by Adib</h2>
                                            <p>In this music video, I create artwork and contribute to the video production. I serve as the videographer and conceptual director of the video. Tak Terhenti by Adib has been released on music platforms such as Spotify and YouTube. Ussaly, Adib performs 'Tak Terhenti' with his band it's call 'Pertujukan.</p>
                                            <br>
                                            <a class="cardproject" href="https://www.youtube.com/watch?v=jQaCVt-6_A0" target="_blank">Watch Tak Terhenti by Adib</a>

                                        </div>
                                        <img class="img-fluid with-shadow" src="takterhentiaalbumcover.png" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <!-- Project Card 2-->
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">FOH CREW at ITS TV</h2>
                                            <p>I am currently the staff of the content division at ITS TV, responsible for managing and building content for ITS, delegating tasks, and motivating the team to achieve their goals. With this role, I have honed my skills in direct project videos, adaptability, problem-solving, and storyline for videos, as well as the ability to analyze trends on YouTube and handle the unique challenges and needs of live broadcasts on the ITS Surabaya YouTube account.</p>
                                            <a class="cardproject" href="https://www.youtube.com/channel/UCHV3a-uo9IbghRUBxJHPoMA" target="_blank">Youtube Institut Teknologi Sepuluh Nopember</a>
                                        </div>
                                        <img class="img-fluid with-shadow" src="lifeatitstv.png" alt="ITS TV CREW LIVE" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contact me</a>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; develop by <b>zaidanfawwasz</b></div></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
