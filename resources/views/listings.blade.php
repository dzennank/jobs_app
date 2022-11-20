<h1>{{$heading}}</h1>
@unless (count($listings) == 0)

    @foreach ($listings as $list)
        <a href="listings/{{$list['id']}}"><h1>{{$list['title']}}</h1></a>
        <p>{{$list['description']}}</p>
    @endforeach
@else
<h1>No Listing</h1>
@endunless