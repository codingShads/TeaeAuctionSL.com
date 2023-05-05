@extends('layout.admin-layout')

@section('body-contents')
<div class="flex">
<div class="w-full h-full p-4 m-8 overflow-y-auto">
    <div>
      <b>Hi, <i>{{ Auth::user()->name }}</i> </b> 
      
        
    </div>

    <div class="flex items-center justify-center p-5 border-4 border-dotted">
        <div class="container max-w-7xl mx-auto mt-8">
            <div class="mb-4">
              <h1 class="font-serif text-3xl font-bold underline decoration-gray-400"> Manage Auctions</h1>
              <div class="flex justify-end">
                {{-- <button onclick="location.href='{{ url('/admin/createinvoice') }}'" class="px-4 py-2 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600">Create Auction</button> --}}
                <button type="button" class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white 
                shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
                focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
                focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
                dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] 
                dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" 
                data-te-toggle="modal" data-te-target="#addInvoiceModel" data-te-ripple-init data-te-ripple-color="light">Create Auction</button>
{{-- Add Module --}}
                <div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="addInvoiceModel" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                <div
                  data-te-modal-dialog-ref
                  class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                  <form action="" id="addInvoice">
                    @csrf
                  <div
                    class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                    <div
                      class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                      <!--Modal title-->
                      <h5
                        class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                        id="exampleModalScrollableLabel">
                        Add Invoice
                      </h5>
                      <!--Close button-->
                      <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                      </button>
                    </div>

                    <!--Modal body-->
                    <div class="relative p-4">
                      <label class="font-bold text-gray-600" for="invoice">Invoice</label>
                      <input type="text" name="invoice" placeholder="Enter Invoice" class="p-2 border border-gray-300 rounded-l shadow" required>
                    </div>

                    <div class="relative p-4">
                      <label class=" font-bold text-gray-600" for="invoice">Plantation Name</label>
                      <input type="text" name="Plantation" placeholder="Enter Plantation Name" class=" p-2 border border-gray-300 rounded-l shadow" required>
                    </div>

                    <div class="relative p-4">
                      <label class=" font-bold text-gray-600" for="invoice">Grade</label>
                      <input type="text" name="grade" placeholder="Enter Grade" class="p-2 border border-gray-300 rounded-l shadow" required>
                    </div>

                    <div class="relative p-4">
                      <label class=" font-bold text-gray-600" for="invoice">Bag count</label>
                      <input type="text" name="bagcount" placeholder="Enter Bag Count" class="p-2 border border-gray-300 rounded-l shadow" required>
                    </div>

                    <div class="relative p-4">
                      <label class=" font-bold text-gray-600" for="invoice">Per Bag Quantity</label>
                      <input type="text" name="perbagquantity" placeholder="Per Bag Quantity" class=" p-2 border border-gray-300 rounded-l shadow" required>
                    </div>

                    <div class="relative p-4">
                      <label class=" font-bold text-gray-600" for="invoice">Invoice Bill</label>
                      <input type="text" name="invoicebill" placeholder="Invoice Bill" class=" p-2 border border-gray-300 rounded-l shadow" required>
                    </div>

                    <!--Modal footer-->
                    <div
                      class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                      <button
                        type="button"
                        class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                        data-te-modal-dismiss
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        Close
                      </button>
                      <button
                        type="submit"
                        class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        Add
                      </button>
                    </div>
                  </div>
                </form>

                </div>
              </div>
              </div>
            </div>
{{-- Edit Module --}}
            <div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="editInvoiceModel" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
              <div
                data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                <form action="" id="editInvoice">
                  @csrf
                <div
                  class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                  <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5
                      class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                      id="exampleModalScrollableLabel">
                      Edit Invoice
                    </h5>
                    <!--Close button-->
                    <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>

                  <!--Modal body-->
                  <div class="relative p-4">
                    <input type="hidden" name="id" id="editInvoiceId">
                    <label class=" font-bold text-gray-600" for="invoice">Invoice</label >
                    <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="invoice" id="invoiceEdit" required>
                    
                  </div>

                  <div class="relative p-4">
                    <label class=" font-bold text-gray-600" for="invoice">Plantation Name</label>
                    <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="Plantation" id="Plantation" required>
                  </div>

                  <div class="relative p-4">
                    <label class=" font-bold text-gray-600" for="invoice">Grade</label>
                    <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="grade" id="grade" required>
                  </div>

                  <div class="relative p-4">
                    <label class="font-bold text-gray-600" for="invoice">Bag count</label>
                    <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="bagcount" id="bagcount" required>
                  </div>

                  <div class="relative p-4">
                    <label class=" font-bold text-gray-600" for="invoice">Per Bag Quantity</label>
                    <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="perbagquantity" id="perbagquantity" required>
                  </div>

                  <div class="relative p-4">
                    <label class=" font-bold text-gray-600" for="invoice">Invoice Bill</label>
                    <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="invoicebill" id="invoicebill" required>
                  </div>

                  <!--Modal footer-->
                  <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <button
                      type="button"
                      class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                      data-te-modal-dismiss
                      data-te-ripple-init
                      data-te-ripple-color="light">
                      Close
                    </button>
                    <button
                      type="submit"
                      class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                      data-te-ripple-init
                      data-te-ripple-color="light">
                      Update
                    </button>
                  </div>
                </div>
              </form>

              </div>
            </div>

{{-- Delete module --}}
            <div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="deleteInvoiceModel" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
              <div
                data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                <form action="" id="deleteInvoice">
                  @csrf
                <div
                  class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                  <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5
                      class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                      id="exampleModalScrollableLabel">
                      Delete Invoice
                    </h5>
                    <!--Close button-->
                    <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>

                  <!--Modal body-->
                  <p class="p-2 border border-gray-300 rounded-l shadow font-bold text-gray-600">Are you Sure to Delete this Entry ?</p>
                  <input type="hidden" name="id" id="deleteInvoiceId">

                  <!--Modal footer-->
                  <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <button
                      type="button"
                      class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                      data-te-modal-dismiss
                      data-te-ripple-init
                      data-te-ripple-color="light">
                      Close
                    </button>
                    <button
                      type="submit"
                      class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                      data-te-ripple-init
                      data-te-ripple-color="light">
                      Delete
                    </button>
                  </div>
                </div>
              </form>

              </div>
            </div>


            <div class="flex flex-col">
              <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                  <table class="min-w-full">
                    <thead>
                      <tr>
                        <th
                          class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          ID</th>
                        <th
                          class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          Invoice No</th>
                        <th
                          class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          Plantation Name</th>
                        <th
                          class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          Grade</th>  
                        <th
                          class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          Bag Count</th>
                        <th
                          class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          Total Quantity</th>
                        <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50" colspan="3">
                          Action</th>
                      </tr>
                    </thead>
          
                    <tbody class="bg-white">
                      @if (count($invoice) > 0)
                        @foreach ( $invoice as $invoice )
                    
                      <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                          <div class="flex items-center">
                            {{ $invoice->id }}
                          </div>
          
                        </td>
          
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                          <div class="text-sm leading-5 text-gray-900">{{ $invoice->invoice_no }}
                          </div>
                        </td>
          
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                          <div class="text-sm leading-5 text-gray-900">{{ $invoice->plantation_name }}
                          </div>
                        </td>
          
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                          <div class="text-sm leading-5 text-gray-900">{{ $invoice->grade }}
                          </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                          <div class="text-sm leading-5 text-gray-900">{{ $invoice->bag_count }}
                          </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                          <div class="text-sm leading-5 text-gray-900">{{ $invoice->total_quantity }}
                          </div>
                        </td>
          
                        <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                          <a href="#" class="text-indigo-600 hover:text-indigo-900 editlink" data-id="{{ $invoice->id }}" data-te-toggle="modal" data-te-target="#editInvoiceModel">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                          </a>
                        </td>
          
                        <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                          <a href="#" class="text-gray-600 hover:text-gray-900" >
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                          </a>
          
                        </td>
          
                        
                        <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800 deletelink" data-id="{{ $invoice->id }}" data-te-toggle="modal" data-te-target="#deleteInvoiceModel"
                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg></a>
                        </td>
                      </tr>
                      @endforeach

                      @else
                      <tr>
                        <td>Invoices not found</td>
                      </tr>
                        
                      @endif

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
</div>

<script>
  $(document).ready(function(){
    $("#addInvoice").submit(function(e){
      e.preventDefault();

      var formcontent = $(this).serialize();

      $.ajax({
        url:"{{ route('addinvoice') }}",
        type:"post",
        data:formcontent,
        success:function(data){
          if(data.success == true){
            location.reload();
          }else{
            alert(data.msg);
          }
        }
      });
    });

    $(".editlink").click(function(){
      var invoice_id = $(this).attr('data-id');
      $("#editInvoiceId").val(invoice_id);
      var url = '{{ route("showInvoice", "id") }}';
      url = url.replace('id',invoice_id);

      $.ajax({
        url:url,
        type:'GET',
        success:function(data){
          if (data.success == true) {
            var invoice = data.data;
            $("#invoiceEdit").val(invoice[0].invoice_no);
            $("#Plantation").val(invoice[0].plantation_name);
            $("#grade").val(invoice[0].grade);
            $("#bagcount").val(invoice[0].bag_count);
            $("#perbagquantity").val(invoice[0].per_bag_quantity);
            $("#invoicebill").val(invoice[0].invoice_bill);} 
            
            else {
            alert(data.msg);
          }
        }
      });
    });


    $("#editInvoice").submit(function(e){
      e.preventDefault();

      var formcontent = $(this).serialize();

      $.ajax({
        url:"{{ route('editinvoice') }}",
        type:"post",
        data:formcontent,
        success:function(data){
          if(data.success == true){
            location.reload();
          }else{
            alert(data.msg);
          }
        }
      });
    });

    $(".deletelink").click(function(){
      var invoice_id = $(this).attr('data-id');
      $("#deleteInvoiceId").val(invoice_id);
    });

    $("#deleteInvoice").submit(function(e){
      e.preventDefault();

      var formcontent = $(this).serialize();

      $.ajax({
        url:"{{ route('deleteinvoice') }}",
        type:"post",
        data:formcontent,
        success:function(data){
          if(data.success == true){
            location.reload();
          }else{
            alert(data.msg);
          }
        }
      });
    });

  });
</script>

@endsection