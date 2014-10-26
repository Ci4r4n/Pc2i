<?php

class UserManager {
	
	private $_db; // PDO required
		
	public function setDB(PDO $db) { $this->_db = $db; }
	
	public function __construct(PDO $db) { $this->setDB($db); }
	
	public function getUser($db, $uid) {
		
		$stmt = $db->prepare("SELECT * FROM acccounts WHERE 'uid' = :uid");
		$stmt->bindValue('uid', $uid, PDO::PARAM_INT);
		$stmt->execute(); // TODO : renvoyer un objet de classe user construit à l'aide d'un tableau (PDO::FETCH_ASSOC)
		
	}
	
}

?>