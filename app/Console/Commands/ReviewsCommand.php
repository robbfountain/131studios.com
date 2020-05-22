<?php

namespace App\Console\Commands;

use App\Testimonial;
use Facades\App\Classes\Reviews;
use Illuminate\Console\Command;

class ReviewsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'studios:reviews';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Google Reviews';

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
        $this->comment('Importing Google Reviews');
        Reviews::get()->each(function ($review) {
            $model = Testimonial::firstOrCreate([
                'author' => $review->author,
            ], [
                'profile_photo' => $review->profile_photo,
                'rating' => $review->rating,
                'text' => $review->text,
            ]);
        });
        $this->comment('Done');
    }
}
