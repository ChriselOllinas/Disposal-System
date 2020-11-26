<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProxyData_Model extends Model
{
   protected $table = 'dispensing_inv';   //  DB name  
   public $timestamps = false;

   protected $fillable = ['item_pid', 'item_status', 'item_type', 'equip_accessory', 'item_brand', 'item_model', 'item_serial','item_roomnum', 'item_desc' ];

}

