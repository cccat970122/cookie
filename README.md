# Cookie (PHP Auth Demo)

以 **PHP + Cookie/Session** 實作的極簡登入範例，展示最小可行的驗證流程。內建 **Docker** 與 **PHP 內建伺服器**的啟動方式，適合教學／作業示範。

## Features
- Cookie / Session 登入流程（`login.html` → `login.php` → `member.php`）
- 可用 **PHP 內建伺服器** 或 **Docker** 一鍵啟動
- 教學用最小實作，附安全注意清單

## Quickstart（無 Docker）
```bash
php -S 127.0.0.1:8000
# 瀏覽 http://127.0.0.1:8000 ；先開 login.html 測試
