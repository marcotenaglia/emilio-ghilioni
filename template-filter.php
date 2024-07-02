<form  method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="medidas">Medidas:</label>
    <input type="text" name="medidas" id="medidas" value="<?php echo esc_attr(get_query_var('medidas')); ?>">

    <label for="tecnica">Técnica:</label>
    <select name="tecnica" id="tecnica">
        <option value="">Seleccione</option>
        <?php
        $options = get_field_object('tecnica');
        if ($options) {
            foreach ($options['choices'] as $value => $label) {
                echo '<option value="' . esc_attr($value) . '">' . esc_html($label) . '</option>';
            }
        }
        ?>
    </select>

    <label for="fecha">Fecha:</label>
    <select name="fecha" id="fecha">
        <option value="">Seleccione</option>
        <?php
        // Obtener las opciones de fecha desde ACF
        $options = get_field_object('fecha');
        if ($options) {
            foreach ($options['choices'] as $value => $label) {
                echo '<option value="' . esc_attr($value) . '">' . esc_html($label) . '</option>';
            }
        }
        ?>
    </select>

    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" value="<?php echo esc_attr(get_query_var('titulo')); ?>">

    <input type="submit" value="Filtrar">
</form>