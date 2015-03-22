---
title: Foreach, break, continue
author: Robin Radic
icon: fa fa-eye
toc:
    foreach: @foreach
    continue: @continue
    break: @break
    
---

#### Overview
- [`@foreach`](#foreach)  
- [`@continue`](#continue)  
- [`@break`](#break)  
  
  
  
  
<a name="foreach"></a>
#### @foreach
The `@foreach` directive provides the `$loop` data inside foreach blocks.
The `$loop` is able to traverse upwards, so it's possible to get the parent loop inside
child loops by accessing `$loop->parent`.  
  
  
  
  
```php
@foreach($stuff as $key => $val)
    $loop->index;       // int, zero based
    $loop->index1;      // int, starts at 1
    $loop->revindex;    // int
    $loop->revindex1;   // int
    $loop->first;       // bool
    $loop->last;        // bool
    $loop->even;        // bool
    $loop->odd;         // bool
    $loop->length;      // int

    @foreach($other as $name => $age)

        $loop->parent->odd;
        {{ $loop->index }}

        @if($loop->odd)
            @continue
        @endif

        @foreach($friends as $foo => $bar)
            $loop->parent->index;
            $loop->parent->parent->index;

            @if($loop->index > 1)
                @break
            @endif

        @endforeach

    @endforeach

@endforeach
```


<a name="continue"></a>
##### @continue
Continue

<a name="break"></a>
##### @break
Break
