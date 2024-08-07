<?php
/*
Template Name: Info
*/
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>emilio ghilioni</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

<?php
            get_header();
            ?>

<div class="info-main">
    <div class="info-container">
        <div>
            <div class="info-title-desk">
                <h2>Emilio Ghilioni ( 1935 - 2021 )</h2>
                <h2>artista plástico;</h2>
                <h2>de Rosario.</h2>
            </div>
            <div class="info-title-mobile">
                <h2>Emilio Ghilioni </h2>
                <div>( 1935 - 2021 )</div>
            </div>

        </div>
        <div class="section-info">
            <div class="section-info-header">
                <?php 
                if( is_page('trayectoria') ) { // Reemplaza 'trayectoria' con el slug o ID de la página
                    $image_url = get_field('imagen_info_1'); // Reemplaza 'imagen_info_1' con el nombre del campo que definiste
        
                    if( !empty($image_url) ) {
                        echo '<img src="' . esc_url($image_url) . '" alt="Imagen de la página" class="imagen-info-1 imagenes-info" />';
                    } else {
                        echo 'No se ha seleccionado ninguna imagen.';
                    }
                } else {
                    echo 'Esta no es la página específica.';
                }
                ?>
                <?php 
                if( is_page('trayectoria') ) {
                    $image_url = get_field('imagen_info_2'); // Reemplaza 'imagen_info_2' con el nombre del campo que definiste
        
                    if( !empty($image_url) ) {
                        echo '<img src="' . esc_url($image_url) . '" alt="Imagen de la página" class="imagen-info-2 imagenes-info" />';
                    } else {
                        echo 'No se ha seleccionado ninguna imagen.';
                    }
                } else {
                    echo 'Esta no es la página específica.';
                }
                ?>
            </div>
            <p>
                Emilio Ghilioni nació en Santa Fe el 3 de mayo de <b>1935</b>. Radicado en Rosario a partir de 1955,
                inició
                estudios de arquitectura en la Universidad Nacional del Litoral que concluyó en 1965 ejerciendo desde
                entonces esa profesión paralelamente a su labor en el campo de la plástica.
            </p>
            <p>
                En <b>1957</b> comenzó los cursos de pintura, dibujo y grabado en el taller de Juan Grela con cuyos
                integrantes expuso grupalmente antes de iniciar su secuencia de muestras individuales. A mediados de la
                década del 60 integró el Grupo de Vanguardia de Rosario firmando todas sus declaraciones y manifiestos y
                participando de todas sus muestras, ciclos y acciones compartidas.
            </p>
        </div>

        <div class="section-info">
            <div class="section-info-header">
                <?php 
                if( is_page('trayectoria') ) {
                    $image_url = get_field('imagen_info_3'); // Reemplaza 'imagen_info_3' con el nombre del campo que definiste
        
                    if( !empty($image_url) ) {
                        echo '<img src="' . esc_url($image_url) . '" alt="Imagen de la página" class="imagen-info-3 imagenes-info" />';
                    } else {
                        echo 'No se ha seleccionado ninguna imagen.';
                    }
                } else {
                    echo 'Esta no es la página específica.';
                }
                ?>
                <div class="info-section-title">
                    <div>
                        <h2>Algunas notas </h2>
                        <h2>( por Nancy Rojas )</h2>
                    </div>
                </div>
            </div>
            <p>Algunas notas para la lectura inicial de una trayectoria mediada por la revisión de paradigmas arraigados
                en
                la tradición artística rosarina. <br> -Por Nancy Rojas-</p>
            <p>El contexto del arte vigente pone de manifiesto una visión de la realidad modulada por la exacerbación
                del
                ensayo y la institución del factor riesgo. Las modalidades de construcción de los lenguajes fluyen sobre
                un
                plano de vacilación entre diversos cánones tocando, en algunos casos, ciertos parámetros alusivos a la
                noción de pretéritos presentes.</p>

            <div class="section-info-header">
                <?php 
                            if( is_page('trayectoria') ) {
                                $image_url = get_field('imagen_info_4'); // Reemplaza 'imagen_info_4' con el nombre del campo que definiste
                    
                                if( !empty($image_url) ) {
                                    echo '<img src="' . esc_url($image_url) . '" alt="Imagen de la página" class="imagen-info-4 imagenes-info" />';
                                } else {
                                    echo 'No se ha seleccionado ninguna imagen.';
                                }
                            } else {
                                echo 'Esta no es la página específica.';
                            }
                            ?>
            </div>
            <p>Desde esta perspectiva, es posible señalar que el campo artístico argentino prescribe una compleja trama
                de
                tradiciones del arte que definen instancias precisas de producción, donde han quedado inscriptos una
                serie
                de lineamientos estéticos determinantes para debatir el concepto de identidad. </p>

            <p>La obra de Emilio Ghilioni de la etapa del retorno a la pintura en 1976, se desarrolla sobre la base de
                una
                lectura que incluye cierta tradición artística local vinculada con dicha misión. En sus obras, es
                posible
                retrotraernos a las huellas de artistas como Augusto Schiavoni, Luis Ouvrard y Juan Grela.</p>


            <div class="section-info-header">
                <?php 
                    if( is_page('trayectoria') ) {
                        $image_url = get_field('imagen_info_5'); // Reemplaza 'imagen_info_5' con el nombre del campo que definiste
            
                        if( !empty($image_url) ) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Imagen de la página" class="imagen-info-5 imagenes-info" />';
                        } else {
                            echo 'No se ha seleccionado ninguna imagen.';
                        }
                    } else {
                        echo 'Esta no es la página específica.';
                    }
                    ?>
                <?php 
                    if( is_page('trayectoria') ) {
                        $image_url = get_field('imagen_info_6'); // Reemplaza 'imagen_info_6' con el nombre del campo que definiste
            
                        if( !empty($image_url) ) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Imagen de la página" class="imagen-info-6 imagenes-info" />';
                        } else {
                            echo 'No se ha seleccionado ninguna imagen.';
                        }
                    } else {
                        echo 'Esta no es la página específica.';
                    }
                    ?>
            </div>
            <p> Pero su trayectoria comienza en los años 50 y abarca momentos clave para la instauración de
                transformaciones
                radicales en el campo del arte.</p>
            <p>Por ende, en estas notas, se intenta poner en foco las principales fases del itinerario de creación de
                este
                artista, señalando algunas características de lo que podríamos considerar el rasgo sobresaliente de su
                intención creadora: la vinculación intertextual con modelos específicos de la pintura histórica local.
            </p>
        </div>
        
        
        <div class="section-info">

            <div class="section-info-header">
                <div class="info-section-title-2">
                    <div>
                        <h2>El taller de Grela /</h2>
                        <h2>La etapa</h2>
                        <h2>vanguardista</h2>
                    </div>
                </div>
                
                <?php 
                    if( is_page('trayectoria') ) {
                        $image_url = get_field('imagen_info_7'); // Reemplaza 'imagen_info_7' con el nombre del campo que definiste
                        
                        if( !empty($image_url) ) {
                            echo '<img src="' . esc_url($image_url) . '" alt="Imagen de la página" class="imagen-info-7 imagenes-info" />';
                        } else {
                            echo 'No se ha seleccionado ninguna imagen.';
                        }
                    } else {
                        echo 'Esta no es la página específica.';
                    }
                    ?>
        </div>
        <p>«La tarea de formación plástica en el taller del maestro Juan Grela (…) me permitió penetrar en el
            concepto de lo universal en el arte, en particular en pintura».? </p>
            <p>Luego de las primeras incursiones en la plástica durante su adolescencia, Ghilioni inició un período de
                formación en el taller de Juan Grela. Momento donde el maestro comenzaba a desarrollar un tipo de
                enseñanza ligado a un espectro analítico del lenguaje. Las clases estaban basadas en conocimientos
                teóricos y prácticos sobre la pintura, que privilegiaban, principalmente, los elementos forma, línea,
                valor, color y estructura en el marco de una concepción universal de la representación.</p>
            </div>
            
            <div class="section-info">
                <div class="section-info-header">
                    <?php 
                if( is_page('trayectoria') ) { // Reemplaza 'trayectoria' con el slug o ID de la página
                    $image_url = get_field('imagen_info_1'); // Reemplaza 'imagen_info_1' con el nombre del campo que definiste
                    
                    if( !empty($image_url) ) {
                        echo '<img src="' . esc_url($image_url) . '" alt="Imagen de la página" class="imagen-info-1 imagenes-info" />';
                    } else {
                        echo 'No se ha seleccionado ninguna imagen.';
                    }
                } else {
                    echo 'Esta no es la página específica.';
                }
                ?>
            <?php 
                if( is_page('trayectoria') ) {
                    $image_url = get_field('imagen_info_2'); // Reemplaza 'imagen_info_2' con el nombre del campo que definiste
                    
                    if( !empty($image_url) ) {
                        echo '<img src="' . esc_url($image_url) . '" alt="Imagen de la página" class="imagen-info-2 imagenes-info" />';
                    } else {
                        echo 'No se ha seleccionado ninguna imagen.';
                    }
                } else {
                    echo 'Esta no es la página específica.';
                }
                ?>
        </div>
        <p>Los alumnos recibían una instrucción estricta pero sumamente reflexiva, circunscripta al estudio de
            ciertas
            producciones de artistas clave de la historia del arte local, nacional e internacional. En este sentido,
            para Ghilioni el taller de Grela fue un lugar donde desarrollar no sólo una lectura formal sobre la
            pintura
            como lenguaje, sino también una visión sobre la plástica rosarina, tanto histórica como vigente, donde
            salían a relucir nombres como Schiavoni, Manuel Musto, Ouvrard, Antonio Berni, Juan Berlengieri y los
            integrantes del Grupo Litoral, entre otros. Durante el cursado del taller, impulsado por Grela, Ghilioni
            realizó trabajos de investigación sobre algunos de estos artistas, ya sea individualmente o en grupo.
        </p>
    </div>
</div>
</div>