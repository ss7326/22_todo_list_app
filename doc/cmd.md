# setup

## install laravel project

```
docker exec -it php-fpm bash
composer create-project "laravel/laravel=9.*" Laravel9TaskList
```

# 3

## migration

> php artisan make:migration create_folders_table --create=folders

> php artisan make:model Folder

# 5

## create jp lang file

- THIS FILE IS NOT EXISTS

> php -r "copy('https://readouble.com/laravel/8.x/ja/install-ja-lang-files.php', 'install-ja-lang.php');"

> php -f install-ja-lang.php

> php -r "unlink('install-ja-lang.php');"

# 11

## laravel/ui

> root~# composer require laravel/ui

# 認証関係のファイルをインストールする(home.blade.php だけ 'No' にする)

> root~# php artisan ui:auth
