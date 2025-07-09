document.addEventListener('DOMContentLoaded', () => {
    // Мобильное меню
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (mobileToggle && mainNav) {
        mobileToggle.addEventListener('click', () => {
            mainNav.style.display = mainNav.style.display === 'flex' ? 'none' : 'flex';
        });

        // Закрытие меню при клике на пункт
        document.querySelectorAll('.main-nav a').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 768) {
                    mainNav.style.display = 'none';
                }
            });
        });
    }

    // Адаптивное меню
    function handleResize() {
        if (window.innerWidth > 768) {
            mainNav.style.display = 'flex';
        } else {
            mainNav.style.display = 'none';
        }
    }

    window.addEventListener('resize', handleResize);
    handleResize();
});