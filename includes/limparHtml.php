<?php

function limparHtml($data) {
    return htmlspecialchars(strip_tags($data), ENT_QUOTES, 'UTF-8');
}