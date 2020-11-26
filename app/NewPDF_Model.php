<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewPDF_Model extends Model
{
   protected $table = 'newpdf';   //  DB name  
   public $timestamps = false;

   protected $fillable = ['id', 'item_pid', 'item_serial', 'item_brand', 'item_roomnum', 'item_model', 'item_type', 'item_desc','item_status', 'filename'];
}
