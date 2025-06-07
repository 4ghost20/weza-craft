<?php
// Include database configuration
require_once 'config.php';

// Sample artisan data (in a real application, this would come from a database)
$artisans = [
    [
        'id' => 1,
        'name' => 'Grace Mwangi',
        'craft' => 'Basket Weaving',
        'location' => 'Nairobi, Kenya',
        'image' => 'https://images.unsplash.com/photo-1531123414780-f74242c2b052?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400',
        'bio' => "I've been weaving Kiondo baskets for over 25 years, preserving traditional techniques passed down from my grandmother.",
        'experience' => '25+ years',
        'story' => 'Growing up in rural Kenya, I learned the art of basket weaving from my grandmother. Today, I not only create beautiful baskets but also teach younger women in my community, ensuring our cultural heritage lives on.',
        'products' => [1, 4, 5] // IDs of products made by this artisan
    ],
    [
        'id' => 2,
        'name' => 'Elizabeth Odera',
        'craft' => 'Pottery',
        'location' => 'Kisumu, Kenya',
        'image' => 'https://images.unsplash.com/photo-1535295972055-1c762f4483e5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400',
        'bio' => 'As a rural caregiver, pottery has become my creative outlet and source of income. I specialize in traditional patterns.',
        'experience' => '15+ years',
        'story' => 'Pottery has been more than just a craft for me - it\'s been a lifeline. While caring for my family, I\'ve managed to build a sustainable business that celebrates our cultural heritage.',
        'products' => [2] // IDs of products made by this artisan
    ]
];

// Get artisan ID from URL
$artisan_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Find artisan by ID
$artisan = null;
foreach ($artisans as $a) {
    if ($a['id'] === $artisan_id) {
        $artisan = $a;
        break;
    }
}

// If artisan not found, redirect to main page
if (!$artisan) {
    header('Location: index.php');
    exit;
}

// Sample products data
$products = [
    [
        'id' => 1,
        'name' => 'Large Sisal Market Basket',
        'price' => 'KSh 3,500',
        'image' => 'https://images.unsplash.com/photo-1628926379972-9e8096907f46?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=600',
        'description' => 'Handwoven from sisal fiber with leather handles, perfect for shopping or home storage.'
    ],
    [
        'id' => 2,
        'name' => 'Decorative Clay Pot',
        'price' => 'KSh 2,800',
        'image' => 'https://images.unsplash.com/photo-1584589167171-541ce45f1eea?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=600',
        'description' => 'Hand-crafted clay pot with traditional patterns, perfect for home décor.'
    ],
    [
        'id' => 4,
        'name' => 'Colorful Kiondo Handbag',
        'price' => 'KSh 2,200',
        'image' => 'https://images.unsplash.com/photo-1620783770629-122b7f187703?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=600',
        'description' => 'Stylish and durable kiondo handbag woven from sisal and wool with vibrant African patterns.'
    ],
    [
        'id' => 5,
        'name' => 'Traditional Woven Table Mat',
        'price' => 'KSh 800',
        'image' => 'https://images.unsplash.com/photo-1601659856128-8a868e4f9bad?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=600',
        'description' => 'Handwoven table mat made with natural fibers and traditional patterns.'
    ]
];

// Get artisan's products
$artisan_products = array_filter($products, function($product) use ($artisan) {
    return in_array($product['id'], $artisan['products']);
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($artisan['name']); ?> - Weza Craft</title>
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
                    <a href="index.php">
                        <h1 class="brand-name">Weza Craft</h1>
                        <p class="brand-tagline">African Artisan Marketplace</p>
                    </a>
                </div>
                <button class="nav-toggle" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="nav-menu">
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="index.php#shop">Shop</a></li>
                    <li><a href="index.php#artisans">Artisans</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#contact" class="btn btn-primary">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Artisan Profile -->
    <section class="section artisan-profile">
        <div class="container">
            <div class="artisan-profile-header">
                <div class="artisan-profile-image">
                    <img src="<?php echo htmlspecialchars($artisan['image']); ?>" alt="<?php echo htmlspecialchars($artisan['name']); ?>">
                </div>
                <div class="artisan-profile-info">
                    <h1><?php echo htmlspecialchars($artisan['name']); ?></h1>
                    <p class="artisan-craft"><?php echo htmlspecialchars($artisan['craft']); ?></p>
                    <p class="artisan-location"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($artisan['location']); ?></p>
                    <p class="artisan-experience"><i class="fas fa-clock"></i> <?php echo htmlspecialchars($artisan['experience']); ?></p>
                    <div class="artisan-bio">
                        <p><?php echo htmlspecialchars($artisan['bio']); ?></p>
                    </div>
                </div>
            </div>

            <div class="artisan-story">
                <h2>My Story</h2>
                <p><?php echo htmlspecialchars($artisan['story']); ?></p>
            </div>

            <!-- Artisan's Products -->
            <div class="artisan-products">
                <h2>My Creations</h2>
                <div class="products-grid">
                    <?php foreach ($artisan_products as $product): ?>
                    <div class="product-card">
                        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                        <div class="product-info">
                            <h3 class="product-title"><?php echo htmlspecialchars($product['name']); ?></h3>
                            <div class="product-price"><?php echo htmlspecialchars($product['price']); ?></div>
                            <p class="product-description"><?php echo htmlspecialchars($product['description']); ?></p>
                            <a href="product.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
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
                        <li><a href="index.php#home">Home</a></li>
                        <li><a href="index.php#shop">Shop</a></li>
                        <li><a href="index.php#artisans">Artisans</a></li>
                        <li><a href="index.php#contact">Contact</a></li>
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
    <script src="script.js"></script>
</body>
</html> 