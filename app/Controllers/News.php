<?php namespace App\Controllers;
use App\Models\NewsModel;

class News extends BaseController
{
    public function index()
    {
        /* Llamando al modelo News - Accemos a la tabla news */
        $model = model(NewsModel::class);
        /* Obtener noticias llamando a getNews */
        $data=[
            'news' =>  $model->getNews(),
            'titulo' => 'Sección de noticias'
        ];

        return view('templates/header',$data)
        .view('news/overview')
        .view('templates/footer');

    }

    public function view($slug = null)
    {
        $model = model(NewsModel::class);

        /* Se obtiene la noticia del modelo */
        $data['news'] = $model->getNews($slug);

        /* Si no hay noticia, sale un error */
        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }
}