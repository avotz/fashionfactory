<?php namespace Fashion\Repos\User;


interface UserRepository {

	public function paginate($limit);
	public function findById($id);
	public function store($data);
	public function update($id, $data);
	public function destroy($id);
	public function search($search);
	public function getLasts();
	
	
}