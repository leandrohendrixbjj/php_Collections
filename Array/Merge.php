<?php
// Uni duas listas. A chave pode não ser mantida]

$cursosA = ['NodeJs'];
$cursosB = ['PHP', 'Laravel'];

$cursos = array_merge($cursosA, $cursosB);

echo "<pre>";
print_r($cursos);
echo "</pre>";
