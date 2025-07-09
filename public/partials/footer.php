<?php require_once __DIR__ . '/../config.php'; ?>

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h4>DevRoadmaps</h4>
                <p>Проект для визуализации путей развития в IT-специализациях</p>
            </div>

            <div class="footer-section">
                <h4>Навигация</h4>
                <ul>
                    <li><a href="<?= BASE_URL ?>/index.php">Главная</a></li>
                    <li><a href="<?= BASE_URL ?>/roadmaps/web.php">Дорожные карты</a></li>
                    <li><a href="<?= BASE_URL ?>/about.php">О проекте</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Контакты</h4>
                <p>Учебный проект</p>
                <div class="socials">
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                    <a href="#"><i class="fab fa-vk"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> DevRoadmaps. Учебный проект.</p>
        </div>
    </div>
</footer>