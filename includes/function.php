<?php
$data = require('data/gallery.php');

function findOneById(int $id)
{
    global $data;
    foreach ($data as $data_img) {
        if ($id == $data_img['id']) {
            return $data_img;
        }
    }
    return false;
}


function getCount()
{
    global $data;
    return count($data);
}

function find_paged(int $limit, int $offset)
{
    global $data;
    $img_select = [];
    $compteur_limit = 0;
    $compteur_offset = 0;
    foreach ($data as $LO_img) {
        if ($compteur_offset < $offset) {
            $compteur_offset++;
            continue;
        }
        $img_select[] = $LO_img;
        $compteur_limit++;
        if ($compteur_limit == $limit) {
            break;
        }
    }
    return $img_select;
}

function ()
