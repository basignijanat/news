
<?
	include 'rb.php';
	R::setup('mysql:host=localhost;dbname=mydb', 'root', '');
	function set_news($news, $data, $files)
	{
		$news->header = $data['header'];
		$news->shortcontent = $data['shortcontent'];
		$news->content = $data['content'];
		$news->author = $data['author'];
		$news->update_date = date(DATE_RFC822);
		$news->status = $data['status'];		
		$news->image = $files['image']['name'];
		$uploaddir = dirname(__FILE__).'/uploads/';
		$uploadfile = $uploaddir.basename($files['image']['name']);	
		if (!move_uploaded_file($files['image']['tmp_name'], $uploadfile))
		{
			echo 'Файл не загружен!';
		}
		return $news;
	}
?>
<html>
<head>
	<title>Новости</title>
</head>
<body>
	<?		
		if (isset($_GET['do']))
		{
			if ($_GET['do'] == 'create_form')
				{
					include 'create_form.php';
				}
			elseif ($_GET['do'] == 'create')
			{
				$new_news = R::dispense('news');
				$new_news = set_news($new_news, $_POST, $_FILES);
				$new_news->create_date = date(DATE_RFC822);
				R::store($new_news);
			}
			elseif ($_GET['do'] == 'edit_form')
			{
				$edit_news = R::load('news', $_GET['id']);
				$status_checked = array();
				$status_checked[$edit_news['status']] = 'checked';
				include 'edit_form.php';
			}
			elseif ($_GET['do'] == 'edit')
			{
				$edit_news = R::load('news', $_GET['id']);
				$edit_news = set_news($edit_news, $_POST, $_FILES);				
				R::store($edit_news);
			}
			elseif ($_GET['do'] == 'delete')
			{
				$del_news = R::load('news', $_GET['id']);				
        		R::trash($del_news);
			}
		}
		echo '<h1>Все новости</h1>';
		$all_news = R::find('news');
		if (R::count('news') > 0)
		{
			foreach ($all_news as $news)
			{
				echo $news['header'];
				echo '<a href="index.php?do=edit_form&id='.$news['id'].'"> Редактировать</a> <a href="index.php?do=delete&id='.$news['id'].'">Удалить</a>';
			echo '<br>';
			}
		}
		else
		{
			echo 'Нет новостей!';
		}
		echo '<p><a href="index.php?do=create_form">Создать</a></p>';		
	?>
</body>
</html>
