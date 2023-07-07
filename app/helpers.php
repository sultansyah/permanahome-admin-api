<?php
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Melihovv\Base64ImageDecoder\Base64ImageDecoder;

function getUser($param) {
    $user = User::where('id', $param)
            ->orWhere('email', $param)
            ->orWhere('username', $param)
            ->first();

    $user->profile_picture = $user->profile_picture ? url('storage/' . $user->profile_picture) : "";

    return $user;
}

// contoh path = 'gambar/user/'
function uploadBase64Image($base64Image, $path) {
    $decoder = new Base64ImageDecoder($base64Image, $allowedFormats = ['jpeg', 'png', 'jpg']);

    $decodedContent = $decoder->getDecodedContent();
    $format = $decoder->getFormat();

    $image = $path . Str::random(10) . '.' . $format;

    Storage::disk('public')->put($image, $decodedContent);

    return $image;
}