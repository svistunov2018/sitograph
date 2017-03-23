<table class="table">
<tr>
	<td>Page</td>
	<td>Time start</td>
	<td>Run time</td>
	<td>Modules loaded</td>
	<td>SQL queries</td>
</tr>
{foreach from=$debug_log_actions name=loop key=start item=action}
<tr>
	<td>{$action.page}</td>
	<td>{$action.start}</td>
	<td>{$action.run_time}</td>
	<td>
		<a class="link-dashed" data-toggle="collapse" data-target="#{$start|strtotime}_modules">{$action.modules|count} modules</a>
		
	</td>
	<td>
		<a class="link-dashed" data-toggle="collapse" data-target="#{$start|strtotime}_sql">{$action.sql|count} queries</a>
	</td>
</tr>
<tr id="{$start|strtotime}_modules" class="collapse">
	<td colspan="6">
		<p>Modules: {', '|implode:$action.modules}</p>
	</td>
</tr>
<tr id="{$start|strtotime}_sql" class="collapse">
	<td colspan="6">
		<p>SQL:</p>
		<p>{'<br>'|implode:$action.sql}</p>
	</td>
</tr>
{/foreach}
</table>
