<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $primaryKey = 'TrackId';
    public $timestamps = false;

    public function tracks() {

    	return $this->belongsToMany('App\Track', 'playlist_track', 'PlaylistId', 'TrackId');

    }
}
