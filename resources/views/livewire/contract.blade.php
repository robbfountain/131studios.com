<div class="mx-auto p-4 w-2/3 mx-8">
    <section class="border rounded-md border-gray-300 p-6 shadow-lg text-lg leading-normal text-gray-600">
        @include('contracts.contract-stub')

        @if(!$contract->is_approved)
            <div class="w-2/3">
                <canvas id="signature-pad" width="600" class="signature-pad">
                </canvas>

                <div class="text-gray-500 text-sm text-center border-t border-gray-500">
                    Sign Above
                </div>
            </div>

            <div class="flex items-center mt-8">
                <button id="clear"
                        class="mr-4 inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Clear Signature
                </button>
                <button id="save"
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Approve & Sign
                </button>
                @if(session()->has('error'))
                    <div class="ml-4 text-red-500">
                        {{session('error')}}
                    </div>
                @endif
            </div>
        @else
            <div>
                <img src="{{$contract->signature_image}}" alt="">
                <div class="mt-6 flex items-center">
                    <a href="{{route('contract.pdf',$contract->id)}}" id="save"
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                       Download PDF
                    </a>
                    @if(session()->has('message'))
                        <div class="ml-4 text-green-500">
                            <i class="far fa-check mr-2"></i>
                            {{session('message')}}
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </section>
    <div id="signature_pad"></div>

    @push('scripts')
        <script>
            var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
                backgroundColor: 'rgb(255,255,255)',
                penColor: 'rgb(0, 0, 0)',
                onBegin: () => @this.clearError()
            });

            var saveButton = document.getElementById('save');
            var cancelButton = document.getElementById('clear');

            saveButton.addEventListener('click', function (event) {
                if (signaturePad.isEmpty()) {
                    @this.throwError();
                } else {
                    var data = signaturePad.toDataURL('image/jpeg');

                @this.signature
                    = data;

                @this.sign();
                }
            });

            cancelButton.addEventListener('click', function (event) {
                signaturePad.clear();
            });
        </script>
    @endpush
</div>
