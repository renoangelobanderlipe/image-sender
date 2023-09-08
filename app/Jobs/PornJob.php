<?php

namespace App\Jobs;

use App\Helpers\FileHelper;
use App\Helpers\HttpHelper;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PornJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      return 'pakshet';
    //   $fileLocation = 'C:\Users\User\Desktop\reno-japan-teens';

    // $helper = new FileHelper();
    // $files = $helper->location($fileLocation)->execute()->getFileName();
    // // dd($files);
    // // $test = json_encode(self::formatBody());
    // // $params = json_decode($test);

    // $helper = new HttpHelper();

  

    // foreach ($files as $filename) {
    //   $helper->post($filename);
    // }
    }
}
