<?php
/**
 * Created by Bulbul Chandra Sarker.
 * User: IBCS Primax
 * Date: 25/07/2020
 * Time: 11:57 PM
 */

namespace App\Traits;

trait SecureDelete
{
    /**
     * Delete only when there is no reference to other models.
     *
     * @param array $relations
     * @return response
     */
    public function secureDelete($user_id, $relationMethods=[])
    {        

        $should_delete = true;
        if(count($relationMethods)>0)
        {
            foreach ($relationMethods as $relationMethod) {
                if ($this->$relationMethod->count() > 0) {
                    $should_delete = false;     
                    return array( 
                        'status' => 0, 
                        'rel' => $relationMethod,
                        'message' => 'Can\'t delete a parent row');
                    break;
                }
            }
        }


        if ($should_delete == true) {
            
            $this->deleted_by = $user_id;
            $this->deleted_at = date("Y-m-d H:i:s");

            if ($this->save()) {
                return array('status' => 1, 'message' => 'Data deleted successfully!');
            } else {
                return array('status' => 0, 'message' => 'Delete failed!');
            }
        }       
    }
}