<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectBankIdea extends Model
{
    protected $table='project_idea_bank';
    protected $fillable =['id','name','image','bgimage','sector','location','project_id','description','project_component','market_opprotunity','seccess_example','d_i_modality','project_cost','irr','reference','meta_title','meta_description'];
}
