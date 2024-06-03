<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            max-width: 495px; /* Increase the max width by 10% */
            margin: auto;
            padding: 20px; /* Add padding for better appearance */
        }

        .form-label,
        .form-check-label {
            font-size: 0.85rem;
        }

        .form-control {
            font-size: 0.85rem;
        }

        .btn {
            font-size: 1rem; /* Increase button font size */
            padding: 1rem; /* Increase button padding */
        }

        .btn-register {
            width: 100%; /* Make the button width 100% */
            padding: 1.2rem; /* Increase button padding */
        }

        .text-center p {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <section class="bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center mb-4">
                        <h1 class="display-4 text-white">Innoit Labs</h1>
                        <p class="lead text-white">Passion for technology and a commitment to excellence</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-4">
                                <h2 class="text-uppercase text-center mb-4">Create an account</h2>
                                <form action="{{ route('register.post') }}" method="Post">
                                    @csrf
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="name">Your Name</label>
                                        <input type="text" id="name" class="form-control form-control-lg" name="name" />
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="email">Your Email</label>
                                        <input type="email" id="email" class="form-control form-control-lg" name="email" />
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="number">Ph Number</label>
                                        <input type="text" id="number" class="form-control form-control-lg" name="phone" />
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" class="form-control form-control-lg" name="password" />
                                    </div>
                                  
                                    {{-- <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="terms" />
                                        <label class="form-check-label" for="terms">
                                            I agree to all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                        </label>
                                    </div> --}}
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-register btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>
                                    <p class="text-center text-muted mt-4 mb-0">Already have an account? <a href="{{ route('auth.login') }}" class="fw-bold text-body"><u>Login here</u></a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
