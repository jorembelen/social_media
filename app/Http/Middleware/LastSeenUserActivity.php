<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class LastSeenUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            $expireTime = Carbon::now()->addMinute(5); // keep online for 5 min
            Cache::put('is_online'.auth()->id(), true, $expireTime);

            //Last Seen
            User::whereid(auth()->id())->update(['last_seen' => Carbon::now()]);
        }

        return $next($request);
    }
}
