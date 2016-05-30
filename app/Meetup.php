<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Meetup extends Model {

	protected $fillable = [
        'title', 'location', 'image_path', 'url', 'starts_at', 'ends_at', 'published_at'
    ];

    protected $dates = ['starts_at', 'ends_at', 'published_at'];

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }
    
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function getPublishedAtAttribute($date)
    {
        return Carbon::parse($date);
    }

    public function setStartsAtAttribute($date)
    {
        $this->attributes['Starts_at'] = Carbon::parse($date);
    }

    public function getStartsAtAttribute($date)
    {
        return Carbon::parse($date);
    }

    public function setEndsAtAttribute($date)
    {
        $this->attributes['Ends_at'] = Carbon::parse($date);
    }

    public function getEndsAtAttribute($date)
    {
        return Carbon::parse($date);
    }

    public function getImagePathAttribute($path)
    {
        return '/assets/img/meetup/' . $path;
    }

}
