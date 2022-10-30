<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContentsRequest;
use App\Services\ContentsService;

class ContentsController extends Controller
{
    public function createContent(CreateContentsRequest $request, ContentsService $service)
    {
        

        $service->createContent(
            $request->videoFile,
            $request->heading,
            $request->description,
            $request->user_id
        );

        return response()->json(['success'=> true]);
        
    }
}
