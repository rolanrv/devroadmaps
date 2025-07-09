<?php require_once __DIR__ . '/../config.php'; ?>
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="site-header">
    <div class="container">
        <a href="<?= BASE_URL ?>/index.php" class="logo" data-aos="fade-right">
            <i class="fas fa-map-signs"></i>
            <span>DevRoadmaps</span>
        </a>

        <nav class="main-nav">
            <ul>
                <li><a href="<?= BASE_URL ?>/index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">Главная</a></li>
                <li><a href="<?= BASE_URL ?>/roadmaps/web.php" class="<?= (strpos($_SERVER['REQUEST_URI'], 'roadmaps') !== false) ? 'active' : '' ?>">Дорожные карты</a></li>
                <li><a href="<?= BASE_URL ?>/about.php" class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">О проекте</a></li>
            </ul>
        </nav>

        <div class="mobile-menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</header>