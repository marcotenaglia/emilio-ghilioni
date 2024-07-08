<form class="form-filter" method="get" action="<?php echo esc_url(home_url('/')); ?>">

    <span>
        <label for="titulo">Titulo:</label>
        <select class="select-filter" name="titulo" id="titulo">

            <option value="">-</option>

            <?php
             $args = array(
                'post_type' => 'cuadros_post',
                'posts_per_page' => -1
            );
            $posts = get_posts($args);

            $todos_titulos = array();

            foreach ($posts as $post) {
                $titulos = get_field('cuadro_titulo', $post->ID); 
                if ($titulos) {
                    $todos_titulos[] = $titulos;
                }
            }

            $unicos_titulos = array_unique($todos_titulos);

            foreach ($unicos_titulos as $titulos) {
            echo '<option value="' . esc_attr($titulos) . '">' . esc_html($titulos) . '</option>';
            }
        ?>
        </select>

    </span>


    <span>
        <label for="tecnica">Técnica:</label>
        <select class="select-filter" name="tecnica" id="tecnica">

            <option value="">-</option>
            <?php
             $args = array(
                'post_type' => 'cuadros_post',
                'posts_per_page' => -1
            );
            $posts = get_posts($args);

            $todas_tecnicas = array();

            foreach ($posts as $post) {
                $tecnicas = get_field('tecnica', $post->ID); 
                if ($tecnicas) {
                    $todas_tecnicas[] = $tecnicas;
                }
            }

            $unicas_tecnicas = array_unique($todas_tecnicas);

            foreach ($unicas_tecnicas as $tecnicas) {
            echo '<option value="' . esc_attr($tecnicas) . '">' . esc_html($tecnicas) . '</option>';
            }
        ?>
        </select>

    </span>


    <span>
        <label for="fecha">Fecha:</label>
        <select class="select-filter" name="fecha" id="fecha">

            <option value="">-</option>
            <?php
             $args = array(
                'post_type' => 'cuadros_post',
                'posts_per_page' => -1
            );
            $posts = get_posts($args);
            
            $todas_fechas = array();
            
            foreach ($posts as $post) {
                $fechas = get_field('fecha', $post->ID); 
                if ($fechas) {
                    $todas_fechas[] = $fechas;
                }
            }

            $unicas_fechas = array_unique($todas_fechas);

            foreach ($unicas_fechas as $fechas) {
            echo '<option value="' . esc_attr($fechas) . '">' . esc_html($fechas) . '</option>';
            }
        ?>
        </select>

    </span>

    <button type="submit" class="filter-submit" value="submit">Buscar</button>

</form>