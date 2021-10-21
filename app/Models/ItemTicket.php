<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ItemTicket extends Model
{
    //use HasFactory;
    use SoftDeletes;
    
    protected $guarded =["id"];
    protected $dates = ["deleted_at"];
    protected $table = "itemTickets";

    protected $hidden = [
        'last_modification_user_id',
    ];

    protected $fillable = [
        'AmountItem','DescriptionItem','PriceItem', 'ticket_id'
    ];

    public function ticket(){
        return $this->belongsTo('App\Models\Ticket');
    }
}
