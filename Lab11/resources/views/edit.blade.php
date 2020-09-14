<form method="POST" action="/contacts/{{$contact->id}}">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <div>
        <input type="text" name="first" value="{{$contact->first}}" placeholder="first name">
    </div>
    <div>
        <input type="text" name="last" value="{{$contact->last}}" placeholder="last name">
    </div>
    <div>
        <input type="text" name="phone" value="{{$contact->phone}}" placeholder="phone">
    </div>
    <div>
        <input type="submit" name="submit" value="submit">
    </div>
</form>
<form action="/contacts/{{$contact->id}}" method="POST">
        @method('DELETE')
        @csrf
        <p class="text-right">
            <button type="submit" class="btn btn-sm text-danger">Delete contyact</button>
        </p>
    </form>