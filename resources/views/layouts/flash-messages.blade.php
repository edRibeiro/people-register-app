<!-- Diálogo para exibir flash messages -->
<div id="flashMessageDialog" data-dialog-backdrop="animated-dialog"
    class="hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-8 max-w-lg mx-auto rounded-md shadow-md">
        <div
            class="flex items-center p-4 font-sans text-2xl antialiased font-semibold leading-snug shrink-0 text-blue-gray-900">
            Mensagem
        </div>
        <div id="flashMessageContent"
            class="relative p-4 font-sans text-base antialiased font-light leading-relaxed border-t border-b border-t-blue-gray-100 border-b-blue-gray-100 text-blue-gray-500">
            <!-- Mensagem será inserida aqui -->
        </div>
        <div class="flex flex-wrap items-center justify-end p-4 shrink-0 text-blue-gray-500">
            <button onclick="closeFlashMessageDialog()"
                class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-bold py-2 px-4 rounded mr-2">Fechar</button>
        </div>
    </div>
</div>
@pushOnce('scripts')

    <script>
        function openFlashMessageDialogWithMessage(message) {
            document.getElementById('flashMessageContent').innerHTML = message;
            document.getElementById('flashMessageDialog').classList.remove('hidden');
        }

        function closeFlashMessageDialog() {
            document.getElementById('flashMessageDialog').classList.add('hidden');
        }
    </script>

    @if (session()->has('success'))
        <script>
            openFlashMessageDialogWithMessage('{{ session('success') }}');
        </script>
    @endif

    @if (session()->has('error'))
        <script>
            openFlashMessageDialogWithMessage('{{ session('error') }}');
        </script>
    @endif

    @if ($errors->any())
        <script>
            openFlashMessageDialogWithMessage('Por favor, verifique o formulário abaixo para erros.');
        </script>
    @endif


@endPushOnce
