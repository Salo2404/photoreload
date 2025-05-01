<!DOCTYPE html>
<html lang="en">

<link>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="css/style.css">
</link>
</head>

<body>
    <h1 class="head">Добавить фото</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data" class="forms">
        <input type="file" name="photo" accept="image/*" required class="load"><br>
        <textarea name="comment" placeholder="Вам комментарий..." required class="comment"></textarea>
        <button type="submit">Загрузить</button>
    </form>
    <h2>Галерея</h2>
    <div id="photo-gallery" class="photo_gallery"></div>
    <h2></h2>
    <div class="vanish"></div>
    <script src="script.js"></script>
</body>

</html>
