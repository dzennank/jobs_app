<h1>{{$heading}}</h1>
@unless (count($listings) == 0)

    @foreach ($listings as $list)
        <h1>{{$list['title']}}</h1>
        <p>{{$list['description']}}</p>
    @endforeach
@else
<h1>No Listing</h1>
@endunless