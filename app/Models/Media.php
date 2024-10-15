<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    /**
     * Get the owning mediable model.
     */
     protected static function boot()
    {
        parent::boot();

        // Listen for the deleting event
        static::deleting(function ($media) {
            // Delete the file from storage
            if (Storage::disk('public')->exists($media->media)) {
                Storage::disk('public')->delete($media->media);
            }
        });
    }
    public function mediable()
    {
        return $this->morphTo();
    }
     /**
     * Upload media file and create a new media record.
     *
     * @param UploadedFile $file
     * @param Model $mediable
     * @return static
     */
    public static function uploadMedia(UploadedFile $file, Model $mediable,string $type=NULL)
    {
        $filePath = $file->store(class_basename($mediable), 'public');

        return self::create([
            'media' => $filePath,
            'size' => $file->getSize()/1024,
            'extension'=>$file->extension(),
            'mediable_id' => $mediable->id,
            'mediable_type' => get_class($mediable),
            'type'=>$type ?? NULL
        ]);
    }
}
