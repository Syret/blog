<div class="span8">
    <h1><?=$post['post_subject']?></h1>
    <p><?=$post['post_text']?></p>
    <div>
        <span class="badge badge-success">Posted 2012-08-02 20:47:04</span><div class="pull-right">
            <?foreach ($tags as $tag):?>
                <a href="#"><span class="label label -info">
                    <?=$tag['tag_name']?></span></a>
            <?endforeach?>
            <span class="label">alice</span>
            <span class="label">story</span>
            <span class="label">blog</span>
            <span class="label">personal</span>
        </div>
    </div>
</div>
<? foreach ($comments as $comment): ?>
    <div class="commentBox">
        <ul class="commentList">
            <li>
                <div class="commenterImage">
                    <img src="http://lorempixel.com/50/50/people/6" />
                </div>
                <div class="commentText">
                    <?=$comment['comment_created']?>
                    <?=$comment['comment_author']?>
                    <p><?=$comment['comment_text']?></p>
                </div>
            </li>
        </ul>
        <form class="form-inline" role="form">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Your comments" />
            </div>
            <div class="form-group">
                <button class="btn btn-default">Add</button>
            </div>
        </form>
    </div>
<? endforeach ?>