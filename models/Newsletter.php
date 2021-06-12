<?php 

/*
* Classe para a newsletter
*
* @package Site
* @author Victor <victormiguel450@gmail.com>
*/
class Newsletter extends model {

	public $id;
	public $email;
	public $chave;
	public $status;

	/*
	* Função de verificar se e-mail já está registrado
	*
	* Esta função vai verificar se o e-mail já está registrado no sistema
	*
	* @param $email varchar é o e-mail do assinante
	* @return true or false
	*/
	public function get(){

		$sql = "SELECT * FROM newsletter WHERE email = :email";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':email', $this->email);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}

	}

	/*
	* Função de assinar a newsletter
	*
	* Esta função adicionar o usuário ao sistema apenas para ele fazer a verificação
	*
	* @param $email varchar é o e-mail do assinante
	* @param $chave varchar é a chave criada para o assinante
	* @param $status tinyint é o status do assinante
	*/
	public function set(){

		$sql = "INSERT INTO newsletter SET email = :email, chave = :chave, status = :status";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':email', $this->email);
		$sql->bindValue(':chave', $this->chave);
		$sql->bindValue(':status', $this->status);
		$sql->execute();

	}

	/*
	* Função de verificar se dados estão corretos 
	*
	* Esta função vai verificar se os dados passados estão de acordo com a base de dados
	*
	* @param $email varchar é o e-mail do assinante
	* @param $chave varchar é a chave criada para o assinante
	* @param $status tinyint é o status do assinante
	* @return true or false
	*/
	public function check(){

		$sql = "SELECT * FROM newsletter WHERE email = :email AND chave = :chave AND status = :status";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':email', $this->email);
		$sql->bindValue(':chave', $this->chave);
		$sql->bindValue(':status', $this->status);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

	/*
	* Função de atualizar status do assinante
	*
	* Esta função vai atualizar o status do usuário no sistema
	*
	* @param $id int é o id de identificação do usuário
	* @param $status varchar é o status do usuário
	*/
	public function update(){

		$sql = "UPDATE newsletter SET status = :status WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $this->id);
		$sql->bindValue(':status', $this->status);
		$sql->execute();

	}

}