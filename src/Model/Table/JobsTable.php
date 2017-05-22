<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jobs Model
 *
 * @method \App\Model\Entity\Job get($primaryKey, $options = [])
 * @method \App\Model\Entity\Job newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Job[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Job|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Job patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Job[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Job findOrCreate($search, callable $callback = null, $options = [])
 */
class JobsTable extends Table
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

        $this->setTable('jobs');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('title');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('location', 'create')
            ->notEmpty('location');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->requirePresence('category', 'create')
            ->notEmpty('category');

        $validator
            ->requirePresence('tags', 'create')
            ->notEmpty('tags');

        $validator
            ->requirePresence('type_post', 'create')
            ->notEmpty('type_post');

        $validator
            ->allowEmpty('apply_url');

        $validator
            ->date('validity')
            ->allowEmpty('validity');

        $validator
            ->requirePresence('company_name', 'create')
            ->notEmpty('company_name');

        $validator
            ->allowEmpty('company_description');

        $validator
            ->allowEmpty('company_website');

        $validator
            ->requirePresence('company_logo', 'create')
            ->notEmpty('company_logo');

        $validator
            ->allowEmpty('company_twitter_handle');

        return $validator;
    }
}
