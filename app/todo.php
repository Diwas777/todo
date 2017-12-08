<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    //dekhaune belama chai first leter 
    //capital banako
    //i.e database ko data display garda 
    //model bata pass hunu parxa 

  // look get method this is accessor
  /*  public function getBodyAttribute($value)
    {
    	return ucfirst($value);
    }
*/
    public function setBodyAttribute($value)
    {
    	return $this->attributes['body']=ucfirst($value);
    }
}
