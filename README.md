# DevRoadmaps - Визуализированные дорожные карты для разработчиков

[![Docker Image](https://img.shields.io/docker/pulls/rolanrv/devroadmaps?style=flat-square)](https://hub.docker.com/r/rolanrv/devroadmaps)
[![GitHub Stars](https://img.shields.io/github/stars/rolanrv/DevRoadmaps?style=flat-square)](https://github.com/rolanrv/DevRoadmaps)

Проект предоставляет интерактивные дорожные карты для обучения различным IT-специализациям. Вдохновлен roadmap.sh, но с улучшенной визуализацией и удобной навигацией.


## Особенности

- 🚀 4 готовых дорожных карты: Веб, Мобильная разработка, Игры и Data Science
- 📚 Ресурсы для изучения каждого навыка
- 🎨 Адаптивный дизайн с анимациями
- 📊 Визуализация прогресса обучения
- 📦 Готов к запуску в 1 команду

## Быстрый старт

### Способ 1: Запуск через Docker (рекомендуется)

```bash
docker run -d -p 8080:80 --name devroadmaps rolanrv/devroadmaps
```

Откройте в браузере: http://localhost:8080

### Способ 2: Через start.sh

В терминале зайти в папку проекта, ввести:
```bash
chmod +x start.sh
./start.sh
```
Откройте в браузере: http://localhost:8080				   

### Способ 3: Сборка из исходников

Клонируйте репозиторий и запустите проект:
```bash
git clone https://github.com/rolanrv/DevRoadmaps.git
cd DevRoadmaps
docker-compose up --build
```
Откройте в браузере: http://localhost:8080

### ОСТАНОВКА ###
Для контейнера, запущенного через Docker run:
```bash
docker stop devroadmaps
```
Для контейнера, запущенного через Docker Compose:
```bash
docker-compose down
```
