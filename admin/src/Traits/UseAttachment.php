<?php
namespace App\Traits;

use Admin\Models\Attachment;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait UseAttachment
{
   function attachments(): MorphMany {
      return $this->morphMany(Attachment::class);
   }
}
