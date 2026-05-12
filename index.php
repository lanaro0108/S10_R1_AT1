<?php
// Requisito: Uso de arquivos incluídos
include('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Perfil do Usuário</title>
    <style>
        /* Aplica o tema com base na preferência salva no Cookie */
        body {
            font-family: Arial, sans-serif;
            transition: 0.3s;
            background-color: <?php echo $currentTheme === 'escuro' ? '#2c3e50' : '#f4f4f4'; ?>;
            color: <?php echo $currentTheme === 'escuro' ? '#ecf0f1' : '#333'; ?>;
            display: flex;
            justify-content: center;
            padding: 50px;
        }

        .card {
            background: <?php echo $currentTheme === 'escuro' ? '#34495e' : '#fff'; ?>;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        input, select, button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        button {
            background-color: #27ae60;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #2ecc71;
        }

        .info {
            border-top: 1px solid #eee;
            padding-top: 15px;
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <div class="card">
        <h2>Preferências do Usuário</h2>

        <form method="POST">
            <input type="text" name="username" placeholder="Seu nome" required>

            <label for="theme">Tema:</label>
            <select name="theme" id="theme">
                <option value="claro" <?php if ($currentTheme == 'claro') echo 'selected'; ?>>Claro</option>
                <option value="escuro" <?php if ($currentTheme == 'escuro') echo 'selected'; ?>>Escuro</option>
            </select>

            <button type="submit">Salvar Informações</button>
        </form>

        <?php if (isset($_SESSION['user_data'])): ?>
            <div class="info">
                <h3>Dados Salvos:</h3>
                <p>Nome: <?php echo $_SESSION['user_data']['name']; ?></p>
                <p>O tema <?php echo $currentTheme; ?> foi salvo com cookies</p>
            </div>
        <?php endif; ?>
    </div>

</body>

</html>