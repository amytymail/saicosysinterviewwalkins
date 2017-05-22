<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $location
 * @property string $type
 * @property string $category
 * @property string $tags
 * @property string $type_post
 * @property string $apply_url
 * @property \Cake\I18n\FrozenDate $validity
 * @property string $company_name
 * @property string $company_description
 * @property string $company_website
 * @property string $company_logo
 * @property string $company_twitter_handle
 */
class Job extends Entity
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
        '*' => true,
        'id' => false
    ];
}
