<h1>Редактировать новость</h1>
<form action="index.php?do=edit&id=<?= $edit_news['id']; ?>" method="post" enctype="multipart/form-data">
	<label for="header">Название</label>
	<input type="text" name="header" id="header" value="<?= $edit_news['header']; ?>" required>
	<br>	
	<label for="shortcontent">Краткое описание</label>
	<textarea name="shortcontent" type="text"><?= $edit_news['shortcontent']; ?></textarea>
	<br>
	<label for="content">Описание</label>
	<textarea name="content" type="text"><?= $edit_news['content']; ?></textarea>
	<br>
	<label for="author">Автор</label>
	<input type="text" name="author" id="author" value="<?= $edit_news['author']; ?>">
	<br>
	<p>Статус</p>
	<input type="radio" name="status" value=1 <?= $status_checked[1]; ?>>Черновик
	<br>
   	<input type="radio" name="status" value=2 <?= $status_checked[2]; ?>>Опубликован
   	<br>
	<label for="image">Изображение <?= $edit_news['image']; ?></label>
	<br>
	<!--input type="text" name="image" id="image"-->
	<input type="file" name="image">
	<br>
	<input type="submit" name="submit" value="Сохранить">
	<hr>
</form>