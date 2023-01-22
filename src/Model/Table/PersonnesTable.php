<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Personnes Model
 *
 * @method \App\Model\Entity\Personne newEmptyEntity()
 * @method \App\Model\Entity\Personne newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Personne[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Personne get($primaryKey, $options = [])
 * @method \App\Model\Entity\Personne findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Personne patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Personne[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Personne|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Personne saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Personne[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Personne[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Personne[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Personne[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PersonnesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('personnes');
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
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nom')
            ->maxLength('nom', 50)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('prenoms')
            ->maxLength('prenoms', 150)
            ->requirePresence('prenoms', 'create')
            ->notEmptyString('prenoms');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 13)
            ->requirePresence('tel', 'create')
            ->notEmptyString('tel');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        return $validator;
    }
}
