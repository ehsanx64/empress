<?php
//echo 'Materialize';

add_action('init', function () {
	empress()->main->setCommentWalker(new \empress\mod\materialize\CommentWalker);
	new \empress\mod\materialize\empress_md_slider();

});

add_action('widgets_init', function() {
	register_widget(new \empress\mod\materialize\CategoryList());
});
