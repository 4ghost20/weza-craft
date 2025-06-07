<?php
// Product Detail Page
$products = [
    1 => [
        'id' => 1,
        'name' => 'Large Sisal Market Basket',
        'price' => 'KSh 3,500',
        'artisan' => 'Grace Mwangi',
        'location' => 'Nairobi, Kenya',
        'image' => 'images/Large Sisal Market Basket.jpg',
        'description' => 'This beautiful large sisal market basket is handwoven by Grace Mwangi using traditional Kenyan techniques passed down through generations. Made from sustainable sisal fiber with leather handles, it\'s perfect for shopping trips or home storage. Each basket takes approximately 3 days to complete and represents hours of skilled craftsmanship.',
        'materials' => 'Sisal fiber, leather handles',
        'dimensions' => '35cm diameter x 25cm height',
        'care_instructions' => 'Wipe clean with damp cloth. Air dry completely.',
        'shipping' => 'Ships within 3-5 business days from Nairobi'
    ],
    2 => [
        'id' => 2,
        'name' => 'Decorative Clay Pot',
        'price' => 'KSh 2,800',
        'artisan' => 'Elizabeth Odera',
        'location' => 'Kisumu, Kenya',
        'image' => 'images/Decorative Clay Pot.jpg',
        'description' => 'Hand-crafted by Elizabeth Odera using traditional pottery techniques from the Lake Victoria region. This decorative clay pot features intricate patterns inspired by Luo cultural motifs. Perfect for home décor or as a functional vessel for storing items.',
        'materials' => 'Local clay, natural pigments',
        'dimensions' => '20cm diameter x 18cm height',
        'care_instructions' => 'Handle with care. Clean gently with soft cloth.',
        'shipping' => 'Ships within 5-7 business days from Kisumu'
    ]
];

$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$product = isset($products[$product_id]) ? $products[$product_id] : $products[1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?> - Weza Craft</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Montserrat:wght@300;400;500;600&family=Caveat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
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

    <!-- Product Detail Section -->
    <section class="section" style="margin-top: 80px;">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.php">Home</a> > <a href="index.php#shop">Shop</a> > <?php echo $product['name']; ?>
            </div>
            
            <div class="product-detail">
                <div class="product-detail-grid">
                    <div class="product-image-section">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="product-detail-image">
                    </div>
                    
                    <div class="product-info-section">
                        <h1 class="product-detail-title"><?php echo $product['name']; ?></h1>
                        <div class="product-detail-price"><?php echo $product['price']; ?></div>
                        
                        <div class="artisan-info">
                            <h3>Artisan</h3>
                            <p><strong><?php echo $product['artisan']; ?></strong></p>
                            <p><i class="fas fa-map-marker-alt"></i> <?php echo $product['location']; ?></p>
                        </div>
                        
                        <div class="product-description">
                            <h3>Description</h3>
                            <p><?php echo $product['description']; ?></p>
                        </div>
                        
                        <div class="product-details">
                            <h3>Product Details</h3>
                            <ul>
                                <li><strong>Materials:</strong> <?php echo $product['materials']; ?></li>
                                <li><strong>Dimensions:</strong> <?php echo $product['dimensions']; ?></li>
                                <li><strong>Care Instructions:</strong> <?php echo $product['care_instructions']; ?></li>
                                <li><strong>Shipping:</strong> <?php echo $product['shipping']; ?></li>
                            </ul>
                        </div>
                        
                        <div class="product-actions">
                            <button class="btn btn-primary btn-large">Add to Cart</button>
                            <button class="btn btn-outline btn-large">Contact Artisan</button>
                        </div>
                    </div>
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
        .breadcrumb {
            margin-bottom: 2rem;
            font-size: 0.9rem;
        }
        
        .breadcrumb a {
            color: var(--secondary);
            text-decoration: none;
        }
        
        .breadcrumb a:hover {
            color: var(--primary);
        }
        
        .product-detail-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }
        
        .product-detail-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        .product-detail-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .product-detail-price {
            font-size: 2rem;
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 2rem;
        }
        
        .artisan-info, .product-description, .product-details {
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
        }
        
        .artisan-info h3, .product-description h3, .product-details h3 {
            color: var(--secondary);
            margin-bottom: 1rem;
        }
        
        .product-details ul {
            list-style: none;
            padding: 0;
        }
        
        .product-details li {
            margin-bottom: 0.8rem;
        }
        
        .product-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .btn-large {
            padding: 15px 30px;
            font-size: 1.1rem;
        }
        
        @media (max-width: 768px) {
            .product-detail-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .product-detail-title {
                font-size: 2rem;
            }
            
            .product-actions {
                flex-direction: column;
            }
        }
    </style>

    <script>
        // Simple smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerHeight = document.querySelector('.header').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
    <script src="accessibility.js"></script>

</body>
</html>