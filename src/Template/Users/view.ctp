<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['User']), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['User']), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Users']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Setors']), ['controller' => 'Setors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Setor']), ['controller' => 'Setors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view col-lg-10 col-md-9">
    <h3><?= h($user->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th>Setor</th>
            <td><?= $user->has('setor') ? $this->Html->link($user->setor->id, ['controller' => 'Setors', 'action' => 'view', $user->setor->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Username</th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th>Obs</th>
            <td><?= h($user->obs) ?></td>
        </tr>
        <tr>
            <th>Actived</th>
            <td><?= h($user->actived) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($user->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($user->modified) ?></tr>
        </tr>
    </table>
</div>
