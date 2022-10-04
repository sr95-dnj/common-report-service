<?php

/**
 * Created by PhpStorm.
 * User: eatl
 * Date: 4/12/18
 * Time: 4:37 PM
 */

namespace App\Traits;

use JWTAuth;
use DB;

trait AuthUser
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    /**
     * get auth user info
     * @return false|\Tymon\JWTAuth\Contracts\JWTSubject
     */
    public function getUser()
    {
        return JWTAuth::toUser();
    }

    /**
     * get auth user id
     * @return mixed
     */
    public function getUserId()
    {
        $user = $this->getUser();
        return $user->id;
    }

    public function getAuthData()
    {
        return JWTAuth::toUser();
    }

    public function getRoleId()
    {
        $user = JWTAuth::toUser();
        return $user->role_id;
    }

    public function getProjectId()
    {
        return JWTAuth::getPayload()->get('project_id');
    }

    public function sqlSecurityKey()
    {
        return 'bb321';
    }

    public function set_log($module, $menu, $data, $action, $title)
    {
        $user_id = $this->getUserId();
        $p_id = $this->getProjectId();
        $result = DB::table('log_activities')->insert([
            'operation_id' => $p_id,
            'user_id' => $user_id,
            'module_id' => $module,
            'menu_id' => $menu,
            'data_id' => $data,
            'action' => $action,
            'title' => $title,
            'created_at' =>  date("Y-m-d H:i:s"),
            'updated_at' =>  date("Y-m-d H:i:s"),
        ]);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    /*//for getting user id
    public function getUserId() {
        $user = JWTAuth::toUser();

        return $user->id;
    }

    //for getting user type
    public function getUserType() {
        $user = JWTAuth::toUser();

        return $user->user_type;
    }

    public function getUser() {
        $user = JWTAuth::toUser();

        return $user;
    }*/
}
