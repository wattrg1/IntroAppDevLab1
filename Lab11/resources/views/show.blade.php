
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <div>
        {{$contact->first}}
    </div>
    <div>
        {{$contact->last}}
    </div>
    <div>
        {{$contact->phone}}
    </div>
    <div>
        <a href="/contacts/{{$contact->id}}/edit" >Edit</a>
    </div>
    <div>
        <a href="/contacts" >Contacts</a>
    </div>
