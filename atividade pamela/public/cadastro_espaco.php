<?php include '../includes/header.php'; ?>
<h1>Cadastrar Espaço</h1>
<form method="POST" action="../actions/criar_espaco.php">
    <input type="text" name="nome" placeholder="Nome do Espaço" required>
    <input type="text" name="tipo" placeholder="Tipo" required>
    <input type="number" name="capacidade" placeholder="Capacidade" required>
    <textarea name="descricao" placeholder="Descrição"></textarea>
    <button type="submit">Cadastrar</button>
</form>
<?php include '../includes/footer.php'; ?>