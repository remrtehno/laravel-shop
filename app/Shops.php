<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class Shops extends Model
{
    //
    use Sluggable;
    protected $table = "shops";
    protected $fillable =['title','anonce','user_id','img', 'address', 'map'];


    public function removeImage()
    {
        if($this->img != null)Storage::delete('/uploads/shopa/' . $this->img);
    }

    public  function products(){

        return $this->belongsTo("App\Product",'id','shop_id');
    }

    public  function statistics(){
    	
        return DB::select('select COUNT(*) as cnt, SUM(tovar_price) as price from orders where shop_id = ? and status = 1', [$this->id]);
    }

        public  function statisticsByDate($fromDate, $toDate){

        $from    = Carbon::parse($fromDate)
                             ->startOfDay()        // 2018-09-29 00:00:00.000000
                             ->toDateTimeString(); // 2018-09-29 00:00:00

        $to      = Carbon::parse($toDate)
                         ->endOfDay()          // 2018-09-29 23:59:59.000000
                          ->toDateTimeString(); // 2018-09-29 23:59:59

        if($fromDate || $toDate) {
            // $models  = Model::whereBetween('created_at', [$from, $to])->get();
            //$getmonths= DB::table('Financial_Year') ->whereRaw('"'.$dt.'" between `start_date` and `End_date`')->get();

         return DB::select('select COUNT(*) as cnt, SUM(tovar_price) as price from orders where shop_id = ? and status = 1 and created_at BETWEEN ? AND ?', [$this->id, $from, $to ]);

        }



        return DB::select('select COUNT(*) as cnt, SUM(tovar_price) as price from orders where shop_id = ? and status = 1 and created_at > ?', [$this->id, Carbon::today()->toDateTimeString() ]);

    }

    public function getProducts($id) {
        $cat = Product::where('shop_id', $id)->get();
        return $cat;
    }

    public function getOrders() {
        	return Order::where('shop_id', '=', $this->id)->where('status', '=', 'Ожидает')->get();
    }


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

    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $pat = public_path().'/uploads/shops/'.$filename;
        $img = Image::make($image);
        $img->backup();
        $img->fit(248,217)->save($pat,100);
        $img->reset();
        $this->img = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->img == null)
        {
            return '/uploads/no-image.jpg';
        }

        return '/uploads/shops/' . $this->img;

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
