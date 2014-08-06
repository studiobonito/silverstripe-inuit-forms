<div id="{$Name}" class="layout__item<% if $FieldHolderClass %> $FieldHolderClass<% end_if %>">
	$Field
	<label class="" for="$ID">$Title</label>
    <% if $Message %><span class="{$MessageClass} {$MessageType}">$Message</span><% end_if %>
	<% if $Description %><span class="description">$Description</span><% end_if %>
</div>
