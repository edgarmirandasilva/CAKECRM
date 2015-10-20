<?php
namespace App\Model\Table;

use App\Model\Entity\Progresso;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Progresso Model
 *
 * @property \Cake\ORM\Association\HasMany $Tarefas
 */
class ProgressoTable extends Table
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

        $this->table('progresso');
        $this->displayField('estados');
        $this->primaryKey('id');

        $this->hasMany('Tarefas', [
            'foreignKey' => 'progresso_id'
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
            ->allowEmpty('estados');

        return $validator;
    }
}
