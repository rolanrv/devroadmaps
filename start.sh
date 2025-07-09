#!/bin/bash

if ! command -v docker &> /dev/null
then
    echo "Docker не установлен. Установите Docker: https://docs.docker.com/get-docker/"
    exit 1
fi

echo "Запуск DevRoadmaps..."
docker run -d -p 8080:80 --name devroadmaps rolanrv/devroadmaps

echo ""
echo "✅ Готово! Сайт доступен по адресу:"
echo "http://localhost:8080"
echo ""
echo "Для остановки контейнера выполните:"
echo "docker stop devroadmaps"