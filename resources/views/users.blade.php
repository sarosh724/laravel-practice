<x-header/>
<h1>Users page</h1>

{{$names}} has {{20+9}} pencils

@if($names == "sarosh")
    <p>my name is not sarosh</p>
    <p>my name is !sarosh</p>
    @elseif($names !="xyz")
    <p>my name is !sarosh</p>
@endif

@for($i=0;$i!=9;$i++)
    {{$i}}
@endfor

@foreach($cars AS $car)
    {{$car}}
@endforeach

@include('Hello')

<script>
    var cars = @json($cars);
    alert(cars);
</script>



