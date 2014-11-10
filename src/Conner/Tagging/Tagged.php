<?php namespace Conner\Tagging;

/**
 * Copyright (C) 2014 Robert Conner
 */
class Tagged extends \Eloquent {

	protected $table = 'tagging_tagged';
	public $timestamps = false;
	protected $fillable = ['tag_id'];

	function tag() {
		return $this->belongsTo('Conner\Tagging\Tag');
	}

	public function taggable() {
		return $this->morphTo();
	}

}