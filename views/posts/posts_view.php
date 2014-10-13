<div class="span8">
    <?foreach ($tags as $tag):?><a href="tags/view/<?=$tag['tag_name']?>"><span class="label label-info"><?=$tag['tag_name']?></span></a><?endforeach?>
    <h1><?= $post['post_subject'] ?></h1>

    <p><?= $post['post_text'] ?></p>

    <div>
        <span class="badge badge-success">Posted 2012-08-02 20:47:04</span>

        <div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span>
            <span class="label">personal</span></div>
    </div>
    <hr>
</div>

<h2>Comments</h2>
<div class="list-group">

    <?foreach ($comments as $comment): ?>
        <div class="commentBox">
            <ul class="commentList">
                <li>
                    <div class="commenterImage">
                        <img src="http://lorempixel.com/50/50/people/6/" />
                    </div>
                    <div class="commentText">
                        <?=$comment['comment_created']?>
                        <?=$comment['comment_author']?>
                        <p><?=$comment['comment_text']?></p>
                    </div>
                </li>
            </ul>
        </div>


    <?endforeach ?>
    <form class="form-inline" method="post" role="form">
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Sinu kommentaar" name="data[comment_text]"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">Lisa</button>
        </div>
    </form>

</div>