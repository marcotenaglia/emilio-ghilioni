<form class="form-filter" id="formFilter" method="get" action="<?php echo esc_url(home_url('/')); ?>">

    <span>
        <input type="text" class="input-filter" name="Titulo" id="titulo"
            placeholder="Título"
            value="<?php echo isset($_GET['titulo']) ? esc_attr($_GET['titulo']) : ''; ?>" />
    </span>

    <span>
        <select class="select-filter" name="tecnica" id="tecnica">
            <option value="" disabled selected hidden>Técnica</option>
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

                wp_reset_postdata();

                $unicas_tecnicas = array_unique($todas_tecnicas);

                foreach ($unicas_tecnicas as $tecnicas) {
                    echo '<option value="' . esc_attr($tecnicas) . '">' . esc_html($tecnicas) . '</option>';
                }
            ?>
        </select>
    </span>

    <span>
        <select class="select-filter" name="fecha" id="fecha">
            <option value="" disabled selected hidden>Año</option>
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

                wp_reset_postdata();

                $unicas_fechas = array_unique($todas_fechas);

                foreach ($unicas_fechas as $fechas) {
                    echo '<option value="' . esc_attr($fechas) . '">' . esc_html($fechas) . '</option>';
                }
            ?>
        </select>
    </span>

    <span>
        <select class="select-filter" name="medidas" id="medidas">
            <option value="" disabled selected hidden>Medidas</option>
            <?php
                $args = array(
                    'post_type' => 'cuadros_post',
                    'posts_per_page' => -1
                );
                $posts = get_posts($args);

                $todas_medidas = array();

                foreach ($posts as $post) {
                    $medidas = get_field('medidas', $post->ID); 
                    if ($medidas) {
                        $todas_medidas[] = $medidas;
                    }
                }

                wp_reset_postdata();

                $unicas_medidas = array_unique($todas_medidas);

                foreach ($unicas_medidas as $medidas) {
                    echo '<option value="' . esc_attr($medidas) . '">' . esc_html($medidas) . '</option>';
                }
            ?>
        </select>
    </span>

    <button type="submit" class="filter-submit" value="submit">Buscar</button>

</form>
