<?php
session_start();
if (!$_SESSION['user']) {
header('Location: /');
}

function generateContent($htmlcontent)
{
    $doc = new DOMDocument();
    // Переводим входной текст в нужную кодировку для отображения кириллицы и грузим её в DOMDocument
    $htmlcontent = mb_convert_encoding($htmlcontent, 'HTML-ENTITIES', 'utf-8');
    $doc->loadHTML($htmlcontent);
    $selector = new DOMXPath($doc);

    // Ищем во входящей строке заголовки h1 с классом chapter
    $result = $selector->query('//h1[@class = "chapter"]');

    // На каждый заголовок создаем ссылку
    $output = '';
    foreach($result as $node) {
        $output .= '<a href="#'.$node->getAttribute('id').'">'.$node->textContent.'</a><br>';
    }
    return $output;
}
?>