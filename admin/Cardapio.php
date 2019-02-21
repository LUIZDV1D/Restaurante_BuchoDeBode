<?php

class Cardapio {
	private $nomeCo;
	private $precoC;
    private $des;
	private $image;

	public function getNomeCo()
    {
        return $this->nomeCo;
    }

    public function setNomeCo($nomeCo)
    {
        $this->nomeCo = $nomeCo;

        return $this;
    }

    public function getPrecoC()
    {
        return $this->precoC;
    }

    public function setPrecoC($precoC)
    {
        $this->precoC = $precoC;

        return $this;
    }

    public function getDes()
    {
        return $this->des;
    }

    public function setDes($des)
    {
        $this->des = $des;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }














}

?>