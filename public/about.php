<?php include 'partials/header.php'; ?>
<?php require_once 'config.php'; ?>

<main class="container">
    <section class="about-section" data-aos="fade-down">
        <h1>О проекте DevRoadmaps</h1>
        <p>Проект создан в качестве летней практики для помощи начинающим разработчикам в выборе пути обучения</p>
    </section>

    <div class="team-grid">
        <div class="team-member" data-aos="fade-up">
            <div class="member-avatar">
                <i class="fas fa-user"></i>
            </div>
            <h3>Frontend Developer - Максим Трушников</h3>
            <p>Отвечал за создание пользовательского интерфейса, анимации и адаптивность</p>
        </div>

        <div class="team-member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-avatar">
                <i class="fas fa-user"></i>
            </div>
            <h3>Backend Developer - Андрей Богатов</h3>
            <p>Реализовал систему загрузки данных, структуру проекта и API</p>
        </div>

        <div class="team-member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-avatar">
                <i class="fas fa-user"></i>
            </div>
            <h3>DevOps Engineer - Ролан Швецов</h3>
            <p>Настроил Docker-окружение, сервер и процесс развертывания</p>
        </div>
    </div>

    <section class="project-info">
        <h2>Технологии проекта</h2>
        <ul>
            <li><strong>Frontend:</strong> HTML5, CSS3, JavaScript, AOS, ProgressBar.js</li>
            <li><strong>Backend:</strong> PHP 8.2</li>
            <li><strong>Инфраструктура:</strong> Docker, Apache</li>
            <li><strong>Инструменты:</strong> PHPStorm, Git, Docker Compose</li>
        </ul>
    </section>
</main>

<?php include 'partials/footer.php'; ?>

<script>
    AOS.init({ duration: 800, once: true });
</script>