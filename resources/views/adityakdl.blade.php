<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{URL::asset('assets/logo.ico')}}" type="icon">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <script src="{{URL::asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Aditya & Co.</title>
    <style>
        .container-fluid {
            position: relative;
            padding: 0;
        }
        .container-fluid img {
            width: 100%;
            height: auto;
        }
        .text-overlay {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 5px;
            font-size: 1.5rem; /* Adjust as needed */
        }
        .know_more{
            background-color:none;
            border:1px solid white;
            padding:15px;
            font-size:18px;
            color:white;
            text-decoration:none;
            border-radius:8px;
        }

        .know_more:hover{
            background-color:rgba(240,0,0,0.7);
            color:white;
            border:1px solid rgba(240,0,0,0.7);
        }

        .card-custom {
            width: 24rem; /* Adjust width as needed */
            margin-bottom: 20px; /* Add margin for spacing between rows */
            transition: transform 0.3s ease;
        }
        .card-img-top {
            height: 220px; /* Adjust height to fit your design */
            object-fit: cover;

        }
        
        .card-custom:hover{
            transition: transform 0.3s ease;
            transform: scale(1.05);
        }

        @media screen {
            
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{URL::asset('assets/2.png')}}" class="img-fluid" alt="Company Logo" style="width:40px;">
                <img src="{{URL::asset('assets/1.png')}}" alt="Aditya & Co Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#records">Records</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Section Ends -->

    <!-- Body Section Begins -->
    <div class="container-fluid mx-0 px-0">
        <img src="{{URL::asset('assets/carousel/1.jpg')}}" class="img-fluid" alt="Responsive image">
        <div class="text-overlay">
            <h2>Welcome to <span class="text-danger">Aditya & Co. </span>,your trusted partner in global logistics and shipping solutions. With years of experience and a commitment to excellence, we deliver the best service in the industry.</h2>
            <div style="padding:30px">
                <a href="#services" class="know_more">Know More</a>
            </div>
        </div>
    </div>

    <!-- Service section begins -->
    <div id="services" style="padding-top:80px;">
        <center><h3 class="text-dark" style="padding:30px;">Our Services</h3></center>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom p-2">
                        <img class="card-img-top" src="{{URL::asset('assets/Services/1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Shipping Agents</h5><hr>
                            <p class="card-text">At Aditya & Co. , we pride ourselves on delivering reliable and efficient shipping agency services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom p-2">
                        <img class="card-img-top" src="{{URL::asset('assets/Services/2.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">C & F Agents</h5><hr>
                            <p class="card-text">We offer expert C&F Agency services designed to streamline your shipping and logistics operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom p-2">
                        <img class="card-img-top" src="{{URL::asset('assets/Services/3.jpeg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">International Freight Booking</h5><hr>
                            <p class="card-text">We offer reliable international freight booking services to ensure your cargo arrives safely and on time.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom p-2">
                        <img class="card-img-top" src="{{URL::asset('assets/Services/4.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">NVOCC Agents</h5><hr>
                            <p class="card-text">Our NVOCC services ensure your international freight is delivered safely and on time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom p-2">
                        <img class="card-img-top" src="{{URL::asset('assets/Services/5.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Handling & Transportation</h5><hr>
                            <p class="card-text">Our handling and transportation services ensure your goods are delivered safely and on schedule.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom p-2">
                        <img class="card-img-top" src="{{URL::asset('assets/Services/6.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Stevedoring</h5><hr>
                            <p class="card-text">Our stevedoring services ensure efficient and secure cargo handling during loading and unloading.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom p-2">
                        <img class="card-img-top" src="{{URL::asset('assets/Services/8.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Ship Broking & Chartering</h5><hr>
                            <p class="card-text">Our ship broking and chartering services find the best shipping solutions for efficient and cost-effective voyages.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom p-2">
                        <img class="card-img-top" src="{{URL::asset('assets/Services/9.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Trading</h5><hr>
                            <p class="card-text">We excel in trading goods, delivering market access and insights to optimize your supply chain and boost profitability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom p-2">
                        <img class="card-img-top" src="{{URL::asset('assets/Services/10.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">ISO Tanks & Special Equipments</h5><hr>
                            <p class="card-text">We provide high-quality ISO tanks and special equipment for secure and reliable cargo handling.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section Ends -->

    <center>
        <hr style="width:80%">
    </center>

    <!-- Contact Section Begins -->
    <div id="contact" style="padding-top:30px;">
        <center><h3 class="text-dark" style="padding:30px;">Contact Us</h3></center>
        <div class="container-fluid p-4 bg-secondary">
            <div class="row">
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1835.4450069551565!2d70.13149098323032!3d23.064493533104294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3950b992b3cc1779%3A0x4761e9b3ca8027d!2sCorporate%20Park%2C%20Sector%208%2C%20Gandhidham%2C%20Gujarat%20370203!5e0!3m2!1sen!2sin!4v1644153216268!5m2!1sen!2sin" width="100%" height="450" style="border:1px solid black; border-radius:15px;" allowfullscreen="" class="embed-responsive-item" loading="lazy"></iframe>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body overflow-auto">
                            <center>
                                <h4 class="">Enquiry</h4>
                            </center>
                            <form>
                                <div class="row">
                                    <di class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                                        </div>
                                    </di>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Company Name">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <di class="col">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                                        </div>
                                    </di>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Mobile">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Company Address"></textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                                </div>
                                <br>
                                <!-- <div class="d-flex justify-content-center"> -->
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                <!-- </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section Ends -->
</body>
</html>
