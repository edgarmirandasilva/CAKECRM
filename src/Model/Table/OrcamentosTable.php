<?php
namespace App\Model\Table;

use App\Model\Entity\Orcamento;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orcamentos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Oportunidades
 * @property \Cake\ORM\Association\BelongsTo $Produtos
 */
class OrcamentosTable extends Table
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

        $this->table('orcamentos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Oportunidades', [
            'foreignKey' => 'oportunidades_id'
        ]);
        $this->belongsTo('Produtos', [
            'foreignKey' => 'produtos_id'
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['oportunidades_id'], 'Oportunidades'));
        $rules->add($rules->existsIn(['produtos_id'], 'Produtos'));
        return $rules;
    }
}
