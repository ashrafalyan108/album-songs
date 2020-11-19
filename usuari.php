<?php
class usuari
{
    private $id;
    private $nom;
	private $cognom;
	private $login;
	private $contra;
	private $rol;


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
	
	public function getCognom()
    {
        return $this->cognom;
    }

  
    public function setCognom($cognom)
    {
        $this->cognom = $cognom;
    }
	
	public function getLogin()
    {
        return $this->login;
    }

  
    public function setLogin($login)
    {
        $this->login = $login;
    }
	
	public function getContra()
    {
        return $this->contra;
    }

  
    public function setContra($contra)
    {
        $this->contra = $contra;
    }

	public function getRol()
    {
        return $this->rol;
    }

  
    public function setRol($rol)
    {
        $this->rol = $rol;
    }


}