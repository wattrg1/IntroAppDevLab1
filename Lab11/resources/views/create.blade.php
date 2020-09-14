<form method="POST" action="/contacts">
    {{csrf_field()}}
    <div>
        <input type="text" name="first" value="">
    </div>
    <div>
        <input type="text" name="last" value="">
    </div>
    <div>
        <input type="text" name="phone" value="">
    </div>
    <div>
        <input type="button" name="submit" value="submit">
    </div>
</form>