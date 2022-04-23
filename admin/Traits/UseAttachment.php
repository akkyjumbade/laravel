<?php
namespace App\Traits;

use Admin\Models\Attachment;

trait UseAttachment
{
   function attachments() {
      return $this->morphMany(Attachment::class);
   }
}
