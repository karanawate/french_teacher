<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tbl_gallerys extends Model
{
    use HasFactory;


  function getGalleryList(){

    $res = DB::table('tbl_gallerys')->get();
    if(!$res->isEmpty()){
        return $res;
    }else{
        return $res;
    }
  }

  function addGalleryImages($insertdata){

        $galleryData = new tbl_gallerys;
        $galleryData->galImages   = $insertdata['galImages'];
        $user = $galleryData->save();
        if($user==1){
            return 1;
        }else{
            return 0;
        }


  }



  function deleteImages($galId){
      
    $res = DB::table('tbl_gallerys')->where('galId',$galId)->delete();
  if($res==1){
      return 1;
  }else{
      return 0;
  }
      
    
}





}
