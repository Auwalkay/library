<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Mail\DeadLineReminder as DeadLineEmail;
use App\Models\User;
use DB;
class DeadLineReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:deadline';

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

        $books = DB::select("select u.name,u.email,b.title,ub.checked_out from user_books ub, users u,books b  where ub.book_id =b.id and ub.user_id =
        u.id and NOW() > checked_out  and ub.status =0");
        $admins = User::where("user_type_id",1)->pluck('email');

        foreach ($admins as $admin) {
            Mail::to($admin)->send(new DeadLineEmail($books));
        }

        return 0;
    }
}