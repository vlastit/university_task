<?php

if ($_COOKIE['language'] === 'ru') {
    $MESS['TITLE'] = 'Цикл лабораторных работ по курсу <br/> «Электрические системы и сети»';
    $MESS['LAB_1'] = 'Лабораторная работа №1 <br/> "Схема силового круга"';
    $MESS['LAB_IN_PROGRESS'] = 'В разработке';
} elseif ($_COOKIE['language'] === 'eng') {
    $MESS['TITLE'] = 'Cycle of laboratory work on the course <br/> "Electrical systems and networks"';
    $MESS['LAB_1'] = 'Laboratory work №1 <br/> "Power cicle diagram"';
    $MESS['LAB_IN_PROGRESS'] = 'In developing';
} else {
    $MESS['TITLE'] = 'Цикл лабораторних робіт по курсу <br/> «Електричні системи і мережі»';
    $MESS['LAB_1'] = 'Лабораторна робота №1 <br/> "Схема силового кола"';
    $MESS['LAB_IN_PROGRESS'] = 'У розробці';
}