<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Get user info by ID
     *
     * @param $id
     * @return JsonResponse
     */
    public function show($id) {
        $user = User::findOrFail($id);

        return response()->json([
            'message' => "User info received",
            'data' => $user,
        ], 200);
    }

    /**
     * Update user info
     *
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request) {
        $user = User::findOrFail($id);

        $params = $request->only([
            'name',
            'email',
            'password',
        ]);

        if (!empty($params)) {
            $user->update($params);
        }

        return response()->json([
            'message' => "User info updated",
            'data' => $user,
        ], 200);
    }
}
