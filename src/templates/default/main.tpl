{include file="$themePath/widget/header.tpl"}

<div class="container top-menu">
	<div class="row">
		{include file="$themePath/widget/menu-top.tpl"}
	</div>
</div>

{include file="$themePath/widget/navigation.tpl"}

<div class="container">
	<div class="row content-block">

	{if $document.name}
	<div class="col-lg-12"><h1>{$document.name}</h1></div>
	{/if}
	
	<div class="col-lg-8 col-md-7 col-sm-12">
		{$document.text}
	</div>
	<div class="col-lg-4 col-md-5 hidden-sm">
		{include file="$themePath/widget/sideblock.tpl"}
	</div>
</div>
</div>
 

{include file="$themePath/widget/footer.tpl"}