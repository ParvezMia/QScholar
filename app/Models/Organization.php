<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organization extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'org_uuid',
        'org_name',
        'org_email',
        'org_website',
        'org_contact_number',
        'org_address',
        'org_image',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
        'deleted_by',
        'deleted_at',
    ];
    public function scholarships()
    {
        return $this->hasMany(Scholarship::class, 'scholarship_organization_id'); // Adjusted foreign key
    }
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->org_uuid = (string) Str::orderedUuid();
            $model->created_by = auth()->user()->id;
        });

        self::updating(function ($model) {
            $model->updated_by = auth()->user()->id;
        });

        self::deleting(function ($model) {
            $model->deleted_by = auth()->user()->id;
        });
    }

}
