<div>
    <form method="POST" action="../db/add_concurso.php" name="criar_concurso">
    <h2>Dados básicos:</h2>
        <label for="name">Nome do evento:</label>
        <input type="text" name="name" required>

        <label for="instagram">Instagram do evento</label>
        <input type="text" name="instagram">

        <label for="description">Descrição:</label>
        <input type="text" name="description">

        <label for="rules">Regulamento:</label>
        <input type="text" name="rules">

        <!--<label for="event_date">Data do concurso:</label>
        <input type="date" name="event_date">-->

        <label for="final_date">Fim das inscrições:</label>
        <input type="datetime" name="final_date">

        <!--<label for="max_competitors">Número máximo de participantes:</label>
        <input type="number" name="max_competitors">-->
        
        <label for="categories">categorias:</label>
        <input type="checkbox" name="categories">

        <h2>Staff:</h2>
        <div id="staff_container">
        </div>
        <button type="button" onclick="addMember()">Adicionar Membro</button>
        <button type="submit">Criar</button>
    </form>
</div>