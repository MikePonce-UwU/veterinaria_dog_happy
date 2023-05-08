@include('common.modalHead')

<div class="row">

    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" wire:model.lazy="name" class="form-control product-name"
                placeholder="ej: Jabon antipulgas" autofocus>
            @error('name')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Código</label>
            <input type="text" wire:model.lazy="barcode" class="form-control"
                {{ $selected_id > 0 ? 'disabled' : '' }} placeholder="ej: 025974">
            @error('barcode')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Costo</label>
            <input type="text" data-type='currency' wire:model.lazy="cost" class="form-control"
                placeholder="ej: 0.00">
            @error('cost')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{ $cost }}
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Precio</label>
            <input type="text" data-type='currency' wire:model.lazy="price" class="form-control"
                placeholder="ej: 0.00">
            @error('price')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Stock</label>
            <input type="number" wire:model.lazy="stock" class="form-control" placeholder="ej: 0">
            @error('stock')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Alertas</label>
            <input type="number" wire:model.lazy="alerts" class="form-control" placeholder="ej: 10">
            @error('alerts')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Categoría</label>
            <select wire:model='categoryid' class="form-control">
                <option value="Elegir" disabled>Elegir</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('categoryid')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <style>
        :root {
            --color-green: #00e1ff;
            --color-red: #cbcaca;
            --color-button: #fdffff;
            --color-black: #000;
        }

        .switch-button {
            display: inline-block;
        }

        .switch-button .switch-button__checkbox {
            display: none;
        }

        .switch-button .switch-button__label {
            margin-top: 5px;
            background-color: var(--color-red);
            width: 2rem;
            height: 1rem;
            border-radius: 3rem;
            display: inline-block;
            position: relative;
            margin: 10px 10px -3px;
        }

        .switch-button .switch-button__label:before {
            transition: .2s;
            display: block;
            position: absolute;
            width: 1rem;
            height: 1rem;
            background-color: var(--color-button);
            content: '';
            border-radius: 50%;
            box-shadow: inset 0px 0px 0px 1px var(--color-black);
        }

        .switch-button .switch-button__checkbox:checked+.switch-button__label {
            background-color: var(--color-green);
        }

        .switch-button .switch-button__checkbox:checked+.switch-button__label:before {
            transform: translateX(1rem);
        }
    </style>

    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Dosis</label> <br>
            <div class="switch-button">
                No <input type="checkbox" name="switch-button" id="switch-label" wire:model="dosis"
                    class="switch-button__checkbox">
                <label for="switch-label" class="switch-button__label"></label> Si
            </div>

            @error('dosis')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
        {{ $dosis }}
    </div>



    <div class="col-sm-12 col-md-8">
        <div class="form-group custom-file">
            <input type="file" class="custom-file-input form-control" wire:model="image"
                accept="image/x-png, image/gif, image/jpeg">
            <label class="custom-file-label">Imágen {{ $image }}</label>
            @error('image')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>



    @include('common.modalFooter')
