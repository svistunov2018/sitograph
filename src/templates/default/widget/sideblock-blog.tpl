<div class="well">
<form role="form" action="{$blog.baseUrl}">
  <div class="form-group">
	<label for="inputSearch" class="control-label">{_t("blog.label_search")}</label>
	<input type="text" id="inputSearch" name="{$blog.searchUrlParam}" class="form-control"/>
  </div>
  <input type="submit" class="btn btn-primary" value="{_t("blog.btn_search")}"/>
</form>
</div>
<br />

{if $blog_articles_topviews}
<h3>{_t("blog.label_popular_posts")}</h3>
{/if}

{foreach from=$blog_articles_topviews key=article_id item=article} 

<div class="media">
{if $article.pic_preview}
  <div class="media-left">
    <a href="{$lang_url}/blog/{$article.url}/">
      <img class="media-object" src="{$article.pic_preview}" alt="{$article.title}" width="64">
    </a>
  </div>
{/if}
  <div class="media-body">
    <a href="{$lang_url}/blog/{$article.url}/">{$article.title}</a>
  </div>
</div>

{/foreach} 