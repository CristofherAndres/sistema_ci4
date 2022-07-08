<div class="container my-5">
    <h1>
        <?= esc($titulo) ?>
    </h1>


    <?php if (!empty($news) && is_array($news)) : ?>
        <h3>Hay noticias</h3>
        <h4>Pronto las mostraremos</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Cuerpo</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($news as $news_item) : ?>
                    <tr>
                        <th scope="row"><?= esc($news_item['id']) ?></th>
                        <td><?= esc($news_item['title']) ?></td>
                        <td><?= esc($news_item['body']) ?></td>
                        <td>

                            <a href="<?php echo base_url('/index.php/news/'.$news_item['slug'])?>" class="btn btn-info">
                                <i class="bi bi-eye"></i>
                            </a>

                            <a href="#" class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>

                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>



    <?php else : ?>
        <h3>No hay noticias debes agregarlas</h3>
    <?php endif ?>


</div>