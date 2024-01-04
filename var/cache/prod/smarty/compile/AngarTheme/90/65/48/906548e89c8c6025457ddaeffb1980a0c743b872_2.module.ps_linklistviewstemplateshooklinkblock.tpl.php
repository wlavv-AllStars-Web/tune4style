<?php
/* Smarty version 4.3.4, created on 2024-01-04 15:28:14
  from 'module:ps_linklistviewstemplateshooklinkblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6596ce8e4fa648_13041331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906548e89c8c6025457ddaeffb1980a0c743b872' => 
    array (
      0 => 'module:ps_linklistviewstemplateshooklinkblock.tpl',
      1 => 1704379737,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6596ce8e4fa648_13041331 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
$_smarty_tpl->tpl_vars['linkBlock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
$_smarty_tpl->tpl_vars['linkBlock']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlock']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['link']->value['id'] == "link-cms-page-3") {?>
            <?php $_smarty_tpl->_assignInScope('title1', ((string)$_smarty_tpl->tpl_vars['link']->value['title']));?>
            <?php $_smarty_tpl->_assignInScope('url1', ((string)$_smarty_tpl->tpl_vars['link']->value['url']));?>
          <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['link']->value['id'] == "link-cms-page-2") {?>
            <?php $_smarty_tpl->_assignInScope('title2', ((string)$_smarty_tpl->tpl_vars['link']->value['title']));?>
            <?php $_smarty_tpl->_assignInScope('url2', ((string)$_smarty_tpl->tpl_vars['link']->value['url']));?>
          <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['link']->value['id'] == "link-cms-page-4") {?>
            <?php $_smarty_tpl->_assignInScope('title3', ((string)$_smarty_tpl->tpl_vars['link']->value['title']));?>
            <?php $_smarty_tpl->_assignInScope('url3', ((string)$_smarty_tpl->tpl_vars['link']->value['url']));?>
          <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['link']->value['id'] == "link-cms-page-1") {?>
            <?php $_smarty_tpl->_assignInScope('title4', ((string)$_smarty_tpl->tpl_vars['link']->value['title']));?>
            <?php $_smarty_tpl->_assignInScope('url4', ((string)$_smarty_tpl->tpl_vars['link']->value['url']));?>
          <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['link']->value['id'] == "link-cms-page-5") {?>
            <?php $_smarty_tpl->_assignInScope('title5', ((string)$_smarty_tpl->tpl_vars['link']->value['title']));?>
            <?php $_smarty_tpl->_assignInScope('url5', ((string)$_smarty_tpl->tpl_vars['link']->value['url']));?>
          <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['link']->value['id'] == "link-custom-page-galleries") {?>
            <?php $_smarty_tpl->_assignInScope('title6', ((string)$_smarty_tpl->tpl_vars['link']->value['title']));?>
            <?php $_smarty_tpl->_assignInScope('url6', ((string)$_smarty_tpl->tpl_vars['link']->value['url']));?>
          <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['link']->value['id'] == "link-custom-page-user-help") {?>
            <?php $_smarty_tpl->_assignInScope('title7', ((string)$_smarty_tpl->tpl_vars['link']->value['title']));?>
            <?php $_smarty_tpl->_assignInScope('url7', ((string)$_smarty_tpl->tpl_vars['link']->value['url']));?>
          <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['link']->value['id'] == "link-static-page-contact") {?>
            <?php $_smarty_tpl->_assignInScope('title8', ((string)$_smarty_tpl->tpl_vars['link']->value['title']));?>
            <?php $_smarty_tpl->_assignInScope('url8', ((string)$_smarty_tpl->tpl_vars['link']->value['url']));?>
          <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['link']->value['id'] == "link-custom-page-partners") {?>
            <?php $_smarty_tpl->_assignInScope('title9', ((string)$_smarty_tpl->tpl_vars['link']->value['title']));?>
            <?php $_smarty_tpl->_assignInScope('url9', ((string)$_smarty_tpl->tpl_vars['link']->value['url']));?>
          <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (Context::getContext()->isMobile() == 1) {
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
<div id="linksFooter" class="links p-0">
  <div class="row" style="width: 100%;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
$_smarty_tpl->tpl_vars['linkBlock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
$_smarty_tpl->tpl_vars['linkBlock']->do_else = false;
?>
    <div class="wrapper" style="width: 100%;">
      <h3 class="h3 hidden-sm-down"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
      <?php $_smarty_tpl->_assignInScope('_expand_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mt_rand' ][ 0 ], array( 10,100000 )));?>
      <div id="buttonLinksFooter" class="title clearfix image-box" data-target="#footer_sub_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
        <span class="h3"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">expand_more</i>
            <i class="material-icons remove">expand_less</i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="linksMenu collapse" >
          <li style="width: 45%;">
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url3']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title3']->value, ENT_QUOTES, 'UTF-8');?>
" style="text-align:center;"><span style="color:#5c5c5c;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title3']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>
          </li>
          <li style="width: 45%;">
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url8']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title8']->value, ENT_QUOTES, 'UTF-8');?>
" style="text-align:center;"><span style="color:#5c5c5c;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title8']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>
          </li>
          <li style="width: 45%;">
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url2']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title2']->value, ENT_QUOTES, 'UTF-8');?>
" style="text-align:center;"><span style="color:#5c5c5c;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title2']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>
          </li>
          <li style="width: 45%;">
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url1']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title1']->value, ENT_QUOTES, 'UTF-8');?>
" style="text-align:center;"><span style="color:#5c5c5c;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title1']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>
          </li>
          <li style="width: 45%;">
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url5']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title5']->value, ENT_QUOTES, 'UTF-8');?>
" style="text-align:center;"><span style="color:#5c5c5c;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title5']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>
          </li>
          <li style="width: 45%;">
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url4']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title4']->value, ENT_QUOTES, 'UTF-8');?>
" style="text-align:center;"><span style="color:#5c5c5c;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title4']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>
          </li>
          <li style="width: 45%;">
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url6']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title6']->value, ENT_QUOTES, 'UTF-8');?>
" style="text-align:center;"><span style="color:#5c5c5c;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title6']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>
          </li>
          <li style="width: 45%;">
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url9']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title9']->value, ENT_QUOTES, 'UTF-8');?>
" style="text-align:center;"><span style="color:#5c5c5c;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title9']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>
          </li>
<div style="margin-top: 33px;padding-bottom: 12px;gap: 2rem;display: flex;">
<a aria-label="Facebook" id="footer_facebook" class="social-icon" style="margin-right: 5px;" href="https://www.facebook.com/allstarsmotorsport" target="_NEW">
<i class="fa fa-facebook-square fa-2x iconeees"></i>
</a>
<a aria-label="Instagram" id="footer_insta" class="social-icon" style="margin-right: 5px;" href="https://instagram.com/allstarsmotorsport" target="_NEW">
<span class="fa fa-instagram fa-2x iconeees"></span>
</a>
<a aria-label="Flickr" id="footer_flickr" class="social-icon" style="margin-right: 5px;" href="https://www.flickr.com/photos/allstarsmotorsport/" target="_NEW">
<span class="fa fa-flickr fa-2x iconeees"></span>
</a>
<a aria-label="Youtube" id="footer_youtube" class="social-icon" style="margin-right: 5px;" href="https://www.youtube.com/user/allstarsmotorsport" target="_NEW">
<span class="fa fa-youtube-square fa-2x iconeees"></span>
</a>
</div>
      </ul>
    </div>

  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
<?php }
} else { ?>
<style>
.footer-container #footer ul li a::before
{
  font-size: 20px;
  left: 1px;
  line-height: 24px;
  position: absolute;
  top: -1px;
  content: "";
  font-family: "FontAwesome";
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.footer-container #footer ul li a::before
{
  color: #dd170e;
}
.footer-container #footer ul li a::before:hover
{
  color: #fff!important;
}
 .footer-container #footer ul li a
{
  color: #fff!important;
  font-size: 16px;
  font-weight: 600;
  padding-left: 25px;
  position: relative;
  text-transform: uppercase;
  word-wrap: break-word;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  text-shadow: 1px 1px #000000;
}
.footer-container #footer ul li a:hover {
  color: #dd170e!important; 
  text-decoration: none;
}

</style>
</div>
</div>
<footer id="footer">
<div style="display:flex;gap: 70px;">
<div class="footer-block col-xs-12 col-md-2 col-sm-2 col-xl-2">
<ul class="fot">
<li class="item"><a id="footer_conditions" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title1']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url1']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title1']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
<li class="item"><a id="footer_conditions" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title2']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url2']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title2']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
</ul> 
</div> 
<div class="footer-block col-xs-12 col-md-2 col-sm-2 col-xl-2">
<ul class="fot">
<li class="item"><a id="footer_conditions" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title3']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url3']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title3']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
<li class="item"><a id="footer_conditions" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title4']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url4']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title4']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
</ul> 
</div> 
<div class="footer-block col-xs-12 col-md-2 col-sm-2 col-xl-2">
<ul class="fot">
<li class="item"><a id="footer_conditions" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title5']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url5']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title5']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
<li class="item"><a id="footer_conditions" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title6']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url6']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title6']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
</ul>
</div> 
<div class="footer-block col-xs-12 col-md-2 col-sm-2 col-xl-2">
<ul class="fot">
<li class="item"><a id="footer_conditions" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title7']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url7']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title7']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
<li class="item"><a id="footer_conditions" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title8']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url8']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title8']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
</ul> 
</div> 
<div class="footer-block col-xs-12 col-md-2 col-sm-2 col-xl-2">
<div style="margin-top: -8px;padding-bottom: 12px;">
<a aria-label="Facebook" id="footer_facebook" class="social-icon" style="margin-right: 5px;" href="https://www.facebook.com/allstarsmotorsport" target="_NEW">
<span class="fa fa-facebook-square fa-2x iconees"></span>
</a>
<a aria-label="Instagram" id="footer_insta" class="social-icon" style="margin-right: 5px;" href="https://instagram.com/allstarsmotorsport" target="_NEW">
<span class="fa fa-instagram fa-2x iconees"></span>
</a>
<a aria-label="Flickr" id="footer_flickr" class="social-icon" style="margin-right: 5px;" href="https://www.flickr.com/photos/allstarsmotorsport/" target="_NEW">
<span class="fa fa-flickr fa-2x iconees"></span>
</a>
<a aria-label="Youtube" id="footer_youtube" class="social-icon" style="margin-right: 5px;" href="https://www.youtube.com/user/allstarsmotorsport" target="_NEW">
<span class="fa fa-youtube-square fa-2x iconees"></span>
</a>
</div>
<ul class="fot">
<li class="item"><a id="footer_conditions" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title9']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url9']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title9']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
</ul> 
</div> 
</div> 
</footer>
<?php }?>

<?php }
}
