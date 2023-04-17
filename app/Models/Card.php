<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    /**
     * Profile photo directory.
     *
     * @var string
     */
    private $profilePhotoDirectory = 'images/profile';


    protected $guarded = ['id'];

    /**
     * Profile photo full link.
     *
     * @return string
     */
    protected function profilePhoto(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ($value) ? "/storage/$this->profilePhotoDirectory/" . $value : null,
        );
    }

}
