<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtilityController extends Controller
{
    public function positionSort(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'table' => 'required',
                'id' => 'required',
                'position' => 'required',
                'newPosition' => 'required',
            ]);

            $table = $request->table;
            $id = $request->id;
            $newPosition = intval($request->newPosition);
            $position = intval($request->position);


            $item = DB::table($table)->find($id);
            if ($position == $item->position) {
                if ($position > $newPosition) {
                    $positionRange = [
                        $newPosition, $position
                    ];
                } else {
                    $positionRange = [
                        $position, $newPosition
                    ];
                }

                $lowerPriorityComponents = DB::table($table)
                    ->where('id', '!=', $id)
                    ->whereBetween('position', $positionRange)
                    ->get();

                foreach ($lowerPriorityComponents as $lowerPriorityComponent) {
                    if ($position < $newPosition) {
                        $updatedPosition = $lowerPriorityComponent->position - 1;
                    } else {
                        $updatedPosition = $lowerPriorityComponent->position + 1;
                    }
                    DB::table($table)
                        ->where('id', $lowerPriorityComponent->id)
                        ->update(['position' => $updatedPosition]);
                }

                DB::table($table)
                    ->where('id', $id)
                    ->update(['position' => $newPosition]);

                return response()->json(["message" => "Position changed successfully!!!"], 200);
            } else {
                return response()->json(["message" => "Something went wrong please try again later!!!"], 500);
            }
        } catch (\Exception) {
            return response()->json(["message" => "Something went wrong please try again later!!!"], 500);
        }
    }

    public function getYoutubeEmbedUrl($url): array
    {
        $pattern = '/^(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]{11})/';
        preg_match($pattern, $url, $matches);

        if (count($matches) > 0) {
            $embedUrl = 'https://www.youtube.com/embed/' . $matches[1];
            return ['success' => true, 'embedUrl' => $embedUrl];
        } else {
            return ['success' => false, 'error' => 'The URL must be a valid YouTube URL.'];
        }
    }
}
