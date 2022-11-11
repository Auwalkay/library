<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\UserBook;
use DB;
use Mail;
use App\Mail\CheckedInReminder;

class CheckInReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:checkin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $books = DB::select("select u.name,u.email,b.title,ub.checked_out from user_books ub, users u,books b  where ub.book_id =b.id and ub.user_id =u.id and
        datediff(ub.checked_out,NOW())=10 and ub.status =0");

            foreach ($books as $key => $value) {
                Mail::to($value->email)->send(new CheckedInReminder($value->name,$value->title,$value->checked_out));
            }


        return 0;

    }
}