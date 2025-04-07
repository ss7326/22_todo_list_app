<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTask extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * リクエストの内容に基づいた権限チェックを行うメソッド
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * バリデーションルールを定義するメソッド
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:100',
            'due_date' => 'required|date|after_or_equal:today',
        ];
    }

    /**
     * リクエストのnameなどの値を再定義するメソッド
     *
     * @return array<string>
     */
    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'due_date' => '期限日',
        ];
    }

    /**
     * FormRequestクラス単位でエラーメッセージを定義するメソッド
     *
     * @return array<string>
     */
    public function messages()
    {
        // Q このメソッドはいつ呼ばれるのか？
        // https://zenn.dev/eguchi244_dev/books/laravel-tutorial-books/viewer/laravel-todo-app-create-task#%E2%91%A4%E6%9C%9F%E9%99%90%E6%97%A5%E3%81%AE%E3%83%90%E3%83%AA%E3%83%87%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%82%92%E3%83%86%E3%82%B9%E3%83%88%E3%81%99%E3%82%8B:~:text=%E3%81%BE%E3%81%9F%E3%80%81CreateTask%E3%82%AF%E3%83%A9%E3%82%B9%20%E3%81%A7%E3%81%AF%20messages%20%E3%83%A1%E3%82%BD%E3%83%83%E3%83%89%E3%82%82%E5%AE%9F%E8%A3%85%E3%81%97%E3%81%A6%E3%81%84%E3%81%BE%E3%81%99%E3%80%82%E3%81%93%E3%81%AE%E3%83%A1%E3%82%BD%E3%83%83%E3%83%89%E3%81%AF%20FormRequest%20%E3%82%AF%E3%83%A9%E3%82%B9%E5%8D%98%E4%BD%8D%E3%81%A7%E3%82%A8%E3%83%A9%E3%83%BC%E3%83%A1%E3%83%83%E3%82%BB%E3%83%BC%E3%82%B8%E3%81%99%E3%82%8B%E3%81%9F%E3%82%81%E3%81%AB%E5%AE%9A%E7%BE%A9%E3%81%97%E3%81%BE%E3%81%99%E3%80%82
        return [
            'due_date.after_or_equal' => ':attribute には今日以降の日付を入力してください。',
        ];
    }
}
