<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tbl_leads extends Model
{
    use HasFactory;

    function addleadform($insertdata){

        $blogsData = new tbl_leads;
        $blogsData->studentName       = $insertdata['studentName'];
        $blogsData->studentEmail      = $insertdata['studentEmail'];
        $blogsData->studentMobile     = $insertdata['studentMobile'];
        $blogsData->fkclass_id        = $insertdata['fkclass_id'];
        $user = $blogsData->save();
        if($user==1){
            return 1;
        }else{
            return 0;
        }
        
    }






}
