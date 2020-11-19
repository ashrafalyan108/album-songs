<?php
require_once('conexion.php');

class CrudSong{

    public function __construct(){}

    public function insertar($song){
        print_r($song);
        $db=Db::conectar();
        $insert=$db->prepare('INSERT INTO songs (nom,artista,nota) values(:nom,:artista,:nota)');
        $insert->bindValue('nom',$song->getNom());
        $insert->bindValue('artista',$song->getArtista());
        $insert->bindValue('nota',$song->getNota());

        $insert->execute();
    }

    public function mostrarLim()
    {
        $db = DB::conectar();
        $result = $db->query('SELECT id,nom,artista,nota FROM songs'
        );
        $num_total_rows = $result->rowCount();
        $NUM_ITEMS_BY_PAGE = 3;
        $pages = $num_total_rows / $NUM_ITEMS_BY_PAGE;
        $pages = ceil($pages);

        return array($NUM_ITEMS_BY_PAGE,$pages);
    }
    public function mostrar(){
        $db=Db::conectar();
        $listaSongs=[];
        $num_rows =$this->mostrarLim()[0];
        $start = ($_GET['pagina']-1)*$num_rows;
        $select=$db->query('SELECT id,nom,artista,nota FROM songs LIMIT '.$start.','.$num_rows);


        foreach($select->fetchAll() as $song){
            $mySong= new song();
            $mySong->setId($song['id']);
            $mySong->setNom($song['nom']);
            $mySong->setArtista($song['artista']);
            $mySong->setNota($song['nota']);
            $listaSongs[]=$mySong;
        }
        return $listaSongs;
    }

    public function eliminar($id){
        $db=Db::conectar();
        $eliminar=$db->prepare('DELETE FROM songs WHERE ID=:id');
        $eliminar->bindValue('id',$id);
        $eliminar->execute();
    }


    public function obtenersong($id){
        $db=Db::conectar();
        $select=$db->prepare('SELECT * FROM songs WHERE ID=:id');
        $select->bindValue('id',$id);
        $select->execute();
        $song=$select->fetch(PDO::FETCH_ASSOC );
        $mySong= new song();
        $mySong->setId($song['id']);
        $mySong->setNom($song['nom']);
        $mySong->setArtista($song['artista']);
        $mySong->setNota($song['nota']);
        return $mySong;
    }

    public function actualizar($song){
        try {
            if ($song->getId() == null) throw new \Exception('ID no vàlid');

            $db = Db::conectar();
            $actualizar = $db->prepare('UPDATE songs SET id=:id, nom=:nom, artista=:artista, nota=:nota  WHERE id=:id');
            $actualizar->bindValue('id', $song->getId());
            $actualizar->bindValue('nom', $song->getNom());
            $actualizar->bindValue('artista', $song->getArtista());
            $actualizar->bindValue('nota', $song->getNota());
            $actualizar->execute();
            return true;
        } catch (\Exception $e) {
            header('Location: actualizar-song.php');
        }
        return false;
    }
}