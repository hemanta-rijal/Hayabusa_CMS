<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

trait ImageTrait
{
    public function saveFile($file, $path)
    {
        $filePath = public_path($path);
        return Image::make($file)->save($filePath);
    }

    public function saveFileByName($file, $path, $oldFile)
    {
        Storage::disk('public')->delete($oldFile);
        return $file->storeAs($path, $file->getClientOriginalname(), 'public');
    }

    public function saveBase64Image($base64_image, $path)
    {
        if (!file_exists(public_path($path))) {
            mkdir(public_path($path), 777, true);
        }
        $imageData = json_decode($base64_image);
        $filename = Str::of($imageData->name)->replaceMatches('/[\s_]+/', '-');
        $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData->data));
        Image::make($image)->save(public_path($path . '/' . $filename));
        return $filename;
    }

    public function saveOriginalImage($image, $path = null, $name = null): array|string
    {
        $path = $path ?? $this->image_path;
        if (!file_exists(public_path($path))) {
            mkdir(public_path($path), 755, true);
        }
        $fileName = $name ? $name . ".webp" : str_replace(' ', '_', (time() . "-" . $image->getClientOriginalName()));
        $img = Image::make($image);
        $img->save($path . '/' . $fileName, 90, 'webp');

        return $fileName;
    }

    public function deleteImage($file)
    {
        if (is_file($file)) {
            unlink($file);
        }
    }
}


