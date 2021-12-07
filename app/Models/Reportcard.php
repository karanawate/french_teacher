<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportcard extends Model
{
    use HasFactory;

    public $table = 'report_first_term';

    protected  $fillable  = [
                    'first_que' ,
                    'second_que',
                    'third_que' ,
                    'four_que'  ,
                    'five_que'  ,
                    'six_que'   ,
                    'seven_que' ,
                    'eight_que' ,
                    'nine_que'  ,
                    'nine_que'  ,
                    'ten_que'   ,
                    'eleven_que',
                    'tweele_que',
                    'threen_que',
                    'english'   ,
                    'maths'     ,
                    'hindi'     ,
                    'dev_one'   ,
                    'dev_two'   ,
                    'dev_three' ,
                    'dev_four'  
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
