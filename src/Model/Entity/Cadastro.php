<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cadastro Entity
 *
 * @property int $id
 * @property string $usuario
 * @property string $senha
 * @property string $email
 * @property string $telefone
 * @property string $matricula
 * @property string $papel
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Cadastro extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
