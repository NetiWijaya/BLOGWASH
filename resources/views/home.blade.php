<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- @vite(['resources/sass/app.scss']) --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet" integrity="{{ sri_hash('css/app.css') }}" crossorigin="anonymous"> --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}
    <style>
        .custom-button {
            background-color: #120269;
            color: #ffffff;
            padding: 8px;
            border-radius: 8px;
            width: 100px;
            height: 40px;
            font-size: 17px;
        }

        .custom-button:hover {
            background: #02eeff;
            color: #000000
        }

        .blurred {
            filter: blur(5px);
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top flex-md-nowrap">
        <div class="container">
            <a class="navbar-brand fs-2 text-dark" href="/"><i class="bi bi-code-slash fs-1"></i>BlogApps</a>
            <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-dark justify-contect-end me-auto mb-2 mb-lg-0 gap-1 mx-auto p-1">
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">
                            <i class="bi bi-journal-code"></i> Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container px-1 text-light">
        <section class="container px-4 py-5 p-5 p-sm-6 mt-4">
            <div class="p-5 p-sm-6">
                <div class="d-flex flex-xl-row flex-column justify-content-between">
                    <div class="text-center">
                        <h1 class="text-white mb-1 mt-5">AICS</h1>
                        <h3 class="text-primary fw-bold mb-2">Academic Institute of Computer Science</h3>
                        <h4>This program's goal: to provide teaching about technology</h4>
                        <p class="lead text-secondary mb-4 text-light">We are ready to help you with Information of
                            Technology (IT) </p>
                        <i>
                            We provided at of information for you. If you are interested, you can learn more about
                            us. The information we prepared is CYBER SECURITY, PROGRAMMERS, etc.
                            <br>
                            This program aims to provide education for talents who are interested in information
                            technology. The goal is: to provide teaching about technology
                        </i>
                        {{-- <div class="container"> --}}
                        <div class="nav text-secondary justify-content-center text-uppercase mt-4">
                            <div href="#" class="btn nav-link ms-0 text-decoration-none" title="telegram">
                                <i class="bi bi-telegram text-primary"></i>
                            </div>
                            <div href="#" class="btn nav-link ms-0 text-decoration-none" title="instagram">
                                <i class="bi bi-instagram text-primary"></i>
                            </div>
                            <div href="#" class="btn nav-link ms-0 text-decoration-none" title="whatsapp">
                                <i class="bi bi-whatsapp text-primary"></i>
                            </div>
                        </div>
                        {{-- </div> --}}
                        <div class="justify-contect-center mb-5">
                            <button type="button" id="more"
                                class="btn btn-outline-primary btn-lg text-white text-uppercase fw-semibold mb-0 my-3">
                                learn More
                                <span class="material-icons-outlined ms-2"><i class="bi bi-question-circle"></i></span>
                            </button>
                            <button type="button" id="demo"
                                class="btn btn-outline-primary btn-lg text-white text-uppercase fw-semibold mb-0 my-3">
                                View Demo
                                <span class="material-icons-outlined ms-2"><i class="bi bi-play-circle"></i></span>
                            </button>
                        </div>

                    </div>
                    <div class="col-xl-4 col-xxl-4 position-relative justify-content-between">
                        <img src="https://valleyai.net/wp-content/uploads/2023/10/Technology-and-Education.jpg"
                            alt="image" width="500" class="img-thumbnail img-fluid rounded-5 my-5">
                    </div>
                </div>
            </div>
        </section>

        <hr class="text-light mt-5">

        <section class="container px-4 py-5">
            <h2 class="text-center text-white fw-bold pb-2">Products</h2>

            <div class="row align-items-center mt-5">
                <div class="col-xl-5 col-xxl-6">
                    <div class="d-flex flex-column gap-2 align-items-start py-5">
                        <h3 class="text-white fw-bold">Lorem ipsum dolor sit amet</h3>
                        <p class="text-secondary text-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sequi aut, libero sit
                            alias soluta tempora minima similique itaque temporibus, architecto perferendis? Ipsam,
                            consectetur! Consectetur tempore eaque perspiciatis dolores ullam.
                        </p>
                        <button
                            class="btn btn-primary btn-lg text-white text-uppercase px-4 me-sm-3 rounded-5">Subscribe
                        </button>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-7 col-xxl-6 mt-5">
                    <div class="row row-cols-sm-2 g-4">
                        <div class="d-flex flex-column gap-2">
                            <div
                                class="product-icons d-inline-flex align-items-center justify-content-center bg-primary text-white fs-4 rounded-4">
                                <i class="bi bi-archive"></i>
                            </div>
                            <h4 class="text-white fw-semibold mb-0">Product 1</h4>
                            <p class="text-secondary text-light">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.
                            </p>
                        </div>
                        <div class="d-flex flex-column gap-2">
                            <div
                                class="product-icons d-inline-flex align-items-center justify-content-center bg-primary text-white fs-4 rounded-4">
                                <i class="bi bi-gear"></i>
                            </div>
                            <h4 class="text-white fw-semibold mb-0">Product 2</h4>
                            <p class="text-secondary text-light">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.
                            </p>
                        </div>
                        <div class="d-flex flex-column gap-2">
                            <div
                                class="product-icons d-inline-flex align-items-center justify-content-center bg-primary text-white fs-4 rounded-4">
                                <i class="bi bi-camera"></i>
                            </div>
                            <h4 class="text-white fw-semibold mb-0">Product 3</h4>
                            <p class="text-secondary text-light">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.
                            </p>
                        </div>
                        <div class="d-flex flex-column gap-2">
                            <div
                                class="product-icons d-inline-flex align-items-center justify-content-center bg-primary text-white fs-4 rounded-4">
                                <i class="bi bi-cart"></i>
                            </div>
                            <h4 class="text-white fw-semibold mb-0">Product 4</h4>
                            <p class="text-secondary text-light">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="bg-perimary p-5 p-sm-5 mt-5">
            <div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">

                <div class="mb-4 mb-xl-0">
                    <p class="text-white fs-3 fw-bold">New products, delivered to you.</p>
                    <p class="text-white-70">sign up for our newsletter for the latest updates.</p>
                </div>
                <div class="ms-xl-4">
                    <div class="input-group mb-2">
                        <input type="email" class="form-control rounded-1" placeholder="Email address...">
                        <button type="button" class="btn btn-outline-danger rounded-0">sign Up</button>
                    </div>
                    <p class="email text-white-70">we care about privacy and will never share your data.</p>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
