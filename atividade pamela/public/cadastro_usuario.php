<?php include '../includes/header.php'; ?>
<form method="POST" action="../actions/criar_usuario.php">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="telefone" placeholder="Telefone">
    <button type="submit">Criar Usuário</button>
</form>
<?php include '../includes/footer.php'; ?>
