<?php

namespace App\Http\Middleware;

use App\Models\Category;
use App\Models\Post;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /**
         * @var User $user
         */
        $user = Auth::user();

        if ($user && $user->isAdmin()) {
            return $next($request);
        } else {
            Auth::logout();
            $data = Post::all();
            $dataCate = Category::all();
            return response()->view('client.auth.login', compact('data', 'dataCate'));
        }
    }
}