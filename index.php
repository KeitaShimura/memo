<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Practice</h2>
    <?php
    try {
        $db = new PDO('mysql:dbname=mydb; host=127.0.0.1; charset=utf8','root', '');

    } catch (PDOException $e){
        echo 'DB接続エラー:' . $e->getMessage();
    }

    // $count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="桃", price=210, keyword="缶詰,ピンク,甘い", sales=0, created="2018-01-23", modified="2018-01-23"');
    // echo $count .'件のデータを挿入しました';

    $records = $db->query('SELECT * FROM my_items');
    while ($record = $records->fetch()) {
        print($record['item_name']);
    }
    ?>
</body>
</html>