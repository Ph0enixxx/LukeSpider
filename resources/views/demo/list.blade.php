@foreach($content as $value)
    {{$value->id}}<br>
    {{$value->title}}<br>
    {{$value->author}}<br>
    {{$value->keywords}}<br>
    {{$value->description}}<br>
    {{$value->content}}<br>
@endforeach



@foreach($comuln_name as $value)
{{$value->name}}
    @endforeach