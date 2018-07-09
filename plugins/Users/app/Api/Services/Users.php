<?php
/**
 * Created by PhpStorm.
 * User: greg
 * Date: 2/Jul/2018
 * Time: 9:41 PM
 */

namespace Users\Api\Services;


class Users {

	public function authenticate($username, $password){}

	public function create(array $data){}

	public function read($id){}

	public function update($id, array $data){}

	public function delete($id){}

	public function forgotPassword($email){}

	public function resetPassword($token, $oldPassword, $newPassword){}

	public function getById(){}

	public function getByAuthToken(){}

	public function getByUsername(){}

	public function getAll(){}

}