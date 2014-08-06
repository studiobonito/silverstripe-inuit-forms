<% if $IncludeFormTag %>
<form $AttributesHTML>
<% end_if %>
	<% if $Message %>
	<div id="{$FormName}_error" class="alert alert--{$MessageType}">
        <p>$Message</p>
    </div>
	<% end_if %>
	
	<fieldset>
		<% if $Legend %><legend>$Legend</legend><% end_if %>
        <div class="layout">
            <% loop $Fields %><!--
            --->$FieldHolder<!--
        ---><% end_loop %>
        </div>
	</fieldset>

	<% if $Actions %>
	<div class="text--right">
		<% loop $Actions %>
			$Field
		<% end_loop %>
	</div>
	<% end_if %>
<% if $IncludeFormTag %>
</form>
<% end_if %>
