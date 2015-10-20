<?php
namespace App\Model\Table;

use App\Model\Entity\Estado;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estado Model
 *
 * @property \Cake\ORM\Association\HasMany $Clientes
 */
class EstadoTable extends Table
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

        $this->table('estado');
        $this->displayField('ver');
        $this->primaryKey('id');

        $this->hasMany('Clientes', [
            'foreignKey' => 'estado_id'
        ]);
        
        $this->addBehavior('Xety/Cake3Upload.Upload', [
        'fields' => [
            'avatar' => [
                'path' => 'upload/avatar/:id/:md5'
            ]
        ]
    ]
);
        
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
            ->allowEmpty('ver');

        return $validator;
    }
}
