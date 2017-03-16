<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // For security reasons always include fillable line
	// to prevent submission hacks
	// This only allows these attributes through
	protected $fillable = ['title', 'body'];
	// The inverse that filters other attributes out is
	// protected $guarded = ['id']; usefull for preventing change
	// of static information like email or account numbers/statuses
}
