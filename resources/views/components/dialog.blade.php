@props(['id', 'event'])

<div title="Create new user" {{ $attributes->merge(['id' => $id]) }}>
    <p class="validateTips">All form fields are required.</p>
    <form>
        <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="Jane Smith" class="text ui-widget-content ui-corner-all">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="jane@smith.com" class="text ui-widget-content ui-corner-all">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="xxxxxxx" class="text ui-widget-content ui-corner-all">

            <!-- Allow form submission with keyboard without duplicating the dialog button -->
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
    </form>
</div>

<script>
    let dialog = $("#{{$id}}").dialog({
        autoOpen: false,
        height: 450,
        width: 500,
        modal: true,
        buttons: {
            Submit: function() {},
            Cancel: function() {
                dialog.dialog("close");
            }
        },
        // close: function() {
        //     form[0].reset();
        //     allFields.removeClass("ui-state-error");
        // }
    });
    dialog.dialog("open");
</script>