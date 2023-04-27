<?php

@require("../models/album.php");

$albumImages = Album::getImages();

echo json_encode($albumImages);

?>