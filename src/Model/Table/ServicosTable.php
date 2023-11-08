<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Servicos Model
 *
 * @method \App\Model\Entity\Servico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Servico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Servico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Servico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Servico|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Servico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Servico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Servico findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ServicosTable extends Table
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

        $this->setTable('servicos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('titulo_ser')
            ->maxLength('titulo_ser', 220)
            ->notEmpty('titulo_ser', 'Titulo do serviço é obrigatório');

        $validator
            ->scalar('icone_um')
            ->maxLength('icone_um', 45)
            ->notEmpty('icone_um', 'Ícone do serviço é obrigatório');

        $validator
            ->scalar('titulo_um')
            ->maxLength('titulo_um', 45)
            ->requirePresence('titulo_um', 'create')
            ->notEmpty('titulo_um', 'Titulo do serviço é obrigatório');

        $validator
            ->scalar('descricao_um')
            ->requirePresence('descricao_um', 'create')
            ->notEmpty('descricao_um', 'Descrição do serviço é obrigatório');

        $validator
            ->scalar('icone_dois')
            ->maxLength('icone_dois', 45)
            ->notEmpty('icone_dois', 'Ícone do serviço é obrigatório');

        $validator
            ->scalar('titulo_dois')
            ->maxLength('titulo_dois', 45)
            ->notEmpty('titulo_dois', 'Titulo do serviço é obrigatório');

        $validator
            ->scalar('descricao_dois')
            ->notEmpty('descricao_dois', 'Descrição do serviço é obrigatório');

        $validator
            ->scalar('icone_tres')
            ->maxLength('icone_tres', 45)
            ->notEmpty('icone_tres', 'Ícone do serviço é obrigatório');

        $validator
            ->scalar('titulo_tres')
            ->maxLength('titulo_tres', 45)
            ->notEmpty('titulo_tres', 'Titulo do serviço é obrigatório');

        $validator
            ->scalar('descricao_tres')
            ->notEmpty('descricao_tres', 'Descrição do serviço é obrigatório');

        return $validator;
    }



    public function getListarServicoHome($id)
    {
        $query = $this->find()
                    ->select(['titulo_ser', 'icone_um', 'titulo_um', 'descricao_um', 'icone_dois', 'titulo_dois', 'descricao_dois', 'icone_tres', 'titulo_tres', 'descricao_tres'])
                    ->where(['Servicos.id =' => $id]);
        return $query->first();
    }
}
