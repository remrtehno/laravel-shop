<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class About extends Model
{
    protected $table = "abouts";
    protected $fillable = ['title','title_en','title_uz', 'anonce', 'anonce_en', 'anonce_uz'];



    public static function add($fields) 
    {
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


        if($this->img != "") Storage::delete('/uploads/about/' . $this->img);

    }


    public function uploadImage($image)
    {
        if($image == null) { return; }




        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $pat = public_path().'/uploads/about/'.$filename;
        $img = Image::make($image);
        $img->backup();
        $img->fit(700,441)->save($pat,100);
        $img->reset();
        $img->backup();
        $this->img = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->img == null)
        {
            return '/uploads/about/no-image.jpg';
        }
        return '/uploads/about/' . $this->img;
    }

    public function getTitle() {
        if(app()->getLocale() == 'ru') return $this->title;
        $lang = "title_".app()->getLocale();
        return $this->{$lang};
    }

    public function getAnonce() {
        if(app()->getLocale() == 'ru') return $this->anonce;
        $lang = "anonce_".app()->getLocale();
        return $this->{$lang};
    }


    public static function getAbout(){
        $about =  self::limit(1)->get();
        return $about;
    }
}
