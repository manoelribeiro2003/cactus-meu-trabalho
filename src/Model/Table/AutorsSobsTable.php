<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AutorsSobs Model
 *
 * @property \App\Model\Table\SituationsTable|\Cake\ORM\Association\BelongsTo $Situations
 *
 * @method \App\Model\Entity\AutorsSob get($primaryKey, $options = [])
 * @method \App\Model\Entity\AutorsSob newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AutorsSob[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AutorsSob|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AutorsSob|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AutorsSob patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AutorsSob[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AutorsSob findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AutorsSobsTable extends Table
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

        $this->setTable('autors_sobs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Situations', [
            'foreignKey' => 'situation_id',
            'joinType' => 'INNER'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 220)
            ->notEmpty('titulo', 'Titulo do sobre o autor é obrigatório');

        /*$validator
            ->scalar('descricao')
            ->notEmpty('descricao', 'Descrição do sobre o autor é obrigatório');*/

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
        $rules->add($rules->existsIn(['situation_id'], 'Situations'));

        return $rules;
    }

    public function getVerSobAutor()
    {
        $query = $this->find()
                    ->select(['titulo', 'descricao', 'situation_id'])
                    ->where(['AutorsSobs.id = ' => 1]);
        return $query->first();
    }
}
