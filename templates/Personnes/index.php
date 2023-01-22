<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Personne> $personnes
 */
?>
<div class="personnes index content">
    <?= $this->Html->link(__('Ajouter un Participant'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Liste des Participants') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Nom') ?></th>
                    <th><?= $this->Paginator->sort('Prénoms') ?></th>
                    <th><?= $this->Paginator->sort('N° Téléphonique') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    <th><?= $this->Paginator->sort('Enrégistré le') ?></th>
                    <th><?= $this->Paginator->sort('modifié le') ?></th>
                    <!-- <th class="actions"><?= __('Actions') ?></th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($personnes as $personne): ?>
                <tr>
                    <td><?= $this->Number->format($personne->id) ?></td>
                    <td><?= h($personne->nom) ?></td>
                    <td><?= h($personne->prenoms) ?></td>
                    <td><?= h($personne->tel) ?></td>
                    <td><?= h($personne->email) ?></td>
                    <td><?= h($personne->created) ?></td>
                    <td><?= h($personne->modified) ?></td>
                    <!-- <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $personne->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $personne->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $personne->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personne->id)]) ?>
                    </td> -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Premier')) ?>
            <?= $this->Paginator->prev('< ' . __('Précédent')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Suivant') . ' >') ?>
            <?= $this->Paginator->last(__('Dernier') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} sur {{pages}}, montrant {{current}} enrégistrement(s) sur {{count}} total')) ?></p>
    </div>
</div>
