<?php 
include('config.php') ;
include('dbconfig.php') ;
class User{
	private $nom ;
	private $prenom ;
	private $login;
	private $email ;
    private $pwd;	
	function getnom()
	{
		return $this->nom;
	}
	function getprenom()
	{
		return $this->prenom;
	}
		function getLog()
	{
		return $this->login;
	}
	function getemail()
	{
		return $this->email;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	public function setnom($nom)
	{
		$this->nom=$nom ;
	}
	public function setLog($login)
	{
		$this->login=$login ;
	}
	public function setemail($email)
	{
		$this->email=$email ;
	}
	public function setPWD($pwd)
	{
		$this->pwd=$pwd ;
	}
	public function __construct($nom,$prenom,$login,$email,$pwd)
	{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->login=$login;
		$this->email=$email;
		$this->pwd=$pwd;
	}
	
	}

	class Userr
	{
	private $login;
    private $pwd;	
	public $conn;
		public function setLog($login)
	{
		$this->login=$login ;
	}
	public function setPWD($pwd)
	{
		$this->pwd=$pwd ;
	}
	public function __construct($login,$pwd,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$c=new Database();
		$this->conn=$c->connexion();
	}
	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from users where login='$login' && pwd='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
	}
class UserEmail
{
	private $email ;
	public $conn ;
	public function setemail($email)
	{
		$this->email=$email ;
	}
	public function __construct($email)
	{
		$this->email=$email ;
		$c=new Database();
		$this->conn=$c->connexion();
	}
		public function LogedinF($conn,$email)
	{
		$req="select * from users where email='$email'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
	
}

class Reclamation
{
	private $nom ;
	private $email ;
	private $subject ;
	private $message ;
	function getnom()
	{
		return $this->nom;
	}
	function getemail()
	{
		return $this->email;
	}
	function getsubject()
	{
		return $this->subject;
	}
	function getmessage()
	{
		return $this->message;
	}
	public function setnom($nom)
	{
		$this->nom=$nom ;
	}
	public function setemail($email)
	{
		$this->email=$email ;
	}
	public function setsubject($subject)
	{
		$this->subject=$subject ;
	}
	public function setmessage($message)
	{
		$this->message=$message ;
	}
	public function __construct($nom,$email,$subject,$message)
	{
		$this->nom=$nom ;
		$this->email=$email ;
		$this->subject=$subject ;
		$this->message=$message ;
	}
	
}
class Commande
{
	private $nom ;
	private $email ;
	private $adresse ;
	private $num ;
	function getnom()
	{
		return $this->nom;
	}
	function getemail()
	{
		return $this->email;
	}
	function getadresse()
	{
		return $this->adresse;
	}
	function getnum()
	{
		return $this->num;
	}
	public function setnom($nom)
	{
		$this->nom=$nom ;
	}
	public function setemail($email)
	{
		$this->email=$email ;
	}
	public function setadresse($adresse)
	{
		$this->adresse=$adresse ;
	}
	public function setnum($num)
	{
		$this->num=$num ;
	}
	public function __construct($nom,$email,$adresse,$num)
	{
		$this->nom=$nom ;
		$this->email=$email ;
		$this->adresse=$adresse ;
		$this->num=$num ;
	}
}

	?>