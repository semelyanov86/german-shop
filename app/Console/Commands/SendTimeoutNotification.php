<?php

namespace App\Console\Commands;

use App\Mail\OrderCreated;
use App\Mail\OrderPlaced;
use App\Mail\TimeoutFinished;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class SendTimeoutNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendtimeoutnotify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send notification email to administrator for timeout';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $date = Carbon::parse(setting('site.timer'));
        $now = Carbon::now();

        $diff = $date->diffInHours($now);
        if ($diff < 3) {
            $admin_user = User::whereHas('role', function ($query){
                $query->where('id', 1);
            })->first();
            Mail::to($admin_user)->send(new TimeoutFinished($diff));
        }
        echo $diff . ' - ' . $date . ' - ' . $now;
    }
}
