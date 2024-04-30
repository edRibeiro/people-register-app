<div id="confirmationDialog"
    class="hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-8 max-w-lg mx-auto rounded-md shadow-md">
        <div
            class="flex items-center p-4 font-sans text-2xl antialiased font-semibold leading-snug shrink-0 text-blue-gray-900">
            Confirmação de Exclusão
        </div>
        <div
            class="relative p-4 font-sans text-base antialiased font-light leading-relaxed border-t border-b border-t-blue-gray-100 border-b-blue-gray-100 text-blue-gray-500">
            Você está prestes a excluir permanentemente os dados de <span id="deletePersonName"></span>. Esta ação
            não pode ser desfeita. Por
            favor, confirme sua escolha clicando em "Confirmar" abaixo ou clique em "Cancelar" para voltar sem
            excluir.
        </div>
        <div class="flex flex-wrap items-center justify-end p-4 shrink-0 text-blue-gray-500">
            <button onclick="cancelDelete()"
                class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-bold py-2 px-4 rounded mr-2">Cancelar</button>
            <button data-ripple-light="true" data-dialog-close="true" data-dialog-target="dialog"
                onclick="confirmDelete()"
                class="middle none center rounded-lg bg-gradient-to-tr from-green-600 to-green-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                Confirmar
            </button>
        </div>
    </div>
</div>

<div>
    <form id="deleteForm" method="POST">
        @csrf
        @method('DELETE')
    </form>
</div>
@pushOnce('scripts')
    <script>
        function openConfirmationDialog(id, nome) {
            document.getElementById('deletePersonName').textContent = nome;
            document.getElementById('confirmationDialog').classList.remove('hidden');
            // Defina a ação do formulário de exclusão com base no ID da pessoa
            document.getElementById('deleteForm').action = `/pessoas/` + id;
        }

        // Função para fechar o diálogo de confirmação
        function cancelDelete() {
            document.getElementById('confirmationDialog').classList.add('hidden');
        }

        // Função para confirmar a exclusão
        function confirmDelete() {
            // Envie o formulário de exclusão
            document.getElementById('deleteForm').submit();
        }
    </script>
@endPushOnce
