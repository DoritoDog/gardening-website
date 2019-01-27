<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $email
 * @property string $size
 * @property string $terrain
 * @property string $delivery
 * @property string $discovery
 * @property string $message
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Order extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'address' => true,
        'phone_number' => true,
        'email' => true,
        'size' => true,
        'terrain' => true,
        'delivery' => true,
        'discovery' => true,
        'message' => true,
        'created' => true,
        'modified' => true
    ];
}
