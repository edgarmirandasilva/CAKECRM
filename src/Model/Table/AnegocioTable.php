<?php
namespace App\Model\Table;

use App\Model\Entity\Anegocio;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Anegocio Model
 *
 * @property \Cake\ORM\Association\HasMany $Clientes
 */
class AnegocioTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('anegocio');
        $this->displayField('area');
        $this->primaryKey('id');

        $this->hasMany('Clientes', [
            'foreignKey' => 'anegocio_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('area');

        return $validator;
    }
}
