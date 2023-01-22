<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personne $personne
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Personne'), ['action' => 'edit', $personne->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Personne'), ['action' => 'delete', $personne->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personne->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Personnes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Personne'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="personnes view content">
            <h3><?= h($personne->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($personne->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prenoms') ?></th>
                    <td><?= h($personne->prenoms) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= h($personne->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($personne->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($personne->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($personne->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($personne->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
