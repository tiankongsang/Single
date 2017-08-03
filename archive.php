<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
 
<main class="container">
    <div class="wrap min">
        <section class="home-title">
            <h1><?php $this->archiveTitle(array(
            'category'  =>  _t('“%s”'),
            'search'    =>  _t('含关键词“%s”的文章'),
            'tag'       =>  _t('含标签“%s”的文章'),
            'author'    =>  _t('“%s”发布的文章')
        ), '', ''); ?></h1>
            <?php if ($this->is('category')) : ?><span><?php echo $this->getDescription(); ?><?php endif; ?>
        </section>
        <section class="home-posts">
            <?php while($this->next()): ?>
            <div class="post-item">
                <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                <p><?php $this->excerpt(100); ?></p>
                <div class="post-meta">
                    <time class="date"><?php $this->date('Y.m.d'); ?></time>
                    <span class="category"><?php $this->category('、'); ?></span>
                    <span class="comments"><?php $this->commentsNum('%d °C'); ?></span>
                </div>
            </div>
            <?php endwhile; ?>
        </section>
        <?php $this->pageNav('&laquo;', '&raquo;'); ?>
    </div>
</main>

<?php $this->need('footer.php'); ?>