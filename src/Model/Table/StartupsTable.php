<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Startups Model
 *
 * @property \App\Model\Table\ResponsavelsTable|\Cake\ORM\Association\BelongsTo $Responsavels
 * @property \App\Model\Table\SituationsTable|\Cake\ORM\Association\BelongsTo $Situations
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\HasMany $Projetos
 *
 * @method \App\Model\Entity\Startup get($primaryKey, $options = [])
 * @method \App\Model\Entity\Startup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Startup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Startup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Startup|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Startup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Startup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Startup findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StartupsTable extends Table
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

        $this->setTable('startups');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Responsavels', [
            'foreignKey' => 'responsavel_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Situations', [
            'foreignKey' => 'situation_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Projetos', [
            'foreignKey' => 'startup_id'
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
            ->scalar('startup')
            ->maxLength('startup', 100)
            ->requirePresence('startup', 'create')
            ->notEmpty('startup');

        $validator
            ->integer('qnt_acesso')
            ->allowEmpty('qnt_acesso');

        $validator
            ->scalar('logo_url')
            ->maxLength('logo_url', 125)
            ->allowEmpty('logo_url');

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
        $rules->add($rules->existsIn(['responsavel_id'], 'Responsavels'));
        $rules->add($rules->existsIn(['situation_id'], 'Situations'));

        return $rules;
    }


    
    public function getVerStartup($id)
    {
        $query = $this->find()
                    ->select(['id', 'startup', 'descricao', 'slug', 'created'])
                    ->where(['Startups.id =' => $id, 'Startups.situation_id =' => 1]);
        return $query->first();
    }

    public function getStartupAnt($id)
    {
        $query = $this->find()
                    ->select(['startup'])
                    ->where(['Startups.id < ' => $id, 'Startups.situation_id =' => 1])
                    ->order(['Startups.id' => 'DESC']);
        return $query->first();
    }

    public function getStartupProx($id)
    {
        $query = $this->find()
                    ->select(['Startup'])
                    ->where(['Startups.id > ' => $id, 'Startups.situation_id =' => 1])
                    ->order(['Startups.id' => 'ASC']);
        return $query->first();
    }

    public function getStartupUltimos()
    {
        $query = $this->find()
                    ->select(['id','startup', 'slug', 'descricao'])
                    ->where(['Startups.situation_id =' => 1])
                    ->order(['Startups.id' => 'DESC'])
                    ->limit(6);
        return $query;
    }

    public function getStartupDestaques()
    {
        $query = $this->find()
                    ->select(['id','Startup', 'slug', 'descricao'])
                    ->where(['Startups.situation_id =' => 1])
                    ->order(['Startups.qnt_acesso' => 'DESC'])
                    ->limit(6);
        return $query;
    }

    public function getListarUltStartups()
    {
        $query = $this->find()
                    ->select(['id','startup', 'descricao', 'logo_url', 'slug'])
                    ->where(['Startups.situation_id =' => 1])
                    ->order(['Startups.id' => 'DESC'])
                    ->limit(3);
        return $query;
    }
}
