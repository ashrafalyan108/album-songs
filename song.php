<?php
class song
{
    private $id;
    private $nom;
	private $artista;
	private $nota;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

  
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
	
	public function getArtista()
    {
        return $this->artista;
    }

  
    public function setArtista($artista)
    {
        $this->artista = $artista;
    }
	
	public function getNota()
    {
        return $this->nota;
    }

  
    public function setNota($nota)
    {
        $this->nota = $nota;
    }


}