<?php
session_start();
require '../comunes/auxiliar.php';
comprobar_admin();
borrar_fila('depart');
volver();
