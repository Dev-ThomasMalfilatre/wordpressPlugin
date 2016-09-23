<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 23/09/2016
 * Time: 14:34
 */

namespace CreateUserPlugin;


class User {

	private $id;
	private $firstname;
	private $lastname;
	private $mail;
	private $phone;
	private $sex;
	private $password;
	private $address;

	/**
	 * User constructor.
	 *
	 * @param $id
	 * @param $firstname
	 * @param $lastname
	 * @param $mail
	 * @param $phone
	 * @param $sex
	 * @param $password
	 * @param $address
	 */
	public function __construct($firstname, $lastname, $mail, $phone, $sex, $password, $address ) {
		$this->id        = $id;
		$this->firstname = $firstname;
		$this->lastname  = $lastname;
		$this->mail      = $mail;
		$this->phone     = $phone;
		$this->sex       = $sex;
		$this->password  = $password;
		$this->address   = $address;
	}


	public function getId() {return $this->id;}
	public function setId( $id ) {$this->id = $id;}
	public function getFirstname() {return $this->firstname;}
	public function setFirstname( $firstname ) {$this->firstname = $firstname;}
	public function getLastname() {return $this->lastname;}
	public function setLastname( $lastname ) {$this->lastname = $lastname;}
	public function getMail() {return $this->mail;}
	public function setMail( $mail ) {$this->mail = $mail;}
	public function getPhone() {return $this->phone;}
	public function setPhone( $phone ) {$this->phone = $phone;}
	public function getSex() {return $this->sex;}
	public function setSex( $sex ) {$this->sex = $sex;}
	public function getPassword() {return $this->password;}
	public function setPassword( $password ) {$this->password = $password;}
	public function getAddress() {return $this->address;}
	public function setAddress( $address ) {$this->address = $address;}


	public function insertIntoDb(){
		$db = new Database();
		$stmt = $db->getConnection()->prepare("INSERT INTO user VALUES (:id, :fname, :lname, :pass, :mail, :phone, :address, :sex, :age)");

		$stmt->bindParam(':id', $this->id );
		$stmt->bindParam(':fname', $this->firstname );
		$stmt->bindParam(':lname', $this->lastname );
		$stmt->bindParam(':pass', $this->password );
		$stmt->bindParam(':mail', $this->mail );
		$stmt->bindParam(':phone', $this->phone );
		$stmt->bindParam(':address', $this->address );
		$stmt->bindParam(':sex', $this->sex );
		$stmt->bindParam(':age', $this->age );

		$stmt->execute();
	}

}