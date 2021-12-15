
<?php
/*2) Dado este array que contiene una serie de banners y su descripcion:
$tabBanners = array(
    1 => array('http://www.su_site.com' ,'https://picsum.photos/seed/picsum/400/200' ,'Descripción 1'),
    2 => array('http://www.su_site2.com','https://picsum.photos/seed/picsum/400/300','Descripción 2'),
    3 => array('http://www.su_site3.com','https://picsum.photos/seed/picsum/400/250','Descripción 3'));
    Crear un script que tome uno de esos banners aleatoriamente y escriba una imagen
    html enlazada al sitio de la primera posicion del array, que muestre la imagen de la
    segunda posicion, y en cuyo atributo alt y title esten la descripcion contenida en la
    tercera posicion del array.*/
$tabBanners = array(
    1 => array('http://www.su_site.com' ,'https://picsum.photos/seed/picsum/400/200' ,'Descripción 1'),
    2 => array('http://www.su_site2.com','https://picsum.photos/seed/picsum/400/300','Descripción 2'),
    3 => array('http://www.su_site3.com','https://picsum.photos/seed/picsum/400/250','Descripción 3'));
$claves_aleatorias = array_rand($tabBanners);
$array = $tabBanners[$claves_aleatorias];
    

    //echo '<a href ="' ,$array[1], '">',$array[0],'</a>';
    echo "<a href = ", $array[0], "><img src=",$array[1]," alt= ",$array[2]," title = ", $array[2], "></a></img>";
?>