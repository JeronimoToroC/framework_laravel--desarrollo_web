<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/output.css">
  <title>Formulario de Datos</title>
</head>

<body>
  <h1 class="text-3xl font-bold underline">Formulario de Datos</h1>
  <h3>Calcula el índice de masa corporal que tuvo una persona en un tiempo establecido</h3>
  <form action="index.php" method="post">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <label for="lastname">Apellidos:</label>
    <input type="text" id="lastname" name="lastname" required>
    <br><br>

    <label for="height">Altura (metros):</label>
    <input type="number" id="height" name="height" step="0.01" required>
    <br><br>

    <label for="weight">Peso (kilogramos):</label>
    <input type="number" id="weight" name="weight" step="0.01" required>
    <br><br>

    <label for="startDate">Fecha de Inicio:</label>
    <input type="date" id="startDate" name="startDate" required>
    <br><br>

    <label for="endDate">Fecha Final:</label>
    <input type="date" id="endDate" name="endDate" required>
    <br><br>

    <input type="submit" name="onSubmit" value="Enviar">
  </form>
</body>

</html>