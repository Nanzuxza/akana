<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$title = ucfirst($page);

// Define common metadata
$meta = [
    'title' => "AKANA Atelier | $title",
    'description' => "Discover premium custom attire at AKANA Atelier. Tailored suits, bridal wear, and formal outfits crafted with precision and style in Makassar.",
    'keywords' => "custom suits Makassar, bridal wear Makassar, tailor Makassar, premium attire, AKANA Atelier",
    'image' => "https://yourwebsite.com/img/og-image.jpg",
    'url' => "https://yourwebsite.com"
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title><?php echo $meta['title']; ?></title>
    <meta name="description" content="<?php echo $meta['description']; ?>">
    <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
    <meta name="author" content="AKANA Atelier">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $meta['title']; ?>">
    <meta property="og:description" content="<?php echo $meta['description']; ?>">
    <meta property="og:image" content="<?php echo $meta['image']; ?>">
    <meta property="og:url" content="<?php echo $meta['url']; ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $meta['title']; ?>">
    <meta name="twitter:description" content="<?php echo $meta['description']; ?>">
    <meta name="twitter:image" content="<?php echo $meta['image']; ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.png">
    <link rel="manifest" href="./site.webmanifest">

    <!-- Preload Critical Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" as="style">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        /* Custom Properties */
        :root {
            --primary-font: 'Roboto', sans-serif;
            --heading-font: 'Playfair Display', serif;
            --whatsapp-green: #25D366;
        }

        /* Base Styles */
        body {
            font-family: var(--primary-font);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: var(--heading-font);
        }

        /* Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* WhatsApp Float Button */
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 100;
            animation: float 3s ease-in-out infinite;
        }

        .whatsapp-float .tooltip {
            transform: translateX(10px);
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover .tooltip {
            transform: translateX(0);
            opacity: 1;
        }

        /* Page Transitions */
        .page-transition {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen bg-gradient-to-br from-gray-50 to-white">
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Main Content -->
    <main class="flex-grow page-transition">
        <?php
        $valid_pages = ['home', 'about', 'services', 'gallery', 'contact'];
        if (in_array($page, $valid_pages)) {
            include "pages/$page.php";
        } else {
            include 'pages/home.php';
        }
        ?>

        <!-- WhatsApp Floating Button -->
        <div class="whatsapp-float">
            <a href="https://api.whatsapp.com/send?phone=628884377084" target="_blank" rel="noopener noreferrer" class="bg-green-500 text-white w-16 h-16 flex items-center justify-center rounded-full shadow-lg hover:bg-green-600 transition-all transform hover:scale-110 group relative">
                <i class="fa-brands fa-whatsapp text-3xl"></i>
                <span class="tooltip absolute right-20 top-1/2 -translate-y-1/2 bg-gray-800 text-white text-sm px-3 py-2 rounded-md opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                    Chat with Us!
                </span>
            </a>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script defer src="https://kit.fontawesome.com/94928c5520.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Page Load Animation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('page-transition');
        });
    </script>
</body>

</html>