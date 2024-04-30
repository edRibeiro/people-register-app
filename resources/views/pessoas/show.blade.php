<x-guest-layout>
    <div class="relative mx-4 mt- overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
        <div class="flex items-center justify-between gap-8 mb-8">
            <div>
                <button onclick="window.location.href = '{{ route('pessoas.index') }}';"
                    class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        stroke-width="2" class="w-4 h-4">
                        <path
                            d="M7.086 12l5.793-5.793A.996.996 0 0011.586 4L4.793 10.793a1 1 0 000 1.414L11.586 20a.996.996 0 001.414 0 .998.998 0 000-1.414L7.086 12z">
                        </path>
                    </svg>
                    Voltar
                </button>

            </div>
            <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
                <button onclick="openConfirmationDialog('{{ $pessoa->id }}', '{{ $pessoa->nome }}')"
                    class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        stroke-width="2" class="w-4 h-4" width="20" height="20">
                        <path
                            d="M19 5h-4l-1-1h-4l-1 1H5c-0.55 0-1 0.45-1 1s0.45 1 1 1h1v13c0 1.1 0.9 2 2 2h8c1.1 0 2-0.9 2-2V7h1c0.55 0 1-0.45 1-1s-0.45-1-1-1zM9 19c0 0.55-0.45 1-1 1s-1-0.45-1-1V8h2v11zM12 19c0 0.55-0.45 1-1 1s-1-0.45-1-1V8h2v11zM15 19c0 0.55-0.45 1-1 1s-1-0.45-1-1V8h2v11z">
                        </path>
                    </svg>
                    Excluir
                </button>

                <button onclick="window.location.href = '{{ route('pessoas.edit', ['pessoa' => $pessoa->id]) }}';"
                    class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        stroke-width="2" class="w-4 h-4">
                        <path
                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                        </path>
                    </svg>
                    Editar
                </button>
            </div>
        </div>
    </div>
    <div class="relative mx-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
        <h5 class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
            Detalhes
        </h5>
    </div>
    <div class="bg-white overflow-hidden shadow rounded-lg border">

        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        <b>Nome</b>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $pessoa->nome }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        <b>CPF</b>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $pessoa->cpf }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        <b>Data de Nascimento</b>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ Carbon\Carbon::parse($pessoa->data_nascimento)->format('d/m/Y') }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        <b>Estado civil</b>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $pessoa->estado_civil }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        <b>Sexo</b>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $pessoa->sexo }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        <b>Nome da Mãe</b>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $pessoa->nome_mae ?? '-' }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        <b>Nome do Pai</b>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $pessoa->nome_pai ?? '-' }}
                    </dd>
                </div>
            </dl>
        </div>
    </div>
    <x-delete-person-dialog />
</x-guest-layout>
