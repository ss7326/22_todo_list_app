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

| 分類         | ツール名   | バージョン   |
| :----------- | :--------- | :----------- |
| 言語         | PHP        | 8.0.3        |
|              | Laravel    | 9.52.20      |
|              | Node.js    | 14.18-alpine |
| データベース | MySQL      | 5.7.36       |
|              | phpMyAdmin | latest       |
| インフラ     | Docker     | 27.5.1       |
| サーバー     | Nginx      | latest       |
|              | mailhog    | latest       |
| 他ツール     | a5         | 2.19.2       |
|              | VS Code    | 1.99.2       |
|              | git        | 2.34.1       |

## 未実装追加、改修機能

1. progress.md にて、未チェックのもの。
   - パスワード再設定時、メールレイアウト
   - 自動テスト
     - 日付バリデーションに関するもの
     - ステータスに関するもの
