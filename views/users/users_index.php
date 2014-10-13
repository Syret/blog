<ul class="list-group">
    <? foreach ($users as $user): ?>
        <li class="list-group-item"><a href="users/view/<?= $user['user_id'] ?>/<?= $user['username'] ?>"><?=$user['username']?></a></li>
    <? endforeach ?>
</ul>