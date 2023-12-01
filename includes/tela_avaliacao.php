<div>
<?php
include("../utils/functions.php");
include("../db/conn.php");

$concurso_id = $_GET['concurso_id'];
$participante_id = $_GET['participante_id'];
$participante = getParticipanteById($participante_id, $conn);

if (!empty($participante)) {
    echo '<div class="avaliacao_container">';
    echo '<h1>'.$participante[0]['nome_completo'].'</h1>';

    echo '<p>Personagem: '.$participante[0]['nome_personagem'].' ('.$participante[0]['fonte_personagem'].')</p>';
    echo '<img src="'.$participante[0]['imagem_referencia'].'" alt="Imagem de Referência">';
    echo '</div>';

    echo '<div>';
    echo '<form class="avaliacao_form" name="notas" method="POST" action="../db/notas.php?concurso_id='.$concurso_id.'&participante_id='.$participante_id.'">';
    echo '<label for="nota">Nota:</label><br>';
    echo '<input type="number" name="nota" min="0" max="10"><br>';

    echo '<label for="observacao">Observação:</label><br>';
    echo '<input type="text" name="observacao"><br>';

    echo '<input type="submit" value="Confirmar" onclick="loadPage(\'iniciar_concurso.php?concurso_id=' . $concurso_id . '\')">';
    echo '</form>';
    echo '</div>';
} else {
    echo 'Participante não encontrado.';
}
?>
</div>