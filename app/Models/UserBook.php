<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UserBook extends Model
{
    use HasFactory;

    protected $guarded = ['created_at','updated_at'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function remainingDays()
    {
        $checkedIn = Carbon::createFromDate($this->checked_out);
        $diffrence = $checkedIn->diffInDays(Carbon::now());
        if ($diffrence < 0) {
            return $diffrence. 'Expired';
        }
        return $diffrence .' Days';
    }
}
