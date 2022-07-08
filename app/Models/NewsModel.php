<?php namespace App\Models;
use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    
    public function getNews($slug = false)
    {
        if ($slug === false) {
            /* Devolver todas las noticias */
            return $this->findAll();
        }
        /* Devolvemos solo 1 noticia */
        return $this->where(['slug' => $slug])->first();
    }

}