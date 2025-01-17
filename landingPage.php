<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Recall</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="landingPage.css">
</head>
<body>

<!--nav bar-->
    <nav class="navbar navbar-expand-lg bg-light border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="quick recall logo.png" alt="Quick Recall Logo" class="img-fluid" style="height: 25px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-center ms-2">
                    <li class="nav-item"><a class="nav-link me-3" href="#hero-section">Home</a></li>
                    <li class="nav-item"><a class="nav-link me-3" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link me-3" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link me-3" href="#contact">Contact</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="btn btn-primary px-4 me-2" href="#signup">Sign Up</a></li>
                    <li class="nav-item"><a class="btn btn-outline-primary px-4" href="#login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- hero section -->
<section id="hero-section" class="text-center py-6">
    <div class="container">
        <h1><span class="highlight-hero">Master</span> Anything, Anytime</h1>
        <p class="lead my-4">Unlock your full learning potential with Quick Recall. Create, organize, and review flashcards effortlessly on any device. Whether you're preparing for exams, learning a new language, or mastering new skills helps boost your retention and achieve your goals faster.</p>
        <a href="#signup" class="btn btn-lg custom-btn-hero">Get Started</a>
    </div>
</section>

<!-- about section -->
<section id="about" class="py-6 text-center">
    <div class="container">
        <h1 class="mb-4">What is <span class="highlight-about">Quick Recall?</span></h1>
        <p class="mb-3">At Quick Recall, we're on a mission to revolutionize the way you learn and retain information. Our flashcard app is designed to help you study smarter, not harder, by providing a streamlined and user-friendly experience for creating, organizing, and reviewing flashcards.</p>
        <p class="mb-0">Whether you're preparing for exams, learning a new language, or mastering a new skill, Quick Recall offers the tools to make your study sessions more efficient and effective.</p>
    </div>
</section>

<!-- features section -->
<section id="features" class="py-6">
    <div class="container">
        <div class="row text-center">
            <h1 class="mb-5">Discover the <span class="highlight-features">Power</span> of Quick Recall</h1>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <h3 class="card-title">Create Flashcards</h3>
                        <p class="card-text">Easily create flashcards on any topic and organize them as needed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <h3 class="card-title">Quick Recall Mode</h3>
                        <p class="card-text">Review and test your knowledge with our quick recall mode for faster learning.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <h3 class="card-title">Track Progress</h3>
                        <p class="card-text">Monitor your learning progress with built-in stats and analytics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact section -->
<section id="contact" class="py-6 text-center">
    <div class="container">
        <h2 class="mb-4">Contact Us</h2>
        <p class="mb-4">If you have any questions or feedback, feel free to reach out to us.</p>
        <form>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control mb-3" placeholder="Name" required>
                    <input type="email" class="form-control mb-3" placeholder="Email" required>
                    <textarea class="form-control mb-3" rows="5" placeholder="Message" required></textarea>
                    <button type="submit" class="btn btn-contact w-100">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- footer -->
<footer class="footer py-3 text-center">
    <p class="mb-0">© 2024 Quick Recall. All rights reserved.</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
