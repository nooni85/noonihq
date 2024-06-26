<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsersProfileImg Entity
 *
 * @property int $id
 * @property string $path
 * @property string $type
 * @property int $size
 * @property int $owner_id
 * @property \Cake\I18n\DateTime $updated_at
 * @property \Cake\I18n\DateTime $created_at
 */
class UsersProfileImg extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'path' => true,
        'type' => true,
        'size' => true,
        'owner_id' => true,
        'updated_at' => true,
        'created_at' => true,
    ];
}
