<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projeto Entity
 *
 * @property int $id
 * @property string $projeto
 * @property string $descricao
 * @property int $situation_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $startups_id
 *
 * @property \App\Model\Entity\Situation $situation
 * @property \App\Model\Entity\Startup $startup
 */
class Projeto extends Entity
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
        'projeto' => true,
        'descricao' => true,
        'situation_id' => true,
        'created' => true,
        'modified' => true,
        'startups_id' => true,
        'situation' => true,
        'startup' => true
    ];
}
