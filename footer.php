<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div><!--/row-->
      <hr>

      <footer>
      	<p>友情链接： 
      		<a href="https://www.gzk.ink" target="_blank">Tstrap主题</a>  
			<a href="#" target="_blank">请自行修改footer.php</a> 
		</p>
        <p>&copy; 2020 <?php $this->options->title() ?>.	 &nbsp;主题界面来自 <a href="https://www.gzk.ink/" target="_blank">Tstrap</a>.</p>
      </footer>
      <?php $this->footer(); ?>
      
      </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="<?php $this->options->siteUrl(); ?>admin/js/jquery.js?v=17.10.30"></script>
<script>
$(document).ready(function() {

    // 聚焦
    $('#title').select();

    // 缩略名自适应宽度
    var slug = $('#slug');

    if (slug.length > 0) {
        var wrap = $('<div />').css({
            'position'  :   'relative',
            'display'   :   'inline-block'
        }),
        justifySlug = $('<pre />').css({
            'display'   :   'block',
            'visibility':   'hidden',
            'height'    :   slug.height(),
            'padding'   :   '0 2px',
            'margin'    :   0
        }).insertAfter(slug.wrap(wrap).css({
            'left'      :   0,
            'top'       :   0,
            'minWidth'  :   '5px',
            'position'  :   'absolute',
            'width'     :   '100%'
        })), originalWidth = slug.width();

        function justifySlugWidth() {
            var val = slug.val();
            justifySlug.text(val.length > 0 ? val : '     ');
        }

        slug.bind('input propertychange', justifySlugWidth);
        justifySlugWidth();
    }

});
function grin(tag) {
	var myField;
	tag = ' ' + tag + ' ';
	if (document.getElementById('new-review-textbox') && document.getElementById('new-review-textbox').type == 'textarea') {
		myField = document.getElementById('new-review-textbox');
	} else {
		return false;
	}
	if (document.selection) {
		myField.focus();
		sel = document.selection.createRange();
		sel.text = tag;
		myField.focus();
	}  else {
		myField.value += tag;
		myField.focus();
	}
}
</script>
</body>
</html>