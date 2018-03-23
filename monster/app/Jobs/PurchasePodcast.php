<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class PurchasePodcast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $this->preparePurchase()
            ->sendEmail();
    }

    private function preparePurchase()
    {
        echo "<pre>";
        print_r('prepering the purchase');
        echo "</pre>";

        return $this;
    }

    private function sendEmail()
    {
        echo "<pre>";
        print_r('send an email with their invoice');
        echo "</pre>";

        return $this;
    }
}
