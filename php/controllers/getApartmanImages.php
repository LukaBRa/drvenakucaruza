<?php

$apartman = $_GET['apartmanNum'];

@require("../models/apartman.php");

$apartmanData = Apartman::getApartman($apartman);

echo json_encode($apartmanData);