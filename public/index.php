<?php
require_once 'config.php';

$roadmaps = [
    'web' => [
        'title' => 'Веб-разработка',
        'progress' => 65,
        'description' => 'Fullstack разработка современных веб-приложений'
    ],
    'mobile' => [
        'title' => 'Мобильная разработка',
        'progress' => 45,
        'description' => 'iOS, Android и кроссплатформенные решения'
    ],
    'games' => [
        'title' => 'Разработка игр',
        'progress' => 30,
        'description' => 'GameDev, движки и геймдизайн'
    ],
    'data-science' => [
        'title' => 'Data Science',
        'progress' => 25,
        'description' => 'Анализ данных, машинное обучение и AI'
    ]
];

$base_url = ($_SERVER['SERVER_NAME'] == 'localhost') ? "http://localhost:8080" : "https://ваш-домен";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevRoadmaps - Пути развития разработчика</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<?php include 'partials/header.php'; ?>

<main class="container">
    <section class="hero" data-aos="fade-down">
        <h1>Roadmaps for developers</h1>
        <p>Структурированные пути развития в IT-специализациях</p>
    </section>
    <section class="categories">
        <?php foreach ($roadmaps as $id => $roadmap): ?>
            <a href="<?= BASE_URL ?>/roadmaps/<?= $id ?>.php" class="category-card" data-aos="zoom-in">
                <div class="progress-circle" id="<?= $id ?>-progress"></div>
                <div class="category-info">
                    <h3><?= $roadmap['title'] ?></h3>
                    <p><?= $roadmap['description'] ?></p>
                </div>
                <i class="fas fa-arrow-right"></i>
            </a>
        <?php endforeach; ?>
    </section>
</main>

<?php include 'partials/footer.php'; ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.1.0/progressbar.min.js"></script>
<script>
    AOS.init({ duration: 800, once: true });

    // прогрес бары
    document.addEventListener('DOMContentLoaded', () => {
        <?php foreach ($roadmaps as $id => $roadmap): ?>
        new ProgressBar.Circle('#<?= $id ?>-progress', {
            color: '#6e40c9',
            trailColor: '#eee',
            strokeWidth: 6,
            duration: 1500,
            easing: 'easeInOut',
            text: {
                value: '<?= $roadmap['progress'] ?>%'
            },
            step: (state, circle) => {
                circle.setText(Math.round(circle.value() * 100) + '%');
            }
        }).animate(<?= $roadmap['progress'] / 100 ?>);
        <?php endforeach; ?>
    });
</script>
</body>
</html>

<?php
$roadmaps = [
    'web' => [
        'title' => 'Веб-разработка',
        'progress' => 65,
        'description' => 'Fullstack разработка современных веб-приложений'
    ],
    'mobile' => [
        'title' => 'Мобильная разработка',
        'progress' => 45,
        'description' => 'iOS, Android и кроссплатформенные решения'
    ],
    'games' => [
        'title' => 'Разработка игр',
        'progress' => 30,
        'description' => 'GameDev, движки и геймдизайн'
    ],
    'data-science' => [
        'title' => 'Data Science',
        'progress' => 25,
        'description' => 'Анализ данных, машинное обучение и AI'
    ]
];
?>

<script src="js/main.js"></script>
