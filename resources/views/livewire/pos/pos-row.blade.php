<tr>
    <td class="text-center table-th">
        @if (count($item->attributes) > 0)
            <span>
                <img src="{{ asset('storage/products/' . $item->attributes[0]) }}"
                    alt="imagen de producto" height="90"
                    width="90" class="rounded">
            </span>
        @endif
    </td>
    <td>
        <h6>{{ $item->name }}</h6>
    </td>
    <td>
        <span
            class="{{ $item->dosis ? 'text-success' : 'text-danger' }}">C$
            {{ $item->price }}</span>
    </td>
    <td>
        <input type="number" id="r{{ $item->id }}"
            wire:change="updateQty({{ $item->id }}, $('#r' + {{ $item->id }}).val() )"
            style="font-size: 1rem!important"
            class="form-control text-center"
            value="{{ $item->quantity }}">
    </td>
    <td class="text-center">
        <h6>
            ${{ number_format($item->price * $item->quantity, 2) }}
        </h6>
    </td>
    <td class="text-center">
        <button
            onclick="Confirm('{{ $item->id }}', 'removeItem', '¿CONFIRMAS ELIMINAR EL REGISTRO?')"
            class="btn btn-dark mbmobile">
            <i class="fas fa-trash-alt"></i>
        </button>
        <button wire:click.prevent="decreaseQty({{ $item->id }})"
            class="btn btn-dark mbmobile">
            <i class="fas fa-minus"></i>
        </button>
        <button wire:click.prevent="increaseQty({{ $item->id }})"
            class="btn btn-dark mbmobile">
            <i class="fas fa-plus"></i>
        </button>

    </td>
</tr>
