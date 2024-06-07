<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'scholarship_id',
        'applicant_name',
        'email',
        'phone',
        'dob',
        'address',
        'education_level',
        'gpa',
        'essay',
        'extra_curricular',
        'references',
        'file_path',
        'created_by',
        'updated_by',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id');
    }


    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class, 'scholarship_id');
    }


    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
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
