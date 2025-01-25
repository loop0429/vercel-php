<?php
require_once __DIR__ . '/../vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://jsonplaceholder.typicode.com/users');

$body = $res->getBody();
$json = json_decode($body->getContents(), true);
// var_export($json);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
<?php foreach ($json as $user): ?>
    <li>
    <?php
        foreach ($user as $key => $value):
            if (gettype($value) === "array") continue;
    ?>
        <?php echo "{$key}: {$value}<br>"; ?>
    <?php endforeach; ?>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>
