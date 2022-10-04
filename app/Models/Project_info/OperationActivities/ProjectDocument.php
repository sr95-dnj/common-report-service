<?php

namespace App\Models\Project_info\OperationActivities;

use Illuminate\Database\Eloquent\Model;
use App\Models\Menu\SubMenu;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectDocument extends Model
{
	use SoftDeletes;
    protected $dates = ['deleted_at'];    
    protected $table = "pro_info_project_documents";

    protected $fillable = [
        'operation_act_id',
        'master_table_id',
        'master_table_name',
        'document_name',
        'document_file_name',     
        'record_id',
        'sub_menu_id', 
        'is_active',
        'revision',
        'created_by',
        'updated_by'
    ];

    public function subMenu()
    {
        return $this->belongsTo(SubMenu::class, 'sub_menu_id');
    }
}


/*
// ####IF(NEW.revision = 1 AND NEW.sub_menu_id = 9) THEN change from IF(NEW.revision = 1)###

BEGIN

            IF(NEW.revision = 1 AND NEW.sub_menu_id = 9) THEN

            INSERT INTO `pro_info_project_documents_befo_up` (`ope_act_id`,`operation_act_id`, `master_table_name`, `document_name`, `document_file_name`, `record_id`, `sub_menu_id`, `is_active`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`, `revision_by`, `action`, `change_date`) VALUES (old.id, old.operation_act_id, old.master_table_name, old.document_name, old.document_file_name, old.record_id, old.sub_menu_id, old.is_active, old.created_by, old.updated_by, old.deleted_at, old.created_at, old.updated_at, new.updated_by, "Update", now()) ;

            END IF;

            END*/