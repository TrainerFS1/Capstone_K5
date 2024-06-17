<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
<<<<<<< HEAD
use App\Http\Controllers\BillController;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
<<<<<<< HEAD
        //
=======
        // $schedule->command('inspire')->hourly();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
<<<<<<< HEAD
        $this->load(__DIR__ . '/Commands');
=======
        $this->load(__DIR__.'/Commands');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        require base_path('routes/console.php');
    }
}
