<?php

namespace App\Console;

use App\Console\Commands\PublishBlogCommand;
use App\Console\Commands\ReviewsCommand;
use App\Console\Commands\SitemapCommand;
use App\Console\Commands\TweetBlogCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        SitemapCommand::class,
        PublishBlogCommand::class,
        TweetBlogCommand::class,
        ReviewsCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('sitemap:generate')->weekly();
        $schedule->command('horizon:snapshot')->everyFiveMinutes();
//        $schedule->command('studios:publish-blogs')->everyMinute();
        $schedule->command('studios:tweet-blog')->everyFiveMinutes();
        $schedule->command('studios:reviews')->daily();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
