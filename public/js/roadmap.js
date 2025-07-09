document.addEventListener('DOMContentLoaded', () => {
    // Обработка кнопки ресурсов
    document.querySelectorAll('.btn-resources').forEach(button => {
        button.addEventListener('click', function() {
            const skillCard = this.closest('.skill-card');
            const skillName = skillCard.querySelector('h3').textContent;
            const resources = JSON.parse(skillCard.dataset.resources || '[]');

            if (resources.length === 0) {
                alert(`Ресурсы для "${skillName}" пока не добавлены.`);
                return;
            }

            let resourcesHTML = `<h3>Ресурсы для изучения: ${skillName}</h3><ul>`;
            resources.forEach(resource => {
                resourcesHTML += `<li><a href="${resource.url}" target="_blank">${resource.name}</a></li>`;
            });
            resourcesHTML += '</ul>';

            // Создаем модальное окно
            const modal = document.createElement('div');
            modal.className = 'resources-modal';
            modal.innerHTML = `
                <div class="modal-content">
                    <span class="close-btn">&times;</span>
                    ${resourcesHTML}
                </div>
            `;

            document.body.appendChild(modal);

            // Закрытие модального окна
            modal.querySelector('.close-btn').addEventListener('click', () => {
                modal.remove();
            });

            // Закрытие по клику вне окна
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.remove();
                }
            });
        });
    });

    // Анимация при скролле
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.skill-card').forEach(card => {
        observer.observe(card);
    });
});