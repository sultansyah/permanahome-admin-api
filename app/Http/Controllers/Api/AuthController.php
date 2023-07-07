<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Melihovv\Base64ImageDecoder\Base64ImageDecoder;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request) {
        $data = $request->all();

        $validator = Validator::make($data, [
            'full_name' => 'required|string',
            'email' => 'required|email',
            'username' => 'required|string|min:6',
            'password' => 'required|string|min:6',
            'no_hp' => 'required',
            'no_wa' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                [
                    'errors' => $validator->messages(),
                ],
                400
            );
        }

        $user = User::where('email', $request->email)->exists();
        if($user) {
            return response()->json(
                [
                    'messages' => 'Email already taken',
                ],
                409
            );
        }

        $user = User::where('username', $request->username)->exists();
        if($user) {
            return response()->json(
                [
                    'messages' => 'Username already taken',
                ],
                409
            );
        }

        try {
            $profilePicture = null;

            if($request->profile_picture) {
                $profilePicture = $this->uploadBase64Image($request->profile_picture);
            }

            $user = User::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => $request->password,
                'profile_picture' => $profilePicture,
                'no_hp' => $request->no_hp,
                'no_wa' => $request->no_wa,
            ]);
        } catch (\Throwable $th) {
        return response()->json(
                [
                    'messages' => $th->getMessage(),
                ],
                500
            );
        }
    }

    private function uploadBase64Image($base64Image) {
        $decoder = new Base64ImageDecoder($base64Image, $allowedFormats = ['jpeg', 'png', 'jpg']);

        $decodedContent = $decoder->getDecodedContent();
        $format = $decoder->getFormat();

        $path = 'gambar/user/';
        $image = $path . Str::random(10) . '.' . $format;

        Storage::disk('public')->put($image, $decodedContent);

        return $image;
    }
}
