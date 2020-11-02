<?php

namespace App;

use App\Shops;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Product extends Model
{
    use Sluggable;
    protected  $table = "products";
    protected $fillable =['title','title_en','title_uz','anonce','price','user_id','is_sale','is_hits','shop_id','label','text','created_at','meta_desc','meta_key'];


    public function getTitle() {
        if(app()->getLocale() == 'ru') return $this->title;
        $lang = "title_".app()->getLocale();
        return $this->{$lang};
    }

    public  function category(){

        return $this->belongsTo("App\ProdCat",'cat_id','id');
    }

    public function getSale() {
        if($this->is_sale) {
            return '<span class="label" style="background: red;border-radius: 0;">Распродажа</span>';
        }
    }
    public function getHits() {
        if($this->is_hits) {
            return '<span class="label" style="background: green;border-radius: 0;">Лучшее предложение</span>';
        }
    }

    public function setSale($value) {
        if($value){
            $this->is_sale = 1;
        }else{
            $this->is_sale = 0;
        }
        $this->save();
    }

    public function setHits($value) {
        if($value){
            $this->is_hits = 1;
        }else{
            $this->is_hits = 0;
        }
        $this->save();
    }

    public function setCategory($id)
    {
        if($id == null) {return;}
        $this->cat_id = $id;
        $this->save();
    }

     public function setShop($id)
    {
        if($id == null) {return;}
        $this->shop_id = $id;
        $this->save();
    }

    public static function add($fields)
    {
    	$percentage = News::find(2);
	    //if (Auth::check() && Auth::user()->role != 'admin'){
		    $fields['price'] = $fields['price'] + ($fields['price'] * (int) $percentage->text);
	    //}
	      
        $post = new static;
        $post->fill($fields);
        $post->save();
        return $post;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function removeImage()
    {
        if($this->img != null)Storage::delete('/uploads/products/small/' . $this->img);
        if($this->img != "") Storage::delete('/uploads/products/prev/' . $this->img);
        if($this->img != "") Storage::delete('/uploads/products/home/' . $this->img);
    }

    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $pat = public_path().'/uploads/products/small/'.$filename;
        $pat2 = public_path().'/uploads/products/prev/'.$filename;
        $pat3 = public_path().'/uploads/products/home/'.$filename;
        $img = Image::make($image);
        $img->backup();
        $img->fit(152,173)->save($pat,100);
        $img->reset();
        $img->backup();
        $img->fit(152,152)->save($pat2,100);
        $img->reset();
        $img->backup();
        $img->fit(400,400)->save($pat3,100);
        $img->reset();
        //$image->storeAs('/uploads', $filename);
        $this->img = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->img == null)
        {
            return '/uploads/no-image.jpg';
        }

        return '/uploads/products/small/' . $this->img;

    }

    public function getImagePrev()
    {
        if($this->img == null)
        {
            return '/uploads/no-image.jpg';
        }

        return '/uploads/products/prev/' . $this->img;

    }
    public function getImageHome()
    {
        if($this->img == null)
        {
            return '/uploads/no-image.jpg';
        }

        return '/uploads/products/home/' . $this->img;

    }

    public function getShopByProduct()
    {

        return Shops::find($this->shop_id);
    }

    public static function getProducts(){
        $products =  self::all();
        return $products;
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
