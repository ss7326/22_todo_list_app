# main page

- [Laravel 入門 - Laravel を使ってみよう!](https://zenn.dev/eguchi244_dev/books/laravel-tutorial-books)

## repository

- [main](https://github.com/eguchi244/Laravel9-Tutorial-PJ)

# 面接官向け

## 作成経緯

- **なぜこれを作ることにしたのか**
  - Laravel の基本的な機能実装力と、学習姿勢の証明のため。
- **なぜ todo リストアプリを題材に選んだか**
  - todo アプリは、Web アプリの基本の以下を実装するため、本件での選択に適していると考えるため
    1. CRUD 操作
    2. データ構造とその関連
    3. ユーザ入力のバリデーティング
    4. API 設計
    5. メール送信

## 作成期間

- 3/22~5/11 (本アプリリポジトリ初期化から chpt.17 完了まで)

## 使用ツール

| 分類         | ツール名   | バージョン   | アイコン                                                                                                                                                                                   |
| :----------- | :--------- | :----------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| 言語         | PHP        | 8.0.3        | <img src="https://www.php.net/images/logos/php-logo-white.svg" alt="php" height = "30px">                                                                                                  |
|              | Laravel    | 9.52.20      | <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/250px-LaravelLogo.png" alt="laravel" height = "30px">                                                  |
|              | Node.js    | 14.18-alpine | <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Node.js_logo.svg/330px-Node.js_logo.svg.png" alt="nodejs" height = "30px">                                             |
| データベース | MySQL      | 5.7.36       | <img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" alt="mysql" height = "30px">                                                                                          |
|              | phpMyAdmin | latest       | <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/PhpMyAdmin_logo.png" alt="phpmyadmin" height = "30px">                                                                       |
| インフラ     | Docker     | 27.5.1       | <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Docker_%28container_engine%29_logo.svg/500px-Docker_%28container_engine%29_logo.svg.png" alt="docker" height = "30px"> |
| サーバー     | Nginx      | latest       | <img src="https://img.icons8.com/?size=160&id=f8puwbhs0kUR&format=png" alt="nginx" height = "30px">                                                                                        |
|              | mailhog    | latest       | <img src="https://avatars.githubusercontent.com/u/10258541?v=4" alt="mailhog" height = "30px">                                                                                             |
| 他ツール     | a5         | 2.19.2       | <img src="https://pbs.twimg.com/profile_images/1451855639903293440/j0S1Y_9V_400x400.jpg" alt="a5" height = "30px">                                                                         |
|              | VS Code    | 1.99.2       | <img src="https://code.visualstudio.com/assets/images/code-stable.png" alt="vscode" height = "30px">                                                                                       |
|              | git        | 2.34.1       | <img src="https://git-scm.com/images/logos/2color-lightbg@2x.png" alt="git" height = "30px">                                                                                               |

## 未実装追加、改修機能

1. progress.md にて、未チェックのもの。
   - パスワード再設定時、メールレイアウト
   - 自動テスト
     - 日付バリデーションに関するもの
     - ステータスに関するもの
