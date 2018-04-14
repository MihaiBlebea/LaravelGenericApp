<?php

namespace MihaiBlebea\GenericApp\Middleware;

use Closure;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role, $permission = null)
    {
        if(!$request->user()->hasRole($role))
        {
            return abort(404);
        }
        return $next($request);
    }
}
