<div id="{$Name}" class="layout__item<% if $FieldHolderClass %> $FieldHolderClass<% end_if %>">
        <% if $Title %><label for="{$ID}">$Title</label><% end_if %>
        $Field
        <% if $Description %><span class="description">$Description</span><% end_if %>
        <% if $Message %><span class="{$MessageClass} {$MessageType}">$Message</span><% end_if %>
</div>