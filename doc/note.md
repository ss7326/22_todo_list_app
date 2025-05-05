## 3

- migration
  - [Laravel におけるマイグレーションのしくみ](https://www.hypertextcandy.com/how-laravel-migration-works)

## 12

- 【会員テストデータ】
  - Email
    - test2345@email.com
  - 氏名
    - test2
  - パスワード
    - test2345
  - パスワード（確認）
    - test2345

## 14

- Laravel では、
  - ルーティング定義の URL の中括弧で囲まれたキーワード（{folder}）と
  - コントローラーメソッドの仮引数名（$folder）が一致していて、
  - かつ引数が型指定（Folder）されていれば、
  - URL の中括弧で囲まれた部分の値を ID とみなし、自動的に引数の型のモデルクラスインスタンスを作成します。
