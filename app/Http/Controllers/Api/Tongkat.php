<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ControllerModel;
use App\Models\NotificationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Tongkat extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Ini adalah data tongkat',
            'data'    => 'Tongkat'
        ], 200);
    }

    public function getLocation(Request $request)
    {
        try {
            $input = $request->all();
            if (!isset($input['token'])) {
                return response()->json([
                    'success' => false,
                    'message' => 'Token tidak ada'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'Berhasil mengambil lokasi',
                'data'    => ControllerModel::where('token', $input['token'])->first()
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function getNotification()
    {
        try {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil mengambil notifikasi',
                'data'    => NotificationModel::all()
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function sendNotification(Request $request)
    {
        try {
            $input = $request->all();
            if (!isset($input['title']) && !isset($input['body']) && !$input['body'] && !$input['type']) {
                return response()->json([
                    'success' => false,
                    'message' => 'Field tidak boleh kosong'
                ], 404);
            }

            DB::table('notification')->insert([
                'title' => $input['title'],
                'body'  => $input['body'],
                'type'  => $input['type']
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Berhasil mengirim notifikasi',
                'data'    => NotificationModel::all()
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
