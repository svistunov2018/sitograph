<div class="col-sm-4">

<label class="radio-inline">
<input type="radio" name="{$form_id}_{$item_id}" id="form_{$item_id}_1" value="1" {if $value == 1}checked{/if} {if $readonly}disabled{/if}>
{_t("yes")}
</label>

<label class="radio-inline">
<input type="radio" name="{$form_id}_{$item_id}" id="form_{$item_id}_2" value="0" {if $value == 0}checked{/if} {if $readonly}disabled{/if}>
{_t("no")}
</label>


</div>