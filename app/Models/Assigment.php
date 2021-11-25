<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assigment extends Model
{
    use HasFactory;
    
    public $table    = 'assigments';

    protected  $primaryKey = 'Assigment_Id';

    protected $guarded = [];

    public $fiilable = [
        'home_title',
        'description',
        'allocated_file',
        'start_time',
        'end_time'
     
    ]; 

    public $dates = [
        'created_at',
        'updated_at'
       
    ];

   

}
