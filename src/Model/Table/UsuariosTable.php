namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsuariosTable extends Table
{
	
	public function validationDefault(Validator $validator)
	{
		return $validator
			->notEmpty('username', 'Usuário é necessário')
			->notEmpty('password', 'Senha é necessária')
			->notEmpty('role', 'Papel é necessária')
			->add('role', 'inList', [
				'rule' => ['inList', ['CRAD', 'Aluno', 'Professor']],
				'message => 'Por favor, informe um papel válido'
			]);
	}
}
