<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response as ResponseHttp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function returnResponse(Model $response, string $message)
    {
        return Response::json([
            'success' => ResponseHttp::HTTP_OK,
            'message' => $message,
            'response' => $response->toArray() ?? []
        ]);
    }
}
