<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Reading extends Model
{
    use Sortable;
    protected $fillable = ['reading','type','record_time','user_id','sugar_category_id'];
    protected $dates = ['created_at','modified_at','record_time'];
    public $sortable = ['id', 'reading', 'type','record_time', 'created_at', 'updated_at'];
    public function getTypeAttribute($value)
    {
        switch ($value){
            case 'sugar':
                $value = 'Sugar level';
                break;
            case 'blood':
                $value = 'Blood Pressure';
                break;
            default:
                $value=$value;

        }
        return $value;
        
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\SugarCategory','sugar_category_id');
    }
}
