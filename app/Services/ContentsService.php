<?php

namespace App\Services;

use App\Models\Content;

class ContentsService
{
    public function createContent(
        $videoFile,
        string $heading,
        string $description,
        int $userID
    ) {
        
        $path = $videoFile->store('videos');
        
        return Content::create([
            'video_url' => $path,
            'heading' => $heading,
            'description' => $description,
            'user_id' => $userID
        ]);
    }
}
