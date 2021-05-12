<?php
$name = '金';

if (mb_strlen($name) >= 2) {
    echo '2文字以上です。';
} else {
    echo '2文字未満です。';
}