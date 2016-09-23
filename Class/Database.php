<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 23/09/2016
 * Time: 14:26
 */

namespace CreateUserPlugin;


class Database {

	private $cn;
	private $user;
	private $pass;
	private $host;
	private $dbname;

	/**
	 * Database constructor.
	 *
	 * @param $cn
	 * @param $user
	 * @param $pass
	 * @param $host
	 * @param $dbname
	 */
	public function __construct() {
		$this->user   = USER;
		$this->pass   = PASS;
		$this->host   = HOST;
		$this->dbname = DBNAME;

		try{
			$this->cn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);
		} catch (PDOException $e){
			print "ERR CAN'T CONNECT TO DB ! " . $e->getMessage() . "<br/>";
			$this->cn = null;
			die();
		}
	}


}