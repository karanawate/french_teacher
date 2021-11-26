<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Assigment extends Model
{
    use HasFactory;
    
    use SoftDeletes;


    public $table            = 'assigments';

    protected  $primaryKey   = 'Assigment_Id';

    protected $guarded       = [];

    public $fiilable         = [
        'home_title',
        'description',
        'allocated_file',
        'start_time',
        'end_time'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    


   

}
