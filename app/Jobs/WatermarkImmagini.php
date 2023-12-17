<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class WatermarkImmagini implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

      private $advertisement_image_id;
    


    public function __construct($advertisement_image_id)
    {
       $this->advertisement_image_id = $advertisement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->advertisement_image_id);
        if (!$i) {
            return;
        }
        $srcPath=storage_path('app/public/' . $i->path);
       

        $image = SpatieImage::load($srcPath);

            $image->watermark(base_path('public/Media/Logo_ShopVerse_02.png'))
                ->watermarkPosition('top-left')
                
                ->watermarkWidth($image->getWidth()*0.05,Manipulations::UNIT_PIXELS)
                ->watermarkHeight($image->getHeight()*0.05,Manipulations::UNIT_PIXELS)
                ->watermarkFit(Manipulations::FIT_STRETCH);

            $image->save($srcPath);
    }
}
