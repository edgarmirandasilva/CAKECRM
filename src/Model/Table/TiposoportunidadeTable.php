<?php
namespace App\Model\Table;

use App\Model\Entity\Tiposoportunidade;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tiposoportunidade Model
 *
 * @property \Cake\ORM\Association\HasMany $Oportunidades
 */
class TiposoportunidadeTable extends Table
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

        $this->table('tiposoportunidade');
        $this->displayField('tipos');
        $this->primaryKey('id');

        $this->hasMany('Oportunidades', [
            'foreignKey' => 'tiposoportunidade_id'
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
            ->allowEmpty('tipos');

        $validator
            ->allowEmpty('descri');

        $validator
            ->add('valor', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('valor');

        return $validator;
    }
}
