{extends file="layout.tpl"}
{block name=title}User{/block}
{block name=body}
<h1>User</h1>
<form method="post" action="?view=user&amp;action=add&amp;object=user">
	<label>Name: <input name="user[name]" type="text" /></label>
	<label>Age: <input name="user[age]" type="text" /></label>
	<label>Place: <input name="user[place]" type="text" /></label>
	<button type="submit" class="btn btn-default">add</a>
</form>
{/block}
