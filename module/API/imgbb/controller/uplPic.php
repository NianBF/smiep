<?php
$data = array();
$ok = '';

if (isset($_FILES['img']) && !empty($_FILES['img']['name']))
{
    $imgType = $_FILES['img']['type'];
    if ($imgType == 'img/jpeg' || $imgType == 'img/png')
    {
        $imgB64 = base64_encode($_FILES['img']);
        $name = $_FILES['img']['name'];
        curlImgbb($imgB64, $name);
    }
    else
    {
        $data['error'] = 'Formato inválido';
    }
}
else
{
    $data['error'] = 'No se encontró imagen';
}

if (!empty($data))
{
    echo json_encode($data);
}