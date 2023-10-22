<!DOCTYPE html>
<html>

<head>
    <title>Cabs Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional custom styles for responsiveness */
        .footer-column {
            margin-bottom: 20px;
        }

        .custom-img-height {
    height: 300px; /* Adjust the height as per your requirement */
    object-fit: cover; /* Maintain the image's aspect ratio and cover the entire container */
}

    </style>
</head>

<body>

    <!-- Include the header -->
    <div>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="index.php">Travelanza</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Bookings
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="flights.php">Flights</a>
                                    <a class="dropdown-item" href="hotels.php">Hotels</a>
                                    <a class="dropdown-item" href="trainsindex.php">Trains</a>
                                    <a class="dropdown-item" href="buses.php">Buses</a>
                                    <a class="dropdown-item" href="cabs.php">Cabs</a>
                                    <a class="dropdown-item" href="attractions.php">Attractions</a>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        </ul>
                    </div>
                    <div class="ml-auto">
                        <a class="btn btn-light" href="login.php">Login</a>
                        <a class="btn btn-primary" data-toggle="modal" data-target="#registrationModal"
                            href="#">Register</a>
                    </div>
                </div>
            </nav>
        </header>

    </div>

    <!-- Main Content of the Webpage -->
    <div class="container mt-4">
        <!-- Your main content here -->
        <div class="text-center">
            <h1>Welcome to Travelanza!</h1>
            <p>Enjoy a seamless travel experience with us.</p>
        </div>

        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">Ride Ease</h5> <!-- Added title above the image -->
            <img src="ca1.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Experience the ultimate comfort and convenience with RideEase, where every journey is a smooth and delightful ride.</p>
				<p>65 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 56 mins ago</small></p>
                              <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">Speedy Cab</h5> <!-- Added title above the image -->
            <img src="ca2.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Get to your destination in record time with SpeedyCab, where swift and reliable service is just a ride away.</p>
				<p>55 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 7 mins ago</small></p>
                              <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">Metro Mover</h5> <!-- Added title above the image -->
            <img src="ca3.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Let MetroMover take you on a seamless journey through the city, offering a modern and efficient way to explore urban landscapes.</p>
				<p>62 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 38 mins ago</small></p>
                               <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">Express Wheels</h5> <!-- Added title above the image -->
            <img src="ca4.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Unleash the power of convenience with ExpressWheels, your go-to choice for quick and hassle-free travel experiences.</p>
				<p>84 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 8 mins ago</small></p>
                              <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">Turbo Taxi</h5> <!-- Added title above the image -->
            <img src="ca5.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Feel the rush of efficiency and speed with TurboTaxi, your turbocharged solution for prompt and exhilarating rides across town.</p>
				<p>23 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 16 mins ago</small></p>
                               <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
		
		        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">Ride Ease</h5> <!-- Added title above the image -->
            <img src="ca6.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Experience the ultimate comfort and convenience with RideEase, where every journey is a smooth and delightful ride.</p>
				<p>65 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 56 mins ago</small></p>
                              <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">Speedy Cab</h5> <!-- Added title above the image -->
            <img src="ca7.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Get to your destination in record time with SpeedyCab, where swift and reliable service is just a ride away.</p>
				<p>55 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 7 mins ago</small></p>
                              <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">Metro Mover</h5> <!-- Added title above the image -->
            <img src="ca8.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Let MetroMover take you on a seamless journey through the city, offering a modern and efficient way to explore urban landscapes.</p>
				<p>62 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 38 mins ago</small></p>
                               <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">Express Wheels</h5> <!-- Added title above the image -->
            <img src="ca9.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Unleash the power of convenience with ExpressWheels, your go-to choice for quick and hassle-free travel experiences.</p>
				<p>84 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 8 mins ago</small></p>
                              <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">Turbo Taxi</h5> <!-- Added title above the image -->
            <img src="ca10.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Feel the rush of efficiency and speed with TurboTaxi, your turbocharged solution for prompt and exhilarating rides across town.</p>
				<p>23 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 16 mins ago</small></p>
                               <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
            
    </div>

    <!-- Include the footer -->
    <div class="container-fluid" style="background-color: black; color: var(--white); padding: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-column">
                    <h3>Travelanza</h3>
                    <p>Where Excellence Takes Flight. With a strong commitment to customer satisfaction and a passion
                        for air travel, Travelanza Airlines offers exceptional service and seamless journeys.</p>
                    <p>From friendly smiles to state-of-the-art aircraft, we connect the world, ensuring safe, comfortable,
                        and unforgettable experiences.</p>
                </div>
                <div class="col-lg-4 col-md-6 footer-column">
                    <h4>INFORMATION</h4>
                    <p>Home</p>
                    <p>About</p>
                    <p>Offers</p>
                    <p>Seats</p>
                    <p>Destinations</p>
                </div>
                <div class="col-lg-4 col-md-6 footer-column">
                    <h4>CONTACT</h4>
                    <p>Support</p>
                    <p>Media</p>
                    <p>Socials</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 text-center text-md-left">
                    <p class="small">Copyright @ 2023 Web Design Mastery. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <a href="#" style="text-decoration: none; color: var(--white);"><i class="ri-facebook-fill"></i></a>
                    <a href="#" style="text-decoration: none; color: var(--white);"><i class="ri-twitter-fill"></i></a>
                    <a href="#" style="text-decoration: none; color: var(--white);"><i class="ri-instagram-line"></i></a>
                    <a href="#" style="text-decoration: none; color: var(--white);"><i class="ri-youtube-fill"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
