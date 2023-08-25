<x-header data="this is a content component" />
<h1>This is a content page {{56709-8756}}</h1>

{{20+23}}

@if($name=="yashu")
<h2>Hii {{$name}}</h2>
@else
<h2> Hii stranger</h2>
@endif


@for($i=0;$i<10;$i++)
<h2>{{$i}}</h2>
@endfor

@foreach($name as $a)
<h1>{{$a}}</h1>
@endforeach


