
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jailbreak Strict</title>
    <link rel="icon" href="Images/strict.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
body {
    background-color: #f8f9fa;
    color: #495057;
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: top 0.3s ease-in-out;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    padding: 17px;
    font-weight: bold;
}

.navbar.sticky {
    top: -72px;
    background-color: #ffffff; 
}

.navbar-brand {
    font-weight: bold;
    color: #007bff;
}

.navbar-toggler-icon {
    color: #007bff;
}

.navbar-nav .nav-link {
    color: #495057 !important;
}

/* Jumbotron Styles */
.jumbotron {
    background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('Images/strict.jpg');
    background-position: center;
    background-size: cover;
    color: #ffffff;
    height: 89vh;
    padding: 4rem 2rem;
    border-radius: 15px;
    margin-top: 75px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.jumbotron h1 {
    font-weight: bold;
    font-size: 2.5rem;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.jumbotron p {
    font-size: 1.2rem;
    margin-bottom: 1.5rem;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.jumbotron a.btn {
    font-size: 1.2rem;
    padding: 0.7rem 2rem;
}

/* Footer Styles */
.footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: #ffffff;
    color: #495057;
    padding: 1rem 0;
    box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
}

/* Feature Styles */
.feature-icon {
    font-size: 3rem;
    color: #007bff;
    margin-bottom: 1rem;
}

.feature-title {
    font-weight: bold;
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.feature-description {
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
}

/* Staff Styles */
.rounded-circle.staff-img {
    border-radius: 50%;
    width: 130px;
    height: 130px;
    object-fit: cover;
    margin-bottom: 15px;
}

.staff-member {
    margin-bottom: 70px;
}

.badge-admin {
    font-size: 15px;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .jumbotron {
        height: 80vh;
        padding: 2rem 1rem;
    }

    .navbar {
        padding: 10px;
    }

    .navbar-brand {
        font-size: 18px;
    }

    .navbar-toggler-icon {
        font-size: 20px;
    }

    .feature-icon {
        font-size: 2rem;
    }

    .feature-title {
        font-size: 1.3rem;
    }

    .feature-description {
        font-size: 1rem;
    }

    .staff-img {
        width: 100px;
        height: 100px;
        margin-bottom: 10px;
    }

    .staff-member {
        margin-bottom: 50px;
    }

    .badge-admin {
        font-size: 13px;
    }

    .footer {
        padding: 0.5rem 0;
    }
}
.request-midman-btn a {
            color: #fff;
            transition: all 0.3s ease-in-out;
            width: 50%;
        }

        .request-midman-btn:hover a{
            text-decoration: none;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <a class="navbar-brand" class="nav-link" href="#" style="font-size: 20px; color: #495057;">JAILBREAK STRICT</a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#aboutModal">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../jailbreakstrict/jbserver/index.html">JB Server</a>
                </li>
                <!-- More dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://www.facebook.com/groups/1144089229481742/posts/1405455396678456">Staff's Vouches</a>
                        <a class="dropdown-item" href="#services" onclick="scrollToSection('services')">Services</a>
                        <a class="dropdown-item" href="#feedback" onclick="scrollToSection('feedback')">Feedback</a>
                        <a class="dropdown-item" href="#footer" onclick="scrollToSection('footer')">Footer</a>
                        <button id="openModalBtn" class="dropdown-item" data-toggle="modal" data-target="#supportModal">General Support</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Report Modal -->
<div class="modal fade" id="supportModal" tabindex="-1" role="dialog" aria-labelledby="supportModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="supportModalLabel">General Support</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>If you need assistance or want to report something, please fill out the form below:</p>
          <form action="" method="POST">
            <div class="form-group">
              <label for="issue">Issue:</label>
              <textarea class="form-control" id="issue" name="issue" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="reason">Reason:</label>
              <select class="form-control" id="reason" name="reason">
                <option value="general">General Inquiry</option>
                <option value="scam">Report Scamming</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="facebookLink">Facebook Link of Scammer:</label>
              <input type="text" class="form-control" id="facebookLink" name="facebookLink">
            </div>
            <div class="form-group">
              <label for="photos">Attach Photos as Proof: </label>
              <input type="file" class="form-control-file" id="photos" name="photos[]" multiple>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  

<script>
    function scrollToSection(sectionId) {
        var targetSection = document.getElementById(sectionId);

        targetSection.scrollIntoView({ behavior: 'smooth' });
    }

</script>


<div class="jumbotron text-center">
    <div class="container">
        <h1 class="display-4">JAILBREAK STRICT</h1>
        <p class="lead">In this group, you can trade and cross trade, recruit gang members, and post jailbreak clips.</p>
        <a class="btn btn-primary btn-lg" href="https://www.facebook.com/groups/1144089229481742" role="button">JOIN US!</a>
    </div>
</div>
<br>
<br>
<hr>
<br>
<br>
<br>

<!-- Additional Features -->
<div id="services" class="container text-center mb-5">
    <h2>Our Services</h2>
    <br>
        <div class="row">
            <div class="col-lg-4">
                <i class="fas fa-shield-alt feature-icon"></i>
                <h2 class="feature-title">Quality Midman Service</h2>
                <p class="feature-description">We provide top-notch midman services to ensure safe transactions.</p>
            </div>
            <div class="col-lg-4">
                <i class="fas fa-tachometer-alt feature-icon"></i>
                <h2 class="feature-title">Fast Transaction</h2>
                <p class="feature-description">Experience quick and efficient transactions with minimal wait times.</p>
            </div>
            <div class="col-lg-4">
                <i class="fas fa-lock feature-icon"></i>
                <h2 class="feature-title">Safe 100% Payment</h2>
                <p class="feature-description">Your payments are secured and guaranteed to be safe.</p>
            </div>
            <div class="col-lg-4">
                <i class="fas fa-user-check feature-icon"></i>
                <h2 class="feature-title">All Staff Legit</h2>
                <p class="feature-description">Our staff members are verified and trustworthy professionals.</p>
            </div>
            <div class="col-lg-4">
                <i class="fas fa-exchange-alt feature-icon"></i>
                <h2 class="feature-title">Trading/Selling/Buying</h2>
                <p class="feature-description">Engage in our trading, selling, and buying platform for exciting opportunities!</p>
            </div>            
            <div class="col-lg-4">
                <i class="fas fa-headset feature-icon"></i>
                <h2 class="feature-title">24/7 Support</h2>
                <p class="feature-description">Our support team is available around the clock to assist you.</p>
            </div>
        </div>
    </div>

<hr>
<br>
<br>
<br>

<!-- New Section -->
<div class="container text-center mb-5">
    <h2>Additional Resources</h2>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-4">
            <h3>Blog</h3>
            <p>Explore our blog for the latest updates and news about our group.</p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#blogModal">Read More</a>
        </div>
        <div class="col-lg-4">
        <h3>Giveaway Event</h3>
            <p>Join our exciting giveaway event for a chance to win amazing prizes!</p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#eventsModal">View Events</a>
        </div>
        <div class="col-lg-4">
            <h3>FAQs</h3>
            <p>Find answers to frequently asked questions about our services and platform.</p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#faqsModal">FAQs</a>
        </div>
    </div>
</div>

<br>
<hr>
<!-- Blog Modal -->
<div class="modal fade" id="blogModal" tabindex="-1" role="dialog" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="blogModalLabel">Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>We are excited to announce that we have a new permitted midman, Julian Pedery.</p>
                <p>Julian brings a wealth of experience and expertise to our team, ensuring safe and efficient transactions for all our users.</p>
                <p>Stay tuned for insightful articles and updates about our services, including tips and best practices for secure transactions.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Giveaway Event Modal -->
<div class="modal fade" id="eventsModal" tabindex="-1" role="dialog" aria-labelledby="eventsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventsModalLabel">Giveaway Event in Jailbreak Strict</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Jailbreak Strict Giveaway Event Content -->
                <p>Join us for an exciting giveaway event in Jailbreak Strict!</p>
                <p>Participate for a chance to win exclusive prizes and rewards.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Jailbreak Strict FAQs Modal -->
<div class="modal fade" id="faqsModal" tabindex="-1" role="dialog" aria-labelledby="faqsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="faqsModalLabel">FAQs about Jailbreak Strict</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>1. Is payment on Jailbreak Strict 100% secured?</p>
                <p>Yes, we ensure that all payments made on Jailbreak Strict are 100% secured using industry-standard encryption and security measures.</p>
                <p>2. Are all staff members on Jailbreak Strict legitimate?</p>
                <p>Absolutely, all staff members on Jailbreak Strict are thoroughly vetted and verified to ensure trustworthiness and professionalism.</p>
                <p>3. How fast are transactions processed on Jailbreak Strict?</p>
                <p>Transactions on Jailbreak Strict are processed swiftly, ensuring minimal wait times for our users.</p>
                <p>4. What is Quality Midman Service on Jailbreak Strict?</p>
                <p>Our Quality Midman Service guarantees safe and secure transactions, providing peace of mind to all parties involved.</p>
                <p>5. Is there 24/7 support available on Jailbreak Strict?</p>
                <p>Yes, we offer round-the-clock support to assist our users with any queries or concerns they may have.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container text-center mb-5">
        <h2>Jailbreak Strict Staff</h2>
        <br>
        <h3>Admins</h3>
        <br>
        <div class="row">
            <div class="col-lg-4 staff-member">
                <img src="Images/Khalil.jpg" alt="Khalil" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Khalil</h4>
                <span class="badge badge-primary badge-admin">Group Owner</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/khalil.nathaniel/">Request Midman</a></button>
            </div>
            <div class="col-lg-4 staff-member">
                <img src="Images/Irwin.jpg" alt="Irwin Carl Geroy" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Irwin Carl Geroy</h4>
                <span class="badge badge-primary badge-admin">Head Admin</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/ItzyaboiC4RL">Request Midman</a></button>
            </div>
            <div class="col-lg-4 staff-member">
                <img src="Images/Oscar.jpg" alt="Oscar Calunsag" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Oscar Calunsag</h4>
                <span class="badge badge-primary badge-admin">Admin</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/oscar.calunsag.3/">Request Midman</a></button>
            </div>
            <div class="col-lg-4 staff-member">
                <img src="Images/Izana.jpg" alt="Izana Kurokawa" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Izana Kurokawa</h4>
                <span class="badge badge-primary badge-admin">Admin</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/profile.php?id=100084200971598">Request Midman</a></button>
            </div>
            <div class="col-lg-4 staff-member">
                <img src="Images/Leighanne.jpg" alt="Leighanne" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Leighanne</h4>
                <span class="badge badge-primary badge-admin">Admin</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/leighanne.0404/">Request Midwoman</a></button>
            </div>
            <div class="col-lg-4 staff-member">
                <img src="Images/Nayel.jpg" alt="Nayel" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Nayel</h4>
                <span class="badge badge-primary badge-admin">Admin</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/nayel.quiliope.33/">Request Midwoman</a></button>
            </div>
            <div class="col-lg-4 staff-member">
                <img src="Images/Lawrence.jpg" alt="Lawrence Alob" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Lawrence Alob</h4>
                <span class="badge badge-primary badge-admin">Admin</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/larwence.alob/">Request Midman</a></button>
            </div>
        </div>
        <hr>
        <br>
        <h3>Moderators</h3>
        <br>
        <div class="row">
            <div class="col-lg-4 staff-member">
                <img src="Images/Anya.jpg" alt="Anya ゝ" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Anya ゝ</h4>
                <span class="badge badge-secondary badge-admin">Moderator</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/profile.php?id=100077275148846">Request Midman</a></button>
            </div>
            <div class="col-lg-4 staff-member">
                <img src="Images/Josiah.jpg" alt="Josiah Danielle Gallenero" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Josiah Danielle Gallenero</h4>
                <span class="badge badge-secondary badge-admin">Moderator</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/josiahhhh8">Request Midman</a></button>
            </div>
            <div class="col-lg-4 staff-member">
                <img src="Images/Allyza.jpg" alt="Allyza Aclon" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Allyza Aclon</h4>
                <span class="badge badge-secondary badge-admin">Moderator</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/alysa.blanco.96">Request Midwoman</a></button>
            </div>
            <div class="col-lg-4 staff-member">
                <img src="Images/Sean.jpg" alt="Sean Michael Cagampang" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Sean Michael Cagampang</h4>
                <span class="badge badge-secondary badge-admin">Moderator</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/seanmichael.cagampang.1">Request Midman</a></button>
            </div>
            <div class="col-lg-4 staff-member">
                <img src="Images/strict.jpg" alt="Princess Espinosa" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Princess Espinosa</h4>
                <span class="badge badge-secondary badge-admin">Moderator</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/Danica342">Request Midwoman</a></button>
            </div>
            <div class="col-lg-4 staff-member">
                <img src="Images/Nick.jpg" alt="Nick Caidoy" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Nick Caidoy</h4>
                <span class="badge badge-secondary badge-admin">Moderator</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/nickxcaidoy">Request Midman</a></button>
            </div>
            <div class="col-lg-4 staff-member">
                <img src="Images/Vergara.jpg" alt="Vergara Carl" class="img-fluid rounded-circle staff-img mb-3">
                <h4>Vergara Carl</h4>
                <span class="badge badge-secondary badge-admin">Moderator</span>
                <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/profile.php?id=61555523979004">Request Midman</a></button>
            </div>
        </div>
        <hr>
        <br>
        <h3>Permitted MM/MW</h3>
        <br>
    <div class="row">
        <div class="col-lg-4 staff-member">
            <img src="Images/Julian.jpg" alt="Julian Pedery" class="img-fluid rounded-circle staff-img mb-3">
            <h4>Julian Pedery</h4>
            <span class="badge badge-info badge-admin">Permitted Midman</span>
            <br>
                <button class="btn btn-success request-midman-btn mt-2"><a href="https://www.facebook.com/profile.php?id=100080183693759">Request Midman</a></button>
        </div>
    </div>
</div>

<hr>
<br>
<br>
<div class="container mt-4">
    <div class="row">
        <!-- Social Media Accounts (Left Side) -->
        <div class="col-md-6 order-md-1 order-2">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title mb-4">Follow Us</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="https://www.facebook.com/josiahhhh8" class="text-decoration-none text-dark d-flex align-items-center" target="_blank">
                                <i class="bi bi-facebook mr-2"></i> Facebook
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Feedback Form (Right Side) -->
        <div class="col-md-6 order-md-2 order-1">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4" id="feedback">Feedback</h3>
                    <form id="feedbackForm" action="https://formspree.io/f/xyyrnoyq" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send Feedback</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.formbutton=window.formbutton||function(){(formbutton.q=formbutton.q||[]).push(arguments)};
    formbutton("create", {
        action: "https://formspree.io/joeu.gallenero.ui@phinmaed.com",
        title: "Send me a feedback!",
        fields: [
            {property: "name", label: "Your Full Name", type: "text", required: true},
            {property: "email", label: "Your Email", type: "email", required: true},
            {property: "message", label: "Your Message", type: "textarea", required: true}
        ],
        styles: {
            fontFamily: "Poppins, sans-serif",
            button: {
                backgroundColor: "#007bff"
            }
        },
        onSubmit: function(values) {
            // Handle successful form submission
            alert("Thank you for your feedback!");
        }
    });
</script>
<br>
<br>
<hr>
<br>
<br>

<div class="container mt-4" id="footer">
    <div class="row">
        <div class="col-md-6">
            <h3 class="mb-4">Jailbreak Strict</h3>
            <p>Jailbreak Strict is an Buying/Selling/Trading Group platform created by Josiah.</p>
        </div>
        <div class="col-md-6">
            <h3 class="mb-4">USEFUL LINKS</h3>
            <ul class="list-unstyled">
                <li><a href="#" class="text-decoration-none text-dark">Home</a></li>
                <a href="#" data-toggle="modal" data-target="#aboutModal" class="text-decoration-none text-dark">About us</a>
            </ul>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <h3 class="mb-4">OUR SERVICES</h3>
            <ul class="list-unstyled">
                <li>Midman Service</li>
                <li>24/7 Support</li>
                <li>All Staff Legit</li>
            </ul>
        </div>
        <div class="col-md-6">
            <!-- Contact Us -->
            <h3 class="mb-4">CONTACT US</h3>
            <p>Phone: 0910 061 6716<br>Email: anyajb014@gmail.com<br>Facebook: Josiah Danielle Gallenero / Anya </p>
        </div>
    </div>
</div>

<br>
<br>
<br>

<!-- Footer -->
<footer class="footer mt-auto py-3">
    <div class="container text-center">
        <span>&copy; 2024 Jailbreak Strict - All Rights Reserved</span>
    </div>
</footer>

    <!-- About Modal -->
    <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutModalLabel">About Jailbreak Strict</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Welcome to Jailbreak Strict, where we are committed to providing top-tier services to ensure your safety and satisfaction. Our core values include:</p>
                    <ul>
                        <li><strong>Quality Midman Service:</strong> We provide top-notch midman services to ensure safe transactions.</li>
                        <li><strong>Fast Transaction:</strong> Experience quick and efficient transactions with minimal wait times.</li>
                        <li><strong>Safe 100% Payment:</strong> Your payments are secured and guaranteed to be safe.</li>
                        <li><strong>All Staff Legit:</strong> Our staff members are verified and trustworthy professionals.</li>
                        <li><strong>Reliable Service:</strong> Count on us for reliable and consistent service every time.</li>
                        <li><strong>24/7 Support:</strong> Our support team is available around the clock to assist you.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact Developer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Contact us at</p>
                    <p>Email: anyajb014@gmail.com</p>
                    <p>Facebook: Josiah Danielle Gallenero / Anya </p>
                    <p>Phone: 0910 061 6716</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
