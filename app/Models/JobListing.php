<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobListing extends Model {
    use HasFactory;
    protected $fillable = ['name', 'salary' , 'employer_id'];
    public function employer() {
      return $this->belongsTo(Employer::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey:'job_listing_id');
    }
}