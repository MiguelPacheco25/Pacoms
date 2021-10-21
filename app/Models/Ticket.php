<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //use HasFactory;
    use SoftDeletes;
    
    protected $guarded =["id"];
    protected $dates = ["deleted_at"];
    protected $table = "tickets";

    protected $hidden = [
        'last_modification_user_id',
    ];

    protected $fillable = [
        'TicketTypeTicket','MoneyTypeTicket','PayTypeTicket', 'ServiceTypeTicket', 'SubTotalTicket', 'IGVTicket', 'TotalTicket', 'client_id'
    ];

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }

    public function itemTicket(){
        return $this->hasMany('App\Models\ItemTicket');
    }
}
