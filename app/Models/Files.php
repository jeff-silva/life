<?php

namespace App\Models;

class Files extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\Factories\HasFactory;
	use \App\Traits\Model;

	protected $table = 'files';

	protected $fillable = [
		'id',
		'slug',
		'name',
		'folder',
		'size',
		'mime',
		'type',
		'ext',
		'is_text',
		'url',
		'content',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	protected $hidden = [
	    'content',
	];


	public function getSlugAttribute($value)
	{
		return $value? $value: \Str::slug($this->name) .'-'. uniqid();
	}


	public function getNameAttribute($value)
	{
		return $value? $value: uniqid();
	}


	public function getFolderAttribute($value)
	{
		$value = trim($value, '/');
		return $value=='null'? '': $value;
	}


	public function setSizeAttribute($value)
	{
		if ($file = request()->file('content')) {
			$value = $file->getSize();
		}

		$value = is_numeric($value)? $value: 0;
		return $this->attributes['size'] = $value;
	}


	public function setMimeAttribute($value)
	{
		if ($file = request()->file('content')) {
			$value = $file->getClientMimeType();
		}

		$value = $value=='null'? null: $value;
		return $this->attributes['mime'] = $value;
	}


	public function setTypeAttribute($value)
	{
		if ($file = request()->file('content')) {
			$value = preg_replace('/\/.+/', '', $file->getClientMimeType());
		}

		$value = $value=='null'? null: $value;
		return $this->attributes['type'] = $value;
	}


	public function setExtAttribute($value)
	{
		if ($file = request()->file('content')) {
			$value = $file->getClientOriginalExtension();
		}

		$value = $value=='null'? null: $value;
		return $this->attributes['ext'] = $value;
	}


	public function setIsTextAttribute($value)
	{
		if ($file = request()->file('content')) {
			$type = preg_replace('/\/.+/', '', $file->getClientMimeType());
			$ext = $file->getClientOriginalExtension();
			$texts = ['svg', 'csv'];

			if ($type=='text' OR in_array($ext, $texts)) {
				$value = 1;
			}
			else {
				$value = null;
			}
		}

		$value = $value? 1: null;
		return $this->attributes['is_text'] = $value;
	}


	public function setUrlAttribute($value)
	{
		if ($this->slug) {
			$storage_type = config('app_model_files.storage_type'); // database | file
			if ($storage_type=='database') {
				$value = "/api/files/view/{$this->slug}";
			}
			else if ($storage_type=='file') {
				$value = "/uploads/{$this->slug}";
			}
		}
		else {
			$value = '';
		}

		return $this->attributes['url'] = $value;
	}


	public function validationRules()
	{
		return [];
	}


	public static function folders()
	{
		$folders = self::select(['folder'])
			->whereNotNull('folder')
			->where('folder', '!=', '')
			->groupBy('folder')
			->get();

		return $folders;
	}


	public function user()
	{
		return $this->belongsTo(App\Models\User::class, 'photo_id', 'id');
	}


	public function petqrCollar()
	{
		return $this->belongsTo(App\Models\PetqrCollars::class, 'pet_photo_id', 'id');
	}
}
