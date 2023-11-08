<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Startup Entity
 *
 * @property int $id
 * @property int $responsavel_id
 * @property string $startup
 * @property string|null $descricao
 * @property string|null $slug
 * @property int|null $qnt_acesso
 * @property string|null $logo_url
 * @property int $situation_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Responsavel $responsavel
 * @property \App\Model\Entity\Situation $situation
 * @property \App\Model\Entity\Projeto[] $projetos
 */
class Startup extends Entity
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
        'responsavel_id' => true,
        'startup' => true,
        'descricao' => true,
        'slug' => true,
        'qnt_acesso' => true,
        'logo_url' => true,
        'situation_id' => true,
        'created' => true,
        'modified' => true,
        'responsavel' => true,
        'situation' => true,
        'projetos' => true,

        // 'responsavel_id' => true,
        // 'startup' => true,
        // 'qnt_acesso' => true,
        // 'logo_url' => true,
        // 'situation_id' => true,
        // 'created' => true,
        // 'modified' => true,
        // 'responsavel' => true,
        // 'situation' => true,
        // 'projetos' => true<?php
    ];
}

