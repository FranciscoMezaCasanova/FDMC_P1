<?php

$libros = [];

$libros[] = [
    "Nombre" => "Libro1",
    "Autor" => "AutorLibro1",
    "Año" => 1940,
    "Numero Paginas" => 75,
    "ISBN" => 1234567890,
    "Capitulos" => [
    "Capitulo1" => "Inicio",
    "PaginasCap1" => 25,
    "Capitulo2" => "Cuerpo",
    "PaginasCap2" => 25,
    "Capitulo3" => "Final",
    "PaginasCap3" => 25
    ]
];
$libros[] = [
    "Nombre" => "Libro2",
    "Autor" => "AutorLibro2",
    "Año" => 1941,
    "Numero Paginas" => 100,
    "ISBN" => 1234567890,
    "Capitulos" => [
    "Capitulo1" => "Comienzo",
    "PaginasCap1" => 25,
    "Capitulo2" => "Ruptura",
    "PaginasCap2" => 25,
    "Capitulo3" => "Feliz",
    "PaginasCap3" => 25,
    "Capitulo4" => "Final",
    "PaginasCap1" => 25,
    ]
];
$libros[] = [
    "Nombre" => "Libro3",
    "Autor" => "AutorLibro3",
    "Año" => 1942,
    "Numero Paginas" => 50,
    "ISBN" => 963852741,
    "Capitulos" => [
    "Capitulo1" => "Principio",
    "PaginasCap1" => 25,
    "Capitulo2" => "Final",
    "PaginasCap2" => 25,
    ]
];

$libros[] = [
    "Nombre" => "Libro4",
    "Autor" => "AutorLibro4",
    "Año" => 1943,
    "Numero Paginas" => 75,
    "ISBN" => 963852741,
    "Capitulos" => [
    "Capitulo1" => "Inicio",
    "PaginasCap1" => 25,
    "Capitulo2" => "Desarrollo",
    "PaginasCap2" => 25,
    "Capitulo3" => "Final",
    "PaginasCap3" => 25
    ]
];

$libros[] = [
    "Nombre" => "Libro5",
    "Autor" => "AutorLibro5",
    "Año" => 1944,
    "Numero Paginas" => 100,
    "ISBN" => 963852741,
    "Capitulos" => [
    "Capitulo1" => "Inicio",
    "PaginasCap1" => 25,
    "Capitulo2" => "Desarrollo",
    "PaginasCap2" => 25,
    "Capitulo3" => "Problema",
    "PaginasCap3" => 25,
    "Capitulo4" => "Final",
    "PaginasCap4" => 25
    ]
];

$libros[] = [
    "Nombre" => "Libro6",
    "Autor" => "AutorLibro6",
    "Año" => 1945,
    "Numero Paginas" => 50,
    "ISBN" => 963852741,
    "Capitulos" => [
    "Capitulo1" => "Inicio",
    "PaginasCap1" => 25,
    "Capitulo2" => "Desarrollo",
    "PaginasCap2" => 10,
    "Capitulo3" => "Final",
    "PaginasCap3" => 15
    ]
];

$libros[] = [
    "Nombre" => "Libro7",
    "Autor" => "AutorLibro7",
    "Año" => 1946,
    "Numero Paginas" => 100,
    "ISBN" => 963852741,
    "Capitulos" => [
    "Capitulo1" => "Inicio",
    "PaginasCap1" => 25,
    "Capitulo2" => "Problematica",
    "PaginasCap2" => 25,
    "Capitulo3" => "Solucion",
    "PaginasCap3" => 25,
    "Capitulo4" => "Final",
    "PaginasCap4" => 25
    ]
];

$libros[] =[
    "Nombre" => "Libro8",
    "Autor" => "AutorLibro8",
    "Año" => 1947,
    "Numero Paginas" => 75,
    "ISBN" => 963852741,
    "Capitulos" => [
    "Capitulo1" => "Inicio",
    "PaginasCap1" => 25,
    "Capitulo2" => "Desarrollo",
    "PaginasCap2" => 25,
    "Capitulo3" => "Final malo",
    "PaginasCap3" => 25
    ]
];

$libros[] = [
    "Nombre" => "Libro9",
    "Autor" => "AutorLibro9",
    "Año" => 1948,
    "Numero Paginas" => 100,
    "ISBN" => 963852741,
    "Capitulos" => [
    "Capitulo1" => "Comienzo de la historia",
    "PaginasCap1" => 25,
    "Capitulo2" => "Crecion de personajes",
    "PaginasCap2" => 25,
    "Capitulo3" => "Problematica",
    "PaginasCap3" => 25,
    "Capitulo4" => "Final",
    "PaginasCap4" => 25    
    ]
];

$libros[] = [
    "Nombre" => "Libro10",
    "Autor" => "AutorLibro10",
    "Año" => 1949,
    "Numero Paginas" => 125,
    "ISBN" => 963852741,
    "Capitulos" => [
    "Capitulo1" => "Comienzo de la aventura",
    "PaginasCap1" => 25,
    "Capitulo2" => "Desarrollo de personajes",
    "PaginasCap2" => 25,
    "Capitulo3" => "Acontecimiento triste",
    "PaginasCap3" => 25,
    "Capitulo4" => "Solucion del problema",
    "PaginasCap4" => 25,
    "Capitulo5" => "Final",
    "PaginasCap5" => 25
    ]
];
echo json_encode($libros);
?>