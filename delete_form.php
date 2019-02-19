<form action="index.php?do=delete&id=<?= $del_news['id']; ?>" method="post">
	<input type="text" value="<?= $del_news['header']; ?>" readonly>
	<input type="submit" name="submit" value="Удалить">
</form>