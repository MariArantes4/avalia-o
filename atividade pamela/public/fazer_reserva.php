<?php include '../includes/header.php'; ?>
<h1>Fazer Reserva</h1>
<form method="POST" action="../actions/criar_reserva.php">
    <input type="number" name="usuario_id" placeholder="ID do Usuário" required>
    <input type="number" name="espaco_id" placeholder="ID do Espaço" required>
    <input type="datetime-local" name="horario" required>
    <button type="submit">Reservar</button>
</form>
<?php include '../includes/footer.php'; ?>