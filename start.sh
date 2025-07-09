#!/bin/bash

echo "🐳 Запуск DevRoadmaps через Docker..."
echo "ℹ️ Монтирование папки data..."
docker run -d -p 8080:80 --name devroadmaps \
-v $(pwd)/data:/var/www/html/data \
rolanrv/devroadmaps

echo ""
echo "✅ Готово! DevRoadmaps успешно запущен."
echo "🌐 Откройте в браузере: http://localhost:8080"
echo ""
echo "🛑 Для остановки выполните:"
echo "   docker stop devroadmaps"
echo "   docker rm devroadmaps"
