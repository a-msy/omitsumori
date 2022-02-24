<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(TestRequest $request)
    {
        if ($request->type == "web") {
            return response()->json([
                "q1" => [
                    "title" => "質問１のタイトルです",
                    "items" => [
                        [
                            "name" => "項目１",
                            "price" => 1000,
                        ],
                        [
                            "name" => "項目２",
                            "price" => 2000,
                        ],
                        [
                            "name" => "項目３",
                            "price" => 3000,
                        ],
                    ]
                ],
                "q2" => [
                    "title" => "質問２のタイトルです",
                    "items" => [
                        [
                            "name" => "項目４",
                            "price" => 1000,
                        ],
                        [
                            "name" => "項目５",
                            "price" => 2000,
                        ],
                        [
                            "name" => "項目６",
                            "price" => 3000,
                        ],
                    ]
                ],

            ]);
        } else {
            return response()->json([
                "うんち"
            ]);
        }
    }
}
