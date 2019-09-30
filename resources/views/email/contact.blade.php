@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
 FORMULARIO DE CONTACTO<br>
@endcomponent
@endslot

![Logo de Programación y más][logo]

{{-- Body --}}


@component('mail::table')
|                   | DETALLE                  	  |
| ------------------|:----------------------------| 
| Nombre            | {{$detalle->name}}          |
| Email             | {{$detalle->email}}         | 
| Mensaje           | {{$detalle->mensaje}}       |
@endcomponent



{{-- Footer --}}
@slot('footer')
@component('mail::footer')
	

© {{ date('Y') }} Todos los derechos reservados TCR Andean Adventures


@endcomponent
@endslot

[logo]: https://www.andeanadventuresperu.com/en/wp-content/uploads/2018/11/logotipo.png
@endcomponent