<div id="{$Name}" class="layout__item<% if $FieldHolderClass %> $FieldHolderClass<% end_if %><% if $extraClass %> $extraClass<% end_if %>">
    <% if $FieldClass || $LabelClass %>
        <div class="layout">
            <div class="layout__item<% if $LabelClass %> $LabelClass<% end_if %>">
                        <% if $Title %><label for="{$ID}">$Title</label><% end_if %>
            </div><!--
        ---><div class="layout__item<% if $FieldClass %> $FieldClass<% end_if %>">
                $Field
                <% if $Description %><span class="description">$Description</span><% end_if %>
                <% if $Message %><span class="{$MessageClass} {$MessageType}">$Message</span><% end_if %>
            </div>
        </div>
    <% else %>
        <% if $Title %><label for="{$ID}">$Title</label><% end_if %>
        $Field
        <% if $Description %><span class="description">$Description</span><% end_if %>
        <% if $Message %><span class="{$MessageClass} {$MessageType}">$Message</span><% end_if %>
    <% end_if %>
</div>