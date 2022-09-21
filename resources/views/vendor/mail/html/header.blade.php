<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'QuedaLivros')
                <img style="display: block; width: auto; height: auto; margin-left: auto; margin-right: auto;
            width: 200px; height: auto;"
                    src="{{ asset('images/logo.png') }}" style="width: 15%; height: auto;" alt="">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
