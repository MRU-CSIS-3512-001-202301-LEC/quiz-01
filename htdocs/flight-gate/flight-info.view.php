<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Flight Status</title>
</head>

<body>
    <h1>Flight Status For User <?= $user_id ?></h1>
    <h2><?= $airport_name ?></h2>
    <ul>
        <li>Flight: <?= $flight ?></li>
        <li>Dest: <?= $dest ?></li>
    </ul>
</body>

</html>