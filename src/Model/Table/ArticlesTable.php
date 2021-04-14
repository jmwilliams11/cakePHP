<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use cake\Utility\Text;
use Cake\Event\EventInterface;

class ArticlesTable extends Table {
    public function initialize (array $config) : void {
        $this->addBehavior('Timestamp'); //automatically populates timestamp (datetime) fields
    }
}
?>