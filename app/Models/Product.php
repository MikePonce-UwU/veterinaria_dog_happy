<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory;


	protected $fillable = ['name','barcode','cost','price','stock','alerts','dosis','image','category_id'];


    protected $casts = [
        'dosis' => 'boolean'
    ];
	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function ventas()
	{
		return $this->hasMany(SaleDetail::class);
	}


	public function getImagenAttribute()
	{
		if($this->image != null)
			return (file_exists('storage/products/' . $this->image) ? $this->image : 'noimg.jpg');
		else
			return 'noimg.jpg';

	}

	public function getPriceAttribute($value)
	{
		//comma por punto
		//return str_replace('.', ',', $value);
		// punto por coma
		return str_replace(',', '.', $value);
	}
	public function getCostAttribute($value)
	{
		//comma por punto
		//return str_replace('.', ',', $value);
		// punto por coma
		return str_replace(',', '.', $value);
	}
	public function setPriceAttribute($value)
	{
        //$this->attributes['price'] = str_replace(',', '.', $value);
		$this->attributes['price'] =str_replace(',', '.', preg_replace( '/,/', '', $value, preg_match_all( '/./', $value) - 1));


	}
	public function setCostAttribute($value)
	{
       		$this->attributes['cost'] =str_replace(',', '.', preg_replace( '/,/', '', $value, preg_match_all( '/./', $value) - 1));

	}




}
