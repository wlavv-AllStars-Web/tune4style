  {foreach $linkBlocks as $linkBlock}
        {foreach $linkBlock.links as $link}
        {if $link.id == "link-cms-page-3"}
            {assign var="title1" value="`$link.title`"}
            {assign var="url1" value="`$link.url`"}
          {/if}
        {if $link.id == "link-cms-page-2"}
            {assign var="title2" value="`$link.title`"}
            {assign var="url2" value="`$link.url`"}
          {/if}
        {if $link.id == "link-cms-page-4"}
            {assign var="title3" value="`$link.title`"}
            {assign var="url3" value="`$link.url`"}
          {/if}
        {if $link.id == "link-cms-page-1"}
            {assign var="title4" value="`$link.title`"}
            {assign var="url4" value="`$link.url`"}
          {/if}
        {if $link.id == "link-cms-page-5"}
            {assign var="title5" value="`$link.title`"}
            {assign var="url5" value="`$link.url`"}
          {/if}
        {if $link.id == "link-custom-page-galleries"}
            {assign var="title6" value="`$link.title`"}
            {assign var="url6" value="`$link.url`"}
          {/if}
        {if $link.id == "link-custom-page-user-help"}
            {assign var="title7" value="`$link.title`"}
            {assign var="url7" value="`$link.url`"}
          {/if}
        {if $link.id == "link-static-page-contact"}
            {assign var="title8" value="`$link.title`"}
            {assign var="url8" value="`$link.url`"}
          {/if}
        {if $link.id == "link-custom-page-partners"}
            {assign var="title9" value="`$link.title`"}
            {assign var="url9" value="`$link.url`"}
          {/if}
      {/foreach}
{/foreach}
{if Context::getContext()->isMobile() == 1}
{if $page.page_name == 'index'}
<div id="linksFooter" class="links p-0">
  <div class="row" style="width: 100%;">
  {* <pre>{var_dump($linkBlocks,1)}</pre> *}
  {foreach $linkBlocks as $linkBlock}
    <div class="wrapper" style="width: 100%;">
      <h3 class="h3 hidden-sm-down">{$linkBlock.title}</h3>
      {assign var=_expand_id value=10|mt_rand:100000}
      <div id="buttonLinksFooter" class="title clearfix image-box" data-target="#footer_sub_menu_{$_expand_id}" data-toggle="collapse">
        <span class="h3">{$linkBlock.title}</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">expand_more</i>
            <i class="material-icons remove">expand_less</i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_{$_expand_id}" class="linksMenu collapse" >
          <li style="width: 45%;">
            <a href="{$url3}" title="{$title3}" style="text-align:center;"><span style="color:#5c5c5c;">{$title3}</span></a>
          </li>
          <li style="width: 45%;">
            <a href="{$url8}" title="{$title8}" style="text-align:center;"><span style="color:#5c5c5c;">{$title8}</span></a>
          </li>
          <li style="width: 45%;">
            <a href="{$url2}" title="{$title2}" style="text-align:center;"><span style="color:#5c5c5c;">{$title2}</span></a>
          </li>
          <li style="width: 45%;">
            <a href="{$url1}" title="{$title1}" style="text-align:center;"><span style="color:#5c5c5c;">{$title1}</span></a>
          </li>
          <li style="width: 45%;">
            <a href="{$url5}" title="{$title5}" style="text-align:center;"><span style="color:#5c5c5c;">{$title5}</span></a>
          </li>
          <li style="width: 45%;">
            <a href="{$url4}" title="{$title4}" style="text-align:center;"><span style="color:#5c5c5c;">{$title4}</span></a>
          </li>
          <li style="width: 45%;">
            <a href="{$url6}" title="{$title6}" style="text-align:center;"><span style="color:#5c5c5c;">{$title6}</span></a>
          </li>
          <li style="width: 45%;">
            <a href="{$url9}" title="{$title9}" style="text-align:center;"><span style="color:#5c5c5c;">{$title9}</span></a>
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

  {/foreach}
  </div>
</div>
{/if}
{else}
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
<li class="item"><a id="footer_conditions" title="{$title1}" href="{$url1}">{$title1}</a></li>
<li class="item"><a id="footer_conditions" title="{$title2}" href="{$url2}">{$title2}</a></li>
</ul> 
</div> 
<div class="footer-block col-xs-12 col-md-2 col-sm-2 col-xl-2">
<ul class="fot">
<li class="item"><a id="footer_conditions" title="{$title3}" href="{$url3}">{$title3}</a></li>
<li class="item"><a id="footer_conditions" title="{$title4}" href="{$url4}">{$title4}</a></li>
</ul> 
</div> 
<div class="footer-block col-xs-12 col-md-2 col-sm-2 col-xl-2">
<ul class="fot">
<li class="item"><a id="footer_conditions" title="{$title5}" href="{$url5}">{$title5}</a></li>
<li class="item"><a id="footer_conditions" title="{$title6}" href="{$url6}">{$title6}</a></li>
</ul>
</div> 
<div class="footer-block col-xs-12 col-md-2 col-sm-2 col-xl-2">
<ul class="fot">
<li class="item"><a id="footer_conditions" title="{$title7}" href="{$url7}">{$title7}</a></li>
<li class="item"><a id="footer_conditions" title="{$title8}" href="{$url8}">{$title8}</a></li>
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
<li class="item"><a id="footer_conditions" title="{$title9}" href="{$url9}">{$title9}</a></li>
</ul> 
</div> 
</div> 
</footer>
{/if}

