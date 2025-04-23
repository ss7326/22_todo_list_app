<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EditFolder;
use App\Http\Requests\CreateFolder;
use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    /**
     *  【フォルダの削除機能】
     *  機能：フォルダが削除されたらDBから削除し、フォルダ一覧にリダイレクトする
     *
     *  POST /folders/{id}/delete
     *  @param int $id
     *  @return RedirectResponse
     */
    public function delete(int $id)
    {
        $folder = Folder::find($id);

        $folder->tasks()->delete();
        $folder->delete();

        $folder = Folder::first();

        return redirect()->route('tasks.index', [
            'id' => $folder->id
        ]);
    }

    /**
     *  【フォルダ削除ページの表示機能】
     *  機能：フォルダIDをフォルダ編集ページに渡して表示する
     *
     *  GET /folders/{id}/delete
     *  @param int $id
     *  @return \Illuminate\View\View
     */
    public function showDeleteForm(int $id)
    {
        $folder = Folder::find($id);

        return view('folders/delete', [
            'folder_id' => $folder->id,
            'folder_title' => $folder->title,
        ]);
    }

    /**
     *  【フォルダの編集機能】
     *
     *  POST /folders/{id}/edit
     *  @param int $id
     *  @param EditFolder $request
     *  @return \Illuminate\Http\RedirectResponse
     */
    public function edit(int $id, EditFolder $request)
    {
        /**
         * @var App\Models\User
         */
        $user = Auth::user();
        $folder = $user->folders()->findOrFail($id);
        $folder->title = $request->title;
        $folder->save();

        return redirect()->route('tasks.index', [
            'id' => $folder->id,
        ]);
    }

    /**
     *  【フォルダ編集ページの表示機能】
     *
     *  GET /folders/{id}/edit
     *  @param int $id
     *  @return \Illuminate\View\View
     */
    public function showEditForm(int $id)
    {
        /**
         * @var App\Models\User
         */
        $user = Auth::user();
        $folder = $user->folders()->findOrFail($id);

        return view('folders/edit', [
            'folder_id' => $folder->id,
            'folder_title' => $folder->title,
        ]);
    }

    /**
     *  【フォルダの作成機能】
     *
     *  POST /folders/create
     *  @param CreateFolder $request （Requestクラスの機能は引き継がれる）
     *  @return \Illuminate\Http\RedirectResponse
     *  @var App\Http\Requests\CreateFolder
     */
    public function create(CreateFolder $request)
    {
        $folder = new Folder();
        $folder->title = $request->title;

        // （ログイン）ユーザーに紐づけて保存する
        /** @var App\Models\User **/
        $user = Auth::user();
        $user->folders()->save($folder);

        return redirect()->route('tasks.index', [
            'id' => $folder->id,
        ]);
    }

    /**
     *  【フォルダ作成ページの表示機能】
     *
     *  GET /folders/create
     *  @return \Illuminate\View\View
     */
    public function showCreateForm()
    {
        // ログインユーザーに紐づくフォルダだけを取得
        /** @var App\Models\User **/
        $user = Auth::user();
        $user->folders;

        return view('folders/create');
        // ?
        // chpt.12, ユーザーに紐づけてフォルダを作成する
        // return view('folders/create', compact('folders'));
    }
}
