<div class="flex justify-center h-screen lg:items-center  max-w-screen-xl antialiased w-11/12 absolute top-0 mt-0.5 " style="z-index:99" id="quote_assistance" wire:defer>
    <div class="flex flex-col md:w-9/12 w-11/12 mx-1 rounded-lg md:border border-gray-300 md:shadow-xl ">
        <div class="flex flex-row justify-between p-6  bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
            <p class="font-semibold text-gray-800"> Resumen de Venta</p>
            <svg class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24"xmlns="http://www.w3.org/2000/svg" wire:click="closeModals">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path>
            </svg>
        </div>

        <div class="px-0.5 py-0 bg-gray-50 overflow-y-auto px-auto  overflow-x-hidden  flex flex-col">
            <div  class=" min-w-full  overflow-hidden  px-1 lg:px-4 rounded-bl-lg rounded-br-lg">
                <div class=" py-0 px-3 lg:grid-cols-3 gap-1">
                    <div class="px-1 lg:px-7 overflow-x-auto md:overflow-x-hidden overflow-y-auto  " style="max-height: 50vh;">
                        <div class="-my-2 py-0  overflow-x-auto lg:overflow-x-hidden sm:-mx-6 sm:px-6  md:pr-10 lg:px-0 " style="z-index: 9">
                            <div  class="align-middle inline-block min-w-full  overflow-hidden px-0  lg:px-4 py-1 rounded-bl-lg rounded-br-lg">
                                <div class="w-full  max-w-full">
                                    <div class="bg-white shadow-md rounded my-1 md:my-6  overflow-x-auto lg:overflow-x-hidden  overflow-y-hidden "  >
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg" >
            <button  id="close_sales_modal" type="button"  class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" wire:click="closeModals">
                Cerrar
            </button>
            
        </div>
    </div>
</div>
<script>
    $(document).keyup(function(e) {
        if (e.key === "Escape") { // escape key maps to keycode `27`
            $("#close_modals").click();
        }
    });
</script>
