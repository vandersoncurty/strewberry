<?php
include("../utils/functions.php");
include("../db/conn.php");
$concurso_id = $_GET['concurso_id'];
$participante_id = $_GET['participante_id'];
$participante = getParticipanteById($participante_id, $conn);

echo '<div>';
echo '<h1>'.$participante['nome_completo'].'</h1>';

echo '<p>Personagem:'.$participante['nome_personagem'].' ('.$participante['fonte_personagem'].')</p>';
echo '<img src="'.$participante['imagem_referencia'].'" alt="Imagem de Referência">';
echo '</div>';

echo '<div>';
    echo '<form name="notas" method="POST" action="../db/notas.php?concurso_id='.$concurso_id.'&participante_id='.$participante_id.'">';
        echo '<label for="nota">Nota:</label><br>
        <input type="number" name="nota" min="0" max="10"><br>

        <label for="observacao">Observação:</label><br>
        <input type="text" name="observacao"><br>

        <input type="submit" value="Confirmar" onclick="loadPage(\'iniciar_concurso.php?concurso_id=' . $concurso_id . '\')">
    </form>
</div>';
?>
