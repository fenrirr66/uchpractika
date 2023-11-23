<?php
$connect = mysqli_connect('localhost', 'root', '', 'cinema_db'); // Подключаемся к БД.
if (!$connect) // Проверка на ошибку подключения
{
  exit('MySQL Error: ' . mysqli_error($connect)); // Если подключится не удалось, выводим ошибку
}
$word = (isset($_GET['word'])) ?$_GET['word'] : null; //Забиваем переменную $word
$word = mysqli_real_escape_string($connect, trim($word)); // Экранируем символы и убираем пробелы
if (empty($word)) // Проверяем введено ли слово
{
  echo 'Не введено слово.';
}
else if (iconv_strlen($word, 'utf-8') < 3) //проверяем длину слова (минимум 3 символа
{
  echo 'Слово не может быть короче 3 символов.';
}
else if (iconv_strlen($word, 'utf-8') > 20) // Проверяем длину слова (макс 20 символов) 
{     
  echo 'Слово не может быть более двадцати символов.'; // Если слово более двадцати символов 
} 
else // Если в ходе проверок ни каких ошибок не выявлено, двигаемся дальше 
{ $sql = 'SELECT *
      FROM products
      WHERE name_cinema
      LIKE "%' . $word . '%"'; // Составляем запрос     
  $query = mysqli_query($connect, $sql); // Выполняем запрос     
  if (!$query) // Проверяем запрос     
  {         
    echo 'Ошибка базы данных.'; // Если возникли проблемы при выполнения запроса     
  }     
  else // Все замечательно! Двигаемся дальше     
  {         
    $row = mysqli_fetch_assoc($query);   
    if(!$row)
  {
    echo 'Таких фильмов у нас нет сорри';
  } // Составляем массив         
  else  
  { 
      $src = $row["src"];   
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
      </head>
      <body>
        <a href="<?php echo $src; ?>">Найденный фильм</a>
      </body>
      </html>
      
      <?php
       // Выводим список заголовков статей, в которых было найдено веденное слово         
    }     
  }
            
}
?>
