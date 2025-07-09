<?php
require_once __DIR__ . '/../config.php';

$roadmapJson = file_get_contents(__DIR__ . '/../data/data-science.json');
$roadmap = json_decode($roadmapJson, true);

if (!$roadmap) {
    die("Ошибка загрузки данных");
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $roadmap['title'] ?> | DevRoadmaps</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/roadmap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
    <section class="roadmap-header">
        <a href="<?= BASE_URL ?>/index.php" class="back-button">
            <i class="fas fa-arrow-left"></i> Все дорожные карты
        </a>
        <h1 data-aos="fade-down"><?= $roadmap['title'] ?></h1>
        <p data-aos="fade-down" data-aos-delay="100"><?= $roadmap['description'] ?></p>

        <div class="roadmap-progress" data-aos="fade-up">
            <div class="progress-bar">
                <div class="progress" style="width: 25%"></div>
            </div>
            <span>Общий прогресс: 25%</span>
        </div>
    </section>

    <div class="roadmap-container">
        <?php foreach ($roadmap['levels'] as $index => $level): ?>
            <div class="roadmap-level" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                <div class="level-header">
                    <div class="level-number"><?= $index + 1 ?></div>
                    <h2><?= $level['title'] ?></h2>
                </div>

                <div class="skills-grid">
                    <?php foreach ($level['skills'] as $skill): ?>
                        <div class="skill-card" data-resources='<?= json_encode($skill['resources'] ?? []) ?>'>
                            <div class="skill-info">
                                <h3><?= $skill['name'] ?></h3>
                                <div class="skill-progress">
                                    <div class="progress-bar" style="width: <?= $skill['progress'] ?>%"></div>
                                </div>
                                <span class="progress-value"><?= $skill['progress'] ?>%</span>
                            </div>
                            <div class="skill-actions">
                                <button class="btn-resources">
                                    <i class="fas fa-book"></i> Ресурсы
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?= BASE_URL ?>/js/roadmap.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        offset: 20
    });

    // Инициализация прогресс-баров при скролле
    document.addEventListener('DOMContentLoaded', () => {
        const progressBars = document.querySelectorAll('.skill-progress .progress-bar');
        progressBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.transition = 'width 1.5s ease-in-out';
                bar.style.width = width;
            }, 300);
        });
    });
</script>
</body>
</html>