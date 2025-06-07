<?php
// Weza Craft - African Artisan Marketplace
// Sample data for demonstration

$products = [
    [
        'id' => 1,
        'name' => 'Large Sisal Market Basket',
        'price' => 'KSh 3,500',
        'artisan' => 'Grace Mwangi',
        'location' => 'Nairobi, Kenya',
        'image' => 'images/sisal baskets.jpg',
        'description' => 'Handwoven from sisal fiber with leather handles, perfect for shopping or home storage.'
    ],
    [
        'id' => 2,
        'name' => 'Decorative Clay Pot',
        'price' => 'KSh 2,800',
        'artisan' => 'Elizabeth Odera',
        'location' => 'Kisumu, Kenya',
        'image' => 'images/clay pot.jpg',
        'description' => 'Hand-crafted clay pot with traditional patterns, perfect for home décor.'
    ],
    [
        'id' => 3,
        'name' => 'Maasai Beaded Necklace',
        'price' => 'KSh 1,500',
        'artisan' => 'Njeri Wainaina',
        'location' => 'Samburu, Kenya',
        'image' => 'images/Maasai Beaded Necklace.jpg',
        'description' => 'Vibrant multi-strand beaded necklace handcrafted using traditional Maasai techniques.'
    ],
    [
        'id' => 4,
        'name' => 'Colorful Kiondo Handbag',
        'price' => 'KSh 2,200',
        'artisan' => 'Grace Mwangi',
        'location' => 'Nairobi, Kenya',
        'image' => 'images/kondo.jpg',
        'description' => 'Stylish and durable kiondo handbag woven from sisal and wool with vibrant African patterns.'
    ],
    [
        'id' => 5,
        'name' => 'Traditional Woven Table Mat',
        'price' => 'KSh 800',
        'artisan' => 'Grace Mwangi',
        'location' => 'Nairobi, Kenya',
        'image' => 'images/Traditional Woven Table Mat.jpg',
        'description' => 'Handwoven table mat made with natural fibers and traditional patterns.'
    ],
    [
        'id' => 6,
        'name' => 'African Print Cushion Cover',
        'price' => 'KSh 1,200',
        'artisan' => 'Amina Hassan',
        'location' => 'Mombasa, Kenya',
        'image' => 'images/African Print Cushion Cover.jpg',
        'description' => 'Beautiful cushion cover featuring authentic African prints and patterns.'
    ]
];

$artisans = [
    [
        'id' => 1,
        'name' => 'Grace Mwangi',
        'craft' => 'Basket Weaving',
        'location' => 'Nairobi, Kenya',
        'image' => 'https://images.unsplash.com/photo-1531123414780-f74242c2b052?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400',
        'bio' => "I've been weaving Kiondo baskets for over 25 years, preserving traditional techniques passed down from my grandmother.",
        'experience' => '25+ years'
    ],
    [
        'id' => 2,
        'name' => 'Elizabeth Odera',
        'craft' => 'Pottery',
        'location' => 'Kisumu, Kenya',
        'image' => 'https://images.unsplash.com/photo-1535295972055-1c762f4483e5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400',
        'bio' => 'As a rural caregiver, pottery has become my creative outlet and source of income. I specialize in traditional patterns.',
        'experience' => '15+ years'
    ],
    [
        'id' => 3,
        'name' => 'Njeri Wainaina',
        'craft' => 'Beadwork',
        'location' => 'Samburu, Kenya',
        'image' => 'images/Njeri Wainaina.jpg',
        'bio' => 'I create authentic Maasai beadwork while caring for my family. Each piece tells a story of our heritage.',
        'experience' => '20+ years'
    ],
    [
        'id' => 4,
        'name' => 'Amina Hassan',
        'craft' => 'Textile Arts',
        'location' => 'Mombasa, Kenya',
        'image' => 'images/Amina Hassan.jpg',
        'bio' => 'I specialize in creating beautiful textiles using traditional Swahili coastal techniques and vibrant African prints.',
        'experience' => '18+ years'
    ]
];

$testimonials = [
    [
        'content' => 'Weza Craft has transformed my life as a rural artisan. I can now sell my kiondo baskets to customers across the world while still caring for my family.',
        'author' => 'Grace Mwangi',
        'location' => 'Nairobi, Kenya',
        'rating' => 5,
        'image' => 'https://images.unsplash.com/photo-1531123414780-f74242c2b052?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400'
    ],
    [
        'content' => 'Being able to share my pottery skills with younger women in my community while earning income has been a blessing. Thank you Weza Craft!',
        'author' => 'Elizabeth Odera',
        'location' => 'Kisumu, Kenya',
        'rating' => 5,
        'image' => 'https://images.unsplash.com/photo-1535295972055-1c762f4483e5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400'
    ],
    [
        'content' => 'As a grandmother and caregiver, this platform allows me to preserve our cultural craft traditions while supporting my family financially.',
        'author' => 'Njeri Wainaina',
        'location' => 'Samburu, Kenya',
        'rating' => 5,
        'image' => 'https://images.unsplash.com/photo-1543949806-2c9935b84b20?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400'
    ]
];

$categories = [
    [
        'name' => 'Kiondo Baskets',
        'description' => 'Traditional handwoven Kenyan baskets made from sisal fiber',
        'image' => 'images/Kiondo Baskets.jpg'
    ],
    [
        'name' => 'African Pottery',
        'description' => 'Hand-crafted clay pottery with traditional designs',
        'image' => 'images/African Pottery.jpg'
    ],
    [
        'name' => 'Beaded Jewelry',
        'description' => 'Colorful handmade Maasai beadwork',
        'image' => 'images/Beaded Jewelry.jpg'
    ],
    [
        'name' => 'Handwoven Textiles',
        'description' => 'Traditional African woven fabrics and mats',
        'image' => 'images/Handwoven Textiles.jpg'
    ]
];

function generateStars($rating) {
    $stars = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) {
            $stars .= '<i class="fas fa-star"></i>';
        } else {
            $stars .= '<i class="far fa-star"></i>';
        }
    }
    return $stars;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weza Craft - African Artisan Marketplace</title>
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
            <div class="container nav-container">
                <div class="nav-brand">
                    <h1 class="brand-name">Weza Craft</h1>
                    <p class="brand-tagline">African Artisan Marketplace</p>
                </div>
                <button class="nav-toggle" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="nav-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Shop</a></li>
                    <li><a href="artisan.php">Artisans</a></li>
                    <li><a href="community.php">community</a><li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php" class="btn btn-primary">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">Empowering African Artisan Caregivers</h2>
                <p class="hero-subtitle">From Rural Hands to Global Markets</p>
                <p class="hero-text">Discover authentic handcrafted treasures while supporting rural women artisans and preserving generations of African cultural heritage.</p>
                <div class="hero-buttons">
                    <a href="#shop" class="btn btn-primary">Shop Authentic Crafts</a>
                    <a href="#artisans" class="btn btn-outline">Meet Our Artisans</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="section">
        <div class="container">
            <div class="section-header">
                <h2>Explore Craft Categories</h2>
                <p class="accent-text">Traditional African Craftsmanship</p>
            </div>
            <div class="categories-grid">
                <?php foreach ($categories as $category): ?>
                <div class="category-card">
                    <img src="<?php echo $category['image']; ?>" alt="<?php echo $category['name']; ?>">
                    <div class="category-overlay">
                        <h3><?php echo $category['name']; ?></h3>
                        <p><?php echo $category['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="shop" class="section bg-light">
        <div class="container">
            <div class="section-header">
                <h2>Featured Handcrafted Treasures</h2>
                <p class="accent-text">Each Piece Tells a Story</p>
            </div>
            <div class="products-grid">
                <?php foreach ($products as $product): ?>
                <div class="product-card">
                    
           
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">


        
                    <div class="product-info">
                        <h3 class="product-title"><?php echo $product['name']; ?></h3>
                        <p class="product-artisan">By <?php echo $product['artisan']; ?></p>
                        <p class="product-location"><i class="fas fa-map-marker-alt"></i> <?php echo $product['location']; ?></p>
                        <div class="product-price"><?php echo $product['price']; ?></div>
                        <p class="product-description"><?php echo $product['description']; ?></p>
                        <a href="product.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Artisans Section -->
    <section id="artisans" class="section kente-pattern">
        <div class="container">
            <div class="section-header">
                <h2>Meet Our Artisans</h2>
                <p class="accent-text">The Skilled Hands Behind the Crafts</p>
            </div>
            <div class="artisans-grid">
                <?php foreach ($artisans as $artisan): ?>
                <div class="artisan-card">
                    <img src="<?php echo $artisan['image']; ?>" alt="<?php echo $artisan['name']; ?>" class="artisan-img">
                    <h3 class="artisan-name"><?php echo $artisan['name']; ?></h3>
                    <p class="artisan-craft"><?php echo $artisan['craft']; ?></p>
                    <p class="artisan-location"><i class="fas fa-map-marker-alt"></i> <?php echo $artisan['location']; ?></p>
                    <p class="artisan-experience"><i class="fas fa-clock"></i> <?php echo $artisan['experience']; ?></p>
                    <p class="artisan-bio"><?php echo $artisan['bio']; ?></p>
                    <a href="artisan.php?id=<?php echo $artisan['id']; ?>" class="btn btn-primary">View Profile</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2>Our Impact</h2>
                <p class="accent-text">Empowering Communities Through Craft</p>
            </div>
            <div class="impact-grid">
                <div class="impact-item">
                    <div class="impact-icon">
                        <i class="fas fa-female"></i>
                    </div>
                    <h3>Supporting Women Caregivers</h3>
                    <p>We empower rural women who balance caregiving with crafting, enabling them to earn income while preserving cultural traditions.</p>
                </div>
                <div class="impact-item">
                    <div class="impact-icon">
                        <i class="fas fa-hands"></i>
                    </div>
                    <h3>Preserving Cultural Heritage</h3>
                    <p>Every product helps preserve generations of African craftsmanship and traditional techniques.</p>
                </div>
                <div class="impact-item">
                    <div class="impact-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Environmental Sustainability</h3>
                    <p>We promote eco-friendly materials and traditional craft methods with minimal environmental impact.</p>
                </div>
            </div>
        </div>
    </section>

    
   
    <!-- Call to Action -->
    <section class="cta">
        <div class="container">
            <h2>Join Our Community Today</h2>
            <p>Whether you're seeking authentic African treasures or want to share your craft, become part of our growing community.</p>
            <div class="cta-buttons">
                <a href="#shop" class="btn btn-light">Start Shopping</a>
                <a href="contact.php" class="btn btn-outline">Become an Artisan</a>
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
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#shop">Shop</a></li>
                        <li><a href="#artisans">Artisans</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="shipping.php">Shipping</a></li>
                        <li><a href="returns.php">Returns</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Weza Craft. All rights reserved.</p>
            </div>
        </div>
    </footer>

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
