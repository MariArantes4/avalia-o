
<?php
include '../config/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_id = $_POST['usuario_id'];
    $espaco_id = $_POST['espaco_id'];
    $horario = $_POST['horario'];
    
    // Verificar se o horário já está reservado
    $sql = "SELECT * FROM reservas WHERE espaco_id = '$espaco_id' AND horario = '$horario'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 0) {
        $sql = "INSERT INTO reservas (usuario_id, espaco_id, horario) VALUES ('$usuario_id', '$espaco_id', '$horario')";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../public/fazer_reserva.php?success=1");
        } else {
            header("Location: ../public/fazer_reserva.php?error=1");
        }
    } else {
        header("Location: ../public/fazer_reserva.php?error=2");
    }
}
?>