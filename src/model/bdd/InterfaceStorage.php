<?php

interface InterfaceStorage {

	public function create(Object $c);

	public function getId($id);

	public function getAll();

	public function setId($id, Object $c);

	public function delete($id);

	public function deleteAll();

}

?>