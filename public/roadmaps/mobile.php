<?php
$roadmapJson = file_get_contents('../data/mobile.json');
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
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/roadmap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<?php include '../partials/header.php'; ?>

<main class="container">
    <section class="roadmap-header">
        <h1 data-aos="fade-down"><?= $roadmap['title'] ?></h1>
        <p data-aos="fade-down" data-aos-delay="100"><?= $roadmap['description'] ?></p>
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
                        <div class="skill-card">
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

<?php include '../partials/footer.php'; ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="../js/roadmap.js"></script>
<script>
    AOS.init({ duration: 800, once: true });
</script>
</body>
</html>