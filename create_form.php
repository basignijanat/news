<h1>Создать новость</h1>
<form action="index.php?do=create" method="post" enctype="multipart/form-data">
	<label for="header">Название</label>
	<input type="text" name="header" id="header" required>
	<br>	
	<label for="shortcontent">Краткое описание</label>
	<textarea name="shortcontent" type="text"></textarea>
	<br>
	<label for="content">Описание</label>
	<textarea name="content" type="text"></textarea>
	<br>
	<label for="author">Автор</label>
	<input type="text" name="author" id="author">
	<br>
	<p>Статус</p>
	<input type="radio" name="status" value=1>Черновик
	<br>
   	<input type="radio" name="status" value=2>Опубликован
   	<br>
	<label for="image">Изображение</label>
	<br>
	<!--input type="text" name="image" id="image"-->
	<input type="file" name="image">
	<br>
	<input type="submit" name="submit" value="Создать">
	<hr>
</form>