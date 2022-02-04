<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eng Time Ana Sayfa</title>
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
<ul class="menu cf">
    <li><a href="index.php">Ana Sayfa</a></li>
    <li>
        <a>VERB</a>
        <ul class="submenu">
            <li><a href="php/rnd_regular_verb.php">Regular verbs</a></li>
            <li><a href="php/rnd_irregular_verb.php">İrregular verbs</a></li>
            <li><a href="append/verbAdd.php">Add Verb</a></li>

        </ul>
    </li>
    <li>
        <a>GENERAL</a>
        <ul class="submenu">
            <li><a href="adjectives.php">Adjectives</a></li>
            <li><a href="vocabulary.php">Vocabulary</a></li>
        </ul>
    </li>
    <li>
        <a>Technical</a>
        <ul class="submenu">
            <li><a href="php/rnd_tech_word.php">Words</a></li>
            <li><a href="techSentences.php">Sentences</a></li>
            <li><a href="techParagraph.php">Paragraph</a></li>
        </ul>
    </li>

    <li>
        <a>Every Day</a>
        <ul class="submenu">
            <li><a href="everyWord.php">Words</a></li>
            <li><a href="everySentences.php">Sentences</a></li>
            <li><a href="everyDialogue.php">Dialogue</a></li>
            <li><a href="everyParagraph.php">Paragraph</a></li>
        </ul>
    </li>
    <li>
        <a>Present</a>
        <ul class="submenu">
            <li><a href="present/simple.php">Simple</a></li>
            <li><a href="present/progressive.php">Progressive</a></li>
            <li><a href="present/perfect.php">Perfect</a></li>
            <li><a href="present/perfectprogressive.php">Perfect Progressive</a></li>
        </ul>
    </li>
    <li>
        <a>Past</a>
        <ul class="submenu">
            <li><a href="past/simple.php">Simple</a></li>
            <li><a href="past/progressive.php">Progressive</a></li>
            <li><a href="past/perfect.php">Perfect</a></li>
            <li><a href="past/perfectprogressive.php">Perfect Progressive</a></li>
        </ul>
    </li>
    <li>
        <a>Future</a>
        <ul class="submenu">
            <li><a href="future/simple.php">Simple</a></li>
            <li><a href="future/progressive.php">Progressive</a></li>
            <li><a href="future/perfect.php">Perfect</a></li>
            <li><a href="future/perfectprogressive.php">Perfect Progressive</a></li>
        </ul>
    </li>
    <li>
        <a>Game</a>
        <ul class="submenu">
            <li><a href="php/rnd_game_regular.php">Regular Verb</a></li>
            <li><a href="#">İrRegular Verb</a></li>
            <li><a href="#">Every Day Word</a></li>
        </ul>
    </li>
</ul>

</body>
</html>
