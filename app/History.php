<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
protected $guarded = array('id');

    public static $rules = array(
        'edited_at' => 'required',
        'news_id' => 'required',        
    );
    
}
