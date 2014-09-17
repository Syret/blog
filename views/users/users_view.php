<ul class="list-group">
    <? foreach ($user as $attribute => $value: ?>
        <li class="list-group-item"><?=$attribute?>:<?=$value?></li>
    <? endforeach ?>
</ul>