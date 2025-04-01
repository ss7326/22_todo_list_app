# chapter

- [x] Chapter 01
  - 入門 01 - [イントロダクションと環境構築]
    - [x] Laravel の Vite を Mix に戻す
      - [x] Laravel から Vite を削除する
      - [x] Laravel に Laravel Mix を導入する
- [x] Chapter 02

  - 入門 02 - [ToDo アプリケーションの設計]

    - url
      - /folders
      - /folders/{folder id}
      - /folders/{folder id}/tasks

    | URL                                             | メソッド | 処理                         |
    | :---------------------------------------------- | :------- | :--------------------------- |
    | /folders/{フォルダ ID}/tasks                    | GET      | タスク一覧ページを表示する   |
    | /folders/create                                 | GET      | フォルダ作成ページを表示する |
    | /folders/create                                 | POST     | フォルダ作成処理を実行する   |
    | /folders/{id}/edit                              | GET      | フォルダ編集ページを表示する |
    | /folders/{id}/edit                              | POST     | フォルダ編集処理を実行する   |
    | /folders/{id}/delete                            | GET      | フォルダ削除ページを表示する |
    | /folders/{id}/delete                            | POST     | フォルダ削除処理を実行する   |
    | /folders/{フォルダ ID}/tasks/create             | GET      | タスク作成ページを表示する   |
    | /folders/{フォルダ ID}/tasks/create             | POST     | タスク作成処理を実行する     |
    | /folders/{フォルダ ID}/tasks/{タスク ID}/edit   | GET      | タスク編集ページを表示する   |
    | /folders/{フォルダ ID}/tasks/{タスク ID}/edit   | POST     | タスク編集処理を実行する     |
    | /folders/{フォルダ ID}/tasks/{タスク ID}/delete | GET      | タスク削除ページを表示する   |
    | /folders/{フォルダ ID}/tasks/{タスク ID}/delete | POST     | タスク削除処理を実行する     |

    - table

      - folder

      | カラム論理名 | カラム物理名 | 型          | 型の意味            |
      | :----------- | :----------- | ----------- | ------------------- |
      | ID           | id           | INTEGER     | 連番（自動採番）    |
      | タイトル     | title        | VARCHAR(20) | 20 文字までの文字列 |
      | 作成日       | created_at   | TIMESTAMP   | 日付と時刻          |
      | 更新日       | updated_at   | TIMESTAMP   | 日付と時刻          |

      - task

      | カラム論理名 | カラム物理名 | 型           | 型の意味   |
      | :----------- | :----------- | ------------ | ---------- |
      | ID           | id           | INTEGER      | 連番       |
      | フォルダ ID  | folder_id    | INTEGER      | 整数       |
      | タイトル     | title        | VARCHAR(100) | 文字列     |
      | 状態         | status       | INTEGER      | 数値       |
      | 期限日       | due_date     | DATE         | 日付       |
      | 作成日       | created_at   | TIMESTAMP    | 日付と時刻 |
      | 更新日       | updated_at   | TIMESTAMP    | 日付と時刻 |

      - relation

- [x] Chapter 03
  - 入門 03 - [ToDo アプリのフォルダ一覧表示機能を作る]
  * [x] controller class
  * [x] maigration and model class
  * [x] insert test data
    - $ composer dump-autoload
  * [x] controller
  * [x] create template
  * [x] folder name to selection list
- [ ] Chapter 04
  - 入門 04 - [ToDo アプリのタスク一覧表示機能を作る]
  - [x] maigration and model class
    - Migration ファイルの不整合の解消
      - [ref](https://blog-and-destroy.com/28984)
  - [ ] create test data and check
  - [ ] fix contoroller
  - [ ] fix template
  - [ ] add accesser to task model
  - [ ] relation of model class
- [ ] Chapter 05
  - 入門 05 - [ToDo アプリのフォルダ作成機能を作る]
- [ ] Chapter 06
  - 入門 06 - [ToDo アプリのタスク作成機能を作る]
- [ ] Chapter 07
  - 入門 07 - [ToDo アプリのフォルダ編集機能を作る]
- [ ] Chapter 08
  - 入門 08 - [ToDo アプリのタスクの編集機能を作る]
- [ ] Chapter 09
  - 入門 09 - [ToDo アプリのフォルダ削除機能を作る]
- [ ] Chapter 10
  - 入門 10 - [ToDo アプリのタスク削除機能を作る]
- [ ] Chapter 11
  - 入門 11 - [ToDo アプリの認証機能を作る Part1]
- [ ] Chapter 12
  - 入門 12 - [ToDo アプリの認証機能を作る Part2]
- [ ] Chapter 13
  - 入門 13 - [ToDo アプリの認証機能を作る Part3]
- [ ] Chapter 14
  - 入門 14 - [ToDo アプリのエラーハンドリングをする Part1]
- [ ] Chapter 15
  - 入門 15 - [ToDo アプリのエラーハンドリングをする Part2]
- [ ] Chapter 16
  - 入門 16 - [ToDo アプリのエラーハンドリングをする Part3]
- [ ] Chapter 17
  - 入門 17 - [ToDo アプリのエラーハンドリングをする Part4]
- [ ] Chapter 18
- [ ] 巻末資料 - [参考文献]
