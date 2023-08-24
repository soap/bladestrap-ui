@props([
    'bordered' => false,
    'borderless' => false,
    'striped' => false,
    'hoverable' => false
])
<table class="table">
    <thead>
        <tr>
            {{ $head }}
        </tr>
    </thead>
    <tbody>
        {{ $body }}
    </tbody>
</table>