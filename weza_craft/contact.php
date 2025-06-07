<?php
$message_sent = false;
$error_message = '';

if ($_POST) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    if ($name && $email && $subject && $message) {
        // In a real application, you would send an email here
        // For this demo, we'll just show a success message
        $message_sent = true;
    } else {
        $error_message = 'Please fill in all fields.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Weza Craft</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Montserrat:wght@300;400;500;600&family=Caveat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
          <!-- Accessibility -->
 <div class="accessibility-controls" aria-label="Accessibility settings">
  <label>
    <input type="checkbox" id="screenReaderToggle" onchange="toggleScreenReader()" />
    Screen Reader Mode
  </label>
  <label>
    <input type="checkbox" id="contrastToggle" onchange="toggleContrast()" />
    High Contrast
  </label>
  <button onclick="changeFontSize(1)" aria-label="Increase font size">A+</button>
  <button onclick="changeFontSize(-1)" aria-label="Decrease font size">A-</button>
  <button onclick="resetAccessibility()" aria-label="Reset accessibility settings">Reset</button>
</div>

    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <div class="container">
                <div class="nav-brand">
                    <h1 class="brand-name">Weza Craft</h1>
                    <p class="brand-tagline">African Artisan Marketplace</p>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#shop">Shop</a></li>
                    <li><a href="index.php#artisans">Artisans</a></li>
                    <li><a href="contact.php" class="btn btn-primary">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Contact Section -->
    <section class="section" style="margin-top: 80px;">
        <div class="container">
            <div class="section-header">
                <h1>Contact Us</h1>
                <p class="accent-text">We'd Love to Hear From You</p>
            </div>

            <?php if ($message_sent): ?>
                <div class="success-message">
                    <i class="fas fa-check-circle"></i>
                    <h3>Thank you for your message!</h3>
                    <p>We've received your inquiry and will get back to you within 24 hours.</p>
                </div>
            <?php endif; ?>

            <?php if ($error_message): ?>
                <div class="error-message">
                    <i class="fas fa-exclamation-circle"></i>
                    <p><?php echo $error_message; ?></p>
                </div>
            <?php endif; ?>

            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    <p>Whether you're an artisan looking to join our marketplace or a customer with questions, we're here to help.</p>
                    
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>hello@wezacraft.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Phone</h4>
                            <p>+254 700 123 456</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Location</h4>
                            <p>Nairobi, Kenya</p>
                        </div>
                    </div>

                    <div class="social-links-contact">
                        <h4>Follow Us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-section">
                    <h3>Send us a Message</h3>
                    <form method="POST" class="contact-form">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required value="<?php echo $_POST['name'] ?? ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required value="<?php echo $_POST['email'] ?? ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select id="subject" name="subject" required>
                                <option value="">Choose a subject</option>
                                <option value="artisan-inquiry" <?php echo ($_POST['subject'] ?? '') === 'artisan-inquiry' ? 'selected' : ''; ?>>I want to become an artisan</option>
                                <option value="product-inquiry" <?php echo ($_POST['subject'] ?? '') === 'product-inquiry' ? 'selected' : ''; ?>>Product inquiry</option>
                                <option value="partnership" <?php echo ($_POST['subject'] ?? '') === 'partnership' ? 'selected' : ''; ?>>Partnership opportunity</option>
                                <option value="support" <?php echo ($_POST['subject'] ?? '') === 'support' ? 'selected' : ''; ?>>Customer support</option>
                                <option value="other" <?php echo ($_POST['subject'] ?? '') === 'other' ? 'selected' : ''; ?>>Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Tell us how we can help you..."><?php echo $_POST['message'] ?? ''; ?></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-large">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Artisan Application Section -->
            <div class="artisan-application">
                <div class="kente-pattern">
                    <h2>Interested in Becoming an Artisan?</h2>
                    <p>Join our community of talented African artisan caregivers and share your craft with the world.</p>
                    
                    <div class="requirements-grid">
                        <div class="requirement-item">
                            <i class="fas fa-hands"></i>
                            <h4>Authentic Craftsmanship</h4>
                            <p>You create authentic African crafts using traditional techniques</p>
                        </div>
                        <div class="requirement-item">
                            <i class="fas fa-heart"></i>
                            <h4>Caregiving Role</h4>
                            <p>You are involved in caregiving responsibilities in your community</p>
                        </div>
                        <div class="requirement-item">
                            <i class="fas fa-star"></i>
                            <h4>Quality Standards</h4>
                            <p>Your products meet our quality and authenticity standards</p>
                        </div>
                    </div>
                    
                    <a href="#" class="btn btn-light btn-large" onclick="setArtisanSubject()">Apply to Become an Artisan</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Weza Craft</h3>
                    <p>Connecting rural artisan caregivers with global markets while preserving African cultural heritage.</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#shop">Shop</a></li>
                        <li><a href="index.php#artisans">Artisans</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Weza Craft. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <style>
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 4rem;
            margin-bottom: 4rem;
        }
        
        .contact-info h3, .contact-form-section h3 {
            color: var(--secondary);
            margin-bottom: 1.5rem;
        }
        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .contact-item i {
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 0.3rem;
        }
        
        .contact-item h4 {
            margin: 0 0 0.5rem 0;
            color: var(--dark);
        }
        
        .contact-item p {
            margin: 0;
            color: var(--secondary);
        }
        
        .social-links-contact {
            margin-top: 2rem;
        }
        
        .social-links-contact h4 {
            color: var(--dark);
            margin-bottom: 1rem;
        }
        
        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--dark);
            font-weight: 500;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
        }
        
        .success-message,
        .error-message {
            text-align: center;
            padding: 2rem;
            border-radius: 12px;
            margin-bottom: 2rem;
        }
        
        .success-message {
            background: #f0f9f0;
            color: var(--success);
            border: 2px solid var(--success);
        }
        
        .error-message {
            background: #fdf0f0;
            color: var(--alert);
            border: 2px solid var(--alert);
        }
        
        .success-message i,
        .error-message i {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .artisan-application {
            background: var(--light);
            border-radius: 12px;
            padding: 3rem;
            text-align: center;
            position: relative;
            margin-top: 4rem;
        }
        
        .artisan-application h2 {
            color: var(--dark);
            margin-bottom: 1rem;
        }
        
        .requirements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }
        
        .requirement-item {
            text-align: center;
        }
        
        .requirement-item i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .requirement-item h4 {
            color: var(--dark);
            margin-bottom: 0.8rem;
        }
        
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .requirements-grid {
                grid-template-columns: 1fr;
            }
            
            .artisan-application {
                padding: 2rem;
            }
        }
    </style>

    <script>
        function setArtisanSubject() {
            document.getElementById('subject').value = 'artisan-inquiry';
            document.getElementById('subject').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
    <script>
        
    let screenReaderEnabled = false;

function speakText(text) {
    if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'en-GB';
        speechSynthesis.cancel(); // Stop previous speech
        speechSynthesis.speak(utterance);
    }
}

function toggleScreenReader() {
    screenReaderEnabled = document.getElementById('screenReaderToggle').checked;

    if (screenReaderEnabled) {
        speakText("Screen reader mode enabled. Press R to read page content.");
    } else {
        speakText("Screen reader mode disabled.");
        speechSynthesis.cancel();
    }
}

// Allow pressing "R" to read content
document.addEventListener('keydown', function(e) {
    if (screenReaderEnabled && e.key.toLowerCase() === 'r') {
        const mainContent = document.body.innerText || '';
        speakText(mainContent.substring(0, 1000)); // Limit to first 1000 characters
    }
});
</script>
    <script src="accessibility.js"></script>

</body>
</html>