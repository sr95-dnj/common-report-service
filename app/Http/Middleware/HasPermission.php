<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use App\Traits\AuthUser;
use JWTAuth;
use Closure;
use DB;
class HasPermission
{
    //use AuthUser;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function handle($request, Closure $next, $controllerName)
    {
        $userInfo = JWTAuth::toUser();
        $roleId = $userInfo->role_id;

        $method = $request->method();
        
        $access = DB::table('sub_menus as SM')
            ->join('role_wise_menu_permissions as RP','SM.id','=','RP.submenu_id')
            ->select('RP.id','RP.role_id','RP.submenu_id','RP.read','RP.save','RP.update','RP.delete','SM.controller_name','RP.active')
            ->where('SM.controller_name', $controllerName)
            ->where('RP.role_id', $roleId)
            ->first();
        //print_r($access);

        if(($method == 'GET') && (@$access->read == 1))
            {
                return $next($request);
            }
            if(($method == 'POST') && (@$access->save == 1))
            {
                return $next($request);
            }
            if(($method == 'PUT' || $method == 'PATCH') && (@$access->update == 1))
            {
                return $next($request);
            }
            if(($method == "DELETE") && (@$access->delete == 1))
            {
                return $next($request);
            }

        return response()->json(array('status' => 0, 'message' => 'You have not permission to access!'));

        //return redirect()->back();
        
    }
  
}
