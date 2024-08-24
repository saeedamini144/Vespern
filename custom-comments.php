<div class="comments-pagination">
    <div class="previous-comments">
        <?php previous_comments_link('Older Comments'); ?>
    </div>
    <div class="next-comments">
        <?php next_comments_link('Newest Comments'); ?>
    </div>
</div>
<ol class="comment-list" id="comments">
    <?php
    wp_list_comments(array(
        'style' => 'ol',
        'max_depth' => 5,
        'callback' => 'wp_learn_list_comments'
    ));
    ?>
</ol>
<div class="comments-pagination">
    <div class="previous-comments">
        <?php previous_comments_link('Older Comments'); ?>
    </div>
    <div class="next-comments">
        <?php next_comments_link('Newest Comments'); ?>
    </div>
</div>


<div class="add-comment">
    <?php

    $commenter = wp_get_current_commenter();

    $fields = array(
        'author' => '<div class="mt-2 "><label for="author">Name</label><input id="author" name="author" class="form-control" type="text" value=" ' . esc_attr($commenter['comment_author']) . ' " /></div>',
        'email' => '<div class="mt-2 "><label for="email">Email</label><input id="email" name="email" class="form-control" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" /></div>',
        // 'url' => '<div class="mt-2 w-50"><label for="url">Website</label><input id="url" name="url" class="form-control" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" /></div>',
    );

    $args = array(
        'id_form' => 'custom-comments_form',
        'class_form' => 'custom-comments-form',
        'class_submit' => 'btn btn-primary btn-lg mt-3',
        'label_submit' => __('Send'),
        'title_reply' => __('Write Your Comments'),
        'comment_field' =>  '<div class=""><label for="comment">Comments text</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control"></textarea></div>',
        'fields' => apply_filters('comment_form_default_fields', $fields),
    );
    comment_form($args);
    ?>
</div>