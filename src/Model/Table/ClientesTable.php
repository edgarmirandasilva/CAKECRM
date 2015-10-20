<?php

namespace App\Model\Table;

use App\Model\Entity\Cliente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Estado
 * @property \Cake\ORM\Association\BelongsTo $Anegocio
 */
class ClientesTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('clientes');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Estado', [
            'foreignKey' => 'estado_id'
        ]);
        $this->belongsTo('Anegocio', [
            'foreignKey' => 'anegocio_id'
        ]);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->add('id', 'valid', ['rule' => 'numeric'])
                ->allowEmpty('id', 'create');

        $validator
                ->allowEmpty('nome');

        $validator
                ->allowEmpty('nif');

        $validator
                ->allowEmpty('morada');

        $validator
                ->allowEmpty('codigopostal');

        $validator
                ->allowEmpty('site');

        $validator
                ->add('email', 'valid', ['rule' => 'email'])
                ->allowEmpty('email');

        $validator
                ->allowEmpty('tel');

        $validator
                ->allowEmpty('logo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['estado_id'], 'Estado'));
        $rules->add($rules->existsIn(['anegocio_id'], 'Anegocio'));
        return $rules;
    }

}
