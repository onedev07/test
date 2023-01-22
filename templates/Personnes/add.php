<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personne $personne
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Menu') ?></h4>
            <?= $this->Html->link(__('Liste des Participants'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="personnes form content">
            <?= $this->Form->create($personne) ?>
            <fieldset>
                <legend><?= __('Ajouter un Participant') ?></legend>
                <?php
                    echo $this->Form->control('Nom');
                    echo $this->Form->control('Prénoms');
                    echo $this->Form->control('N° Téléphonique');
                    echo $this->Form->control('Email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Ajouter')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
