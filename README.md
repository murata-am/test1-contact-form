アプリケーション名
お問い合わせフォーム

## 環境構築
Dockerビルド
１．git clone 
２. docker-compose up -d --build

Laravel環境構築
1.docker-compose exec php bash
2.composer install
3..env.exampleファイルから.envを作成し、
DB_DATABASE=laravel_db を DB_HOST=mysql に変更
DB_DATABASE=laravel を DB_DATABASE=laravel_db に変更
DB_USERNAME=root を DB_USERNAME=laravel_user に変更
DB_PASSWORD=　を DB_PASSWORD=laravel_pass に変更
4.php artisan migrate
5.php artisan migrate
6.php artisan db:seed

## 使用技術(実行環境)
・PHP 8.4.1
・Laravel 8.75
・MySQL 8.0.26

## ER図
< - - - 作成したER図の画像 - - - >

## URL
開発環境：http://localhost/
