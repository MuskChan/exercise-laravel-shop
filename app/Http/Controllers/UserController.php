<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Handlers\ImageUploadHandler;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('user.index');
    }

    public function edit(User $user)
    {
        return view('user.edit',['user' => $user]);
    }

    public function update(Request $request, ImageUploadHandler $uploader, User $user)
    {
        $data = $request->all();

        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatars', $user->id, 416);

            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }

        $user->update($data);
        return redirect()->route('users.edit', $user->id)->with('success', '个人资料更新成功！');
    }
}
