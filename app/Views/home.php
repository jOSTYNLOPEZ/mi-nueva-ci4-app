<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?= esc($title) ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        body{font-family: Arial, sans-serif; padding: 2rem;}
        .card{border:1px solid #ddd; padding:1rem; border-radius:6px; max-width:800px}
        h1{color:#2b6cb0}
    </style>
</head>
<body>
    <div class="card">
        <h1><?= esc($title) ?></h1>
        <p><?= esc($mensaje) ?></p>
        <p>Ruta: <code>/home</code></p>
    </div>
</body>
</html>
