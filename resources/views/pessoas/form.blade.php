<div class="flex flex-col mt-8">
    <div class="mb-6 flex flex-col items-end gap-4 md:flex-row">
        <div class="w-full">
            <p class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 mb-2 font-medium">
                Nome
            </p>
            <div class="relative w-full min-w-[200px] h-11">
                <input placeholder="João" name="nome" value="{{ old('nome', $pessoa->nome) }}"
                    @class([
                        'peer',
                        'w-full',
                        'h-full',
                        'bg-transparent',
                        'text-blue-gray-700',
                        'font-sans',
                        'font-normal',
                        'outline',
                        'outline-0',
                        'focus:outline-0',
                        'disabled:bg-blue-gray-50',
                        'disabled:border-0',
                        'transition-all',
                        'placeholder-shown:border',
                        'placeholder-shown:border-blue-gray-200',
                        'placeholder-shown:border-t-blue-gray-200',
                        'border',
                        'focus:border-2',
                        'border-t-transparent',
                        'focus:border-t-transparent',
                        'placeholder:opacity-0',
                        'focus:placeholder:opacity-100',
                        'text-sm',
                        'px-3',
                        'py-3',
                        'rounded-md',
                        'border-blue-gray-200',
                        'focus:border-gray-900',
                        'w-full',
                        'placeholder:opacity-100',
                        'focus:border-t-primary',
                        'border-t-blue-gray-200',
                        'peer',
                        'w-full',
                        'h-full',
                        'bg-transparent',
                        'text-blue-gray-700',
                        'font-sans',
                        'font-normal',
                        'outline',
                        'outline-0',
                        'focus:outline-0',
                        'disabled:bg-blue-gray-50',
                        'disabled:border-0',
                        'transition-all',
                        'placeholder-shown:border',
                        'placeholder-shown:border-blue-gray-200',
                        'placeholder-shown:border-t-blue-gray-200',
                        'border',
                        'focus:border-2',
                        'border-t-transparent',
                        'focus:border-t-transparent',
                        'placeholder:opacity-0',
                        'focus:placeholder:opacity-100',
                        'text-sm',
                        'px-3',
                        'py-3',
                        'rounded-md',
                        'border-blue-gray-200' => !$errors->has('nome'),
                        'focus:border-gray-900' => !$errors->has('nome'),
                        'w-full',
                        'placeholder:opacity-100',
                        'focus:border-t-primary' => !$errors->has('nome'),
                        'border-t-blue-gray-200' => !$errors->has('nome'),
                        'border-red-500' => $errors->has('nome'),
                        'focus:border-red-500' => $errors->has('nome'),
                    ]) />
            </div>
            @error('nome')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="w-full">
            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 mb-2 font-medium">
                CPF
            </p>
            <div class="relative w-full min-w-[200px] h-11">
                <input placeholder="123.456.789-00" name="cpf" value="{{ old('cpf', $pessoa->cpf) }}"
                    @class([
                        'peer',
                        'w-full',
                        'h-full',
                        'bg-transparent',
                        'text-blue-gray-700',
                        'font-sans',
                        'font-normal',
                        'outline',
                        'outline-0',
                        'focus:outline-0',
                        'disabled:bg-blue-gray-50',
                        'disabled:border-0',
                        'transition-all',
                        'placeholder-shown:border',
                        'placeholder-shown:border-blue-gray-200',
                        'placeholder-shown:border-t-blue-gray-200',
                        'border',
                        'focus:border-2',
                        'border-t-transparent',
                        'focus:border-t-transparent',
                        'placeholder:opacity-0',
                        'focus:placeholder:opacity-100',
                        'text-sm',
                        'px-3',
                        'py-3',
                        'rounded-md',
                        'border-blue-gray-200',
                        'focus:border-gray-900',
                        'w-full',
                        'placeholder:opacity-100',
                        'focus:border-t-primary',
                        'border-t-blue-gray-200',
                        'peer',
                        'w-full',
                        'h-full',
                        'bg-transparent',
                        'text-blue-gray-700',
                        'font-sans',
                        'font-normal',
                        'outline',
                        'outline-0',
                        'focus:outline-0',
                        'disabled:bg-blue-gray-50',
                        'disabled:border-0',
                        'transition-all',
                        'placeholder-shown:border',
                        'placeholder-shown:border-blue-gray-200',
                        'placeholder-shown:border-t-blue-gray-200',
                        'border',
                        'focus:border-2',
                        'border-t-transparent',
                        'focus:border-t-transparent',
                        'placeholder:opacity-0',
                        'focus:placeholder:opacity-100',
                        'text-sm',
                        'px-3',
                        'py-3',
                        'rounded-md',
                        'border-blue-gray-200' => !$errors->has('cpf'),
                        'focus:border-gray-900' => !$errors->has('cpf'),
                        'w-full',
                        'placeholder:opacity-100',
                        'focus:border-t-primary' => !$errors->has('cpf'),
                        'border-t-blue-gray-200' => !$errors->has('cpf'),
                        'border-red-500' => $errors->has('cpf'),
                        'focus:border-red-500' => $errors->has('cpf'),
                    ]) />
            </div>
            @error('cpf')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="mb-6 flex flex-col items-end gap-4 md:flex-row">
        <div class="w-full">
            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 mb-2 font-medium">
                Data de Nascimento
            </p>
            <div class="relative h-10 min-w-full w-full">
                <input id="date-picker" name="data_nascimento"
                    value="{{ old('data_nascimento', $pessoa->data_nascimento) }}" @class([
                        'peer',
                        'w-full',
                        'h-full',
                        'bg-transparent',
                        'text-blue-gray-700',
                        'font-sans',
                        'font-normal',
                        'outline',
                        'outline-0',
                        'focus:outline-0',
                        'disabled:bg-blue-gray-50',
                        'disabled:border-0',
                        'transition-all',
                        'placeholder-shown:border',
                        'placeholder-shown:border-blue-gray-200',
                        'placeholder-shown:border-t-blue-gray-200',
                        'border',
                        'focus:border-2',
                        'border-t-transparent',
                        'focus:border-t-transparent',
                        'placeholder:opacity-0',
                        'focus:placeholder:opacity-100',
                        'text-sm',
                        'px-3',
                        'py-3',
                        'rounded-md',
                        'border-blue-gray-200',
                        'focus:border-gray-900',
                        'w-full',
                        'placeholder:opacity-100',
                        'focus:border-t-primary',
                        'border-t-blue-gray-200',
                        'peer',
                        'w-full',
                        'h-full',
                        'bg-transparent',
                        'text-blue-gray-700',
                        'font-sans',
                        'font-normal',
                        'outline',
                        'outline-0',
                        'focus:outline-0',
                        'disabled:bg-blue-gray-50',
                        'disabled:border-0',
                        'transition-all',
                        'placeholder-shown:border',
                        'placeholder-shown:border-blue-gray-200',
                        'placeholder-shown:border-t-blue-gray-200',
                        'border',
                        'focus:border-2',
                        'border-t-transparent',
                        'focus:border-t-transparent',
                        'placeholder:opacity-0',
                        'focus:placeholder:opacity-100',
                        'text-sm',
                        'px-3',
                        'py-3',
                        'rounded-md',
                        'border-blue-gray-200' => !$errors->has('data_nascimento'),
                        'focus:border-gray-900' => !$errors->has('data_nascimento'),
                        'w-full',
                        'placeholder:opacity-100',
                        'focus:border-t-primary' => !$errors->has('data_nascimento'),
                        'border-t-blue-gray-200' => !$errors->has('data_nascimento'),
                        'border-red-500' => $errors->has('data_nascimento'),
                        'focus:border-red-500' => $errors->has('data_nascimento'),
                    ])
                    placeholder="Select a Date" />
            </div>
            @error('data_nascimento')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="mb-6 flex flex-col gap-4 md:flex-row">
        <div class="w-full">
            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 mb-2 font-medium">
                Estado civil
            </p>
            <div class="relative h-10 min-w-full w-full">
                <select name="estado_civil" value="{{ $pessoa->estado_civil }}"
                    class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal text-left outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border text-sm px-3 py-3 rounded-[7px] border-blue-gray-200 border-t-blue-gray-200 aria-[expanded=true]:border-t-primary">
                    <option value="">Selecione uma opção</option>
                    @foreach (['Solteiro(a)', 'Casado(a)', 'Divorciado(a)', 'Viúvo(a)', 'Separado(a)'] as $estadoCivil)
                        <option value="{{ $estadoCivil }}" @selected(old('estado_civil', $pessoa->estado_civil) == $estadoCivil)>{{ $estadoCivil }}</option>
                    @endforeach
                </select>
            </div>
            @error('estado_civil')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="w-full">
            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 mb-2 font-medium">
                Sexo
            </p>
            <div class="relative h-10 min-w-full w-full">
                <select name="sexo" value="{{ $pessoa->sexo }}"
                    class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal text-left outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border text-sm px-3 py-3 rounded-[7px] border-blue-gray-200 border-t-blue-gray-200 aria-[expanded=true]:border-t-primary">
                    <option value="">Selecione uma opção</option>
                    @foreach (['Masculino', 'Feminino', 'Outro'] as $sexo)
                        <option value="{{ $sexo }}" @selected(old('sexo', $pessoa->sexo) == $sexo)>{{ $sexo }}</option>
                    @endforeach
                </select>
            </div>
            @error('sexo')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="mb-6 flex flex-col items-end gap-4 md:flex-row">
        <div class="w-full">
            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 mb-2 font-medium">
                Nome do Pai
            </p>
            <div class="relative w-full min-w-[200px] h-11">
                <input placeholder="João" name="nome_pai" value="{{ old('nome_pai', $pessoa->nome_pai) }}"
                    @class([
                        'peer',
                        'w-full',
                        'h-full',
                        'bg-transparent',
                        'text-blue-gray-700',
                        'font-sans',
                        'font-normal',
                        'outline',
                        'outline-0',
                        'focus:outline-0',
                        'disabled:bg-blue-gray-50',
                        'disabled:border-0',
                        'transition-all',
                        'placeholder-shown:border',
                        'placeholder-shown:border-blue-gray-200',
                        'placeholder-shown:border-t-blue-gray-200',
                        'border',
                        'focus:border-2',
                        'border-t-transparent',
                        'focus:border-t-transparent',
                        'placeholder:opacity-0',
                        'focus:placeholder:opacity-100',
                        'text-sm',
                        'px-3',
                        'py-3',
                        'rounded-md',
                        'border-blue-gray-200',
                        'focus:border-gray-900',
                        'w-full',
                        'placeholder:opacity-100',
                        'focus:border-t-primary',
                        'border-t-blue-gray-200',
                        'peer',
                        'w-full',
                        'h-full',
                        'bg-transparent',
                        'text-blue-gray-700',
                        'font-sans',
                        'font-normal',
                        'outline',
                        'outline-0',
                        'focus:outline-0',
                        'disabled:bg-blue-gray-50',
                        'disabled:border-0',
                        'transition-all',
                        'placeholder-shown:border',
                        'placeholder-shown:border-blue-gray-200',
                        'placeholder-shown:border-t-blue-gray-200',
                        'border',
                        'focus:border-2',
                        'border-t-transparent',
                        'focus:border-t-transparent',
                        'placeholder:opacity-0',
                        'focus:placeholder:opacity-100',
                        'text-sm',
                        'px-3',
                        'py-3',
                        'rounded-md',
                        'border-blue-gray-200' => !$errors->has('nome_pai'),
                        'focus:border-gray-900' => !$errors->has('nome_pai'),
                        'w-full',
                        'placeholder:opacity-100',
                        'focus:border-t-primary' => !$errors->has('nome_pai'),
                        'border-t-blue-gray-200' => !$errors->has('nome_pai'),
                        'border-red-500' => $errors->has('nome_pai'),
                        'focus:border-red-500' => $errors->has('nome_pai'),
                    ]) />
            </div>
            @error('nome_pai')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="w-full">
            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 mb-2 font-medium">
                Nome da Mãe
            </p>
            <div class="relative w-full min-w-[200px] h-11">
                <input placeholder="Maria" name="nome_mae" value="{{ old('nome_mae', $pessoa->nome_mae) }}"
                    @class([
                        'peer',
                        'w-full',
                        'h-full',
                        'bg-transparent',
                        'text-blue-gray-700',
                        'font-sans',
                        'font-normal',
                        'outline',
                        'outline-0',
                        'focus:outline-0',
                        'disabled:bg-blue-gray-50',
                        'disabled:border-0',
                        'transition-all',
                        'placeholder-shown:border',
                        'placeholder-shown:border-blue-gray-200',
                        'placeholder-shown:border-t-blue-gray-200',
                        'border',
                        'focus:border-2',
                        'border-t-transparent',
                        'focus:border-t-transparent',
                        'placeholder:opacity-0',
                        'focus:placeholder:opacity-100',
                        'text-sm',
                        'px-3',
                        'py-3',
                        'rounded-md',
                        'border-blue-gray-200',
                        'focus:border-gray-900',
                        'w-full',
                        'placeholder:opacity-100',
                        'focus:border-t-primary',
                        'border-t-blue-gray-200',
                        'peer',
                        'w-full',
                        'h-full',
                        'bg-transparent',
                        'text-blue-gray-700',
                        'font-sans',
                        'font-normal',
                        'outline',
                        'outline-0',
                        'focus:outline-0',
                        'disabled:bg-blue-gray-50',
                        'disabled:border-0',
                        'transition-all',
                        'placeholder-shown:border',
                        'placeholder-shown:border-blue-gray-200',
                        'placeholder-shown:border-t-blue-gray-200',
                        'border',
                        'focus:border-2',
                        'border-t-transparent',
                        'focus:border-t-transparent',
                        'placeholder:opacity-0',
                        'focus:placeholder:opacity-100',
                        'text-sm',
                        'px-3',
                        'py-3',
                        'rounded-md',
                        'border-blue-gray-200' => !$errors->has('nome_mae'),
                        'focus:border-gray-900' => !$errors->has('nome_mae'),
                        'w-full',
                        'placeholder:opacity-100',
                        'focus:border-t-primary' => !$errors->has('nome_mae'),
                        'border-t-blue-gray-200' => !$errors->has('nome_mae'),
                        'border-red-500' => $errors->has('nome_mae'),
                        'focus:border-red-500' => $errors->has('nome_mae'),
                    ]) />
            </div>
            @error('nome_mae')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>
