<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Login'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logins index large-9 medium-8 columns content">
    <h3><?= __('Logins') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matricula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('papel') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logins as $login): ?>
            <tr>
                <td><?= $this->Number->format($login->id) ?></td>
                <td><?= h($login->matricula) ?></td>
                <td><?= h($login->password) ?></td>
                <td><?= h($login->papel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $login->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $login->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $login->id], ['confirm' => __('Are you sure you want to delete # {0}?', $login->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
