<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersProfileImg Model
 *
 * @method \App\Model\Entity\UsersProfileImg newEmptyEntity()
 * @method \App\Model\Entity\UsersProfileImg newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\UsersProfileImg> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersProfileImg get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\UsersProfileImg findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\UsersProfileImg patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\UsersProfileImg> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersProfileImg|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\UsersProfileImg saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\UsersProfileImg>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UsersProfileImg>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UsersProfileImg>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UsersProfileImg> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UsersProfileImg>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UsersProfileImg>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UsersProfileImg>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UsersProfileImg> deleteManyOrFail(iterable $entities, array $options = [])
 */
class UsersProfileImgTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setAlias('UsersProfileImg');
        $this->setTable('users_profile_img');
        $this->setDisplayField('path');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'owner_id',
            'joinType' => 'INNER',
        ]);
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
            ->scalar('path')
            ->maxLength('path', 255)
            ->requirePresence('path', 'create')
            ->notEmptyString('path');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->integer('size')
            ->requirePresence('size', 'create')
            ->notEmptyString('size');

        $validator
            ->nonNegativeInteger('owner_id')
            ->notEmptyString('owner_id');

        $validator
            ->dateTime('updated_at')
            ->requirePresence('updated_at', 'create')
            ->notEmptyDateTime('updated_at');

        $validator
            ->dateTime('created_at')
            ->requirePresence('created_at', 'create')
            ->notEmptyDateTime('created_at');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['owner_id'], 'Users'), ['errorField' => 'owner_id']);

        return $rules;
    }
}
