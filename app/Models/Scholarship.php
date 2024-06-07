<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'scholarship_uuid',
        'scholarship_organization_id',
        'scholarship_name',
        'scholarship_description',
        'scholarship_amount',
        'scholarship_application_deadline',
        'scholarship_eligibility_criteria',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    protected $casts = [
        'scholarship_application_deadline' => 'date',
    ];



    public function organization()
    {
        return $this->belongsTo(Organization::class, 'scholarship_organization_id');
    }

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->scholarship_uuid = (string) Str::orderedUuid();
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
