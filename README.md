# Pigly  
## 環境構築  
### Dockerビルド   
1. ``
2. DockerDesktopアプリを立ち上げる  
3. `docker-compose up -d --build`  
### Laravel環境構築  
1. `docker-compose exec php bash`  
2. `composer install`
3. 「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成  
4. .envに以下の環境変数を追加
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass  
```
5. アプリケーションキーの作成
```
php artisan key:generate
```
6. マイグレーションの実行
```
php artisan migrate
```
7. シーディングの実行
```
php artisan db:seed
```

## 使用技術(実行環境)
* PHP8.3.8  
* Laravel8.83.8  
* MySQL8.0.39   
## ER図  
  ![png](https://github.com/user-attachments/assets/d3209784-b9c7-4e37-998f-1ddbaeb41716)

## URL  
* 開発環境：http://localhost/  
* phpMyAdmin：http://localhost:8080/
