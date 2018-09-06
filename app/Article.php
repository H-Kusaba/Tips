<?php
////
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Article extends Model
{
    protected $table = 'article';

    protected $guarded = array('id', 'created_at');

    public static $rules = array(
        'title' => 'required|max:50',
        'p_id'  => 'between: 1,2|required|integer',
        'body'  => 'required',
        'body_code' => ''
    );

    public function getData()
    {
        return $this->id . ':' . $this->title;
    }

    public function scopeIdEqual($query, $str)
    {
        return $query->where('id', $str);
    }

    /*グローバルスコープで5未満の記事を常に出力
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('id', function (Builder $builder){
            $builder->where('id', '<', 5);
        });
    }
    */
}
