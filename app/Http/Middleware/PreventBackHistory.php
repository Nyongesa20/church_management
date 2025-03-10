<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class PreventHistory
{
public function handle(Request $request1, Closure $nex1){
    $response =$nex1($request1);

    return $response->header('Cache-Control','no-cache,no-store,must-revalidate')
                    ->header('Pragma','no-cache')
                    ->header('Expires','0');
    }
}