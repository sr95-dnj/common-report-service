<?php
/**
 * Created by PhpStorm.
 * User: Jaba IT
 * Date: 11/21/2017
 * Time: 10:44 AM
 */
namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait ApiResponser{
    private function successResponse($data,$code){
        return response()->json($data,$code);
    }
    private function multiSuccessResponse($data, $code){
        return response()->json($data, $code);
    }

    protected function successMessage($message,$code){
        return response()->json(['success'=>$message,'code'=>$code],$code);
    }

    protected function errorResponse($message,$code){
        return response()->json(['error'=>$message,'code'=>$code],$code);
    }

    protected function showAll(Collection $collection,$code=200){
        return $this->successResponse(['data'=>$collection],$code);
    }

    protected function showOne( Model $model,$code=200){
        return $this->successResponse(['data'=>$model],$code);
    }

    protected function showMulti( Model $model, Collection $notUsedSubCat, $code=200){
        return $this->multiSuccessResponse(['data'=>$model, 'notUsedSubCat'=>$notUsedSubCat], $code);
    }
}