<?php

class User {
	
	private $_uid;
	private $_username;
	private $_password;
	private $_name;
	private $_access_lvl;
	private $_email;
	private $_date_inscription;
	private $_date_last_connection;
	private $_url_img_profile;
	
	//Getters
	public function getUid() { return $this->_uid; }
	
	public function getUsername() { return $this->_username; }
	
	public function getPassword() { return $this->_password; }
	
	public function getName() { return $this->_name; }
	
	public function getAccess_lvl() { return $this->_access_lvl; }
	
	public function getEmail() { return $this->_email; }
	
	public function getDate_inscription() { return $this->_date_inscription; }
	
	public function getDate_last_connection() { return $this->_date_last_connection; }
	
	public function getUrl_img_profile() { return $this->_url_img_profile; }
	
	//Setters
	public function setUid($uid) { $this->_uid = $uid; }
	
	public function setUsername($usn) { $this->_username = $usn; }
	
	public function setPassword($pswd) { $this->_password = $pswd; }
	
	public function setName($name) { $this->_name = $name; }
	
	public function setAccess_lvl($lvl) { $this->_access_lvl = $lvl; }
	
	public function setEmail($email) { $this->_email = $email; }
	
	public function setDate_inscription($date) { $this->_date_inscription = $date; }
	
	public function setDate_last_connection($date) { $this->_date_last_connection = $date; }
	
	public function setUrl_img_profile($url) { $this->_url_img_profile = $url; }
	
	public function hydrate(array $data) {
		
		foreach($data as $key => $value) {
			$method = 'set'.ucfirst($key);
			if (method_exists($this, $method)) { $this->$method($value); }
		}
		
	}
	
	public function __construct(array $data) { hydrate($data); }
		
}

?>