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
                  <h1 class="font-serif text-3xl font-bold underline decoration-gray-400"> Manage Valuations</h1>
                  <div class="flex justify-end">
                    <button class="px-4 py-2 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600">Create Valuation</button>
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
                              Grade</th>
                            <th
                              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                              Selling Mark</th>
                            <th
                              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                              Characteristics</th>
                            <th
                              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                              Weight</th>
                            <th
                              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                              Valuation</th>
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
                                <div class="text-sm leading-5 text-gray-900">{{ $invoice->grade }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $invoice->plantation_name }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">...
                                </div>
                            </td>
              
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                              <p>...</p>
                            </td>
              
                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                              ...
                            </td>
                            
                            <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                              <a href="#" class="text-indigo-600 hover:text-indigo-900 editValuation" data-id="{{ $invoice->id }}" data-te-toggle="modal" data-te-target="#editValuationModel">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                  stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                              </a>
              
                            <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                              <a href="#" class="text-gray-600 hover:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                  stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                              </a>
              
                            </td>
              
                            </td>
                            {{-- <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg></a>
              
                            </td> --}}
                          </tr>
                          @endforeach

                          @else
                          <tr>
                            <td>Nothing found for Valuations</td>
                          </tr>

                          @endif

                        </tbody>
                      </table>
                    </div>


                    {{-- Edit Invoice/Valuation Module --}}
                    <div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="editValuationModel" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                        <div
                          data-te-modal-dialog-ref
                          class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                          <form action="" id="editValuation">
                            @csrf
                          <div
                            class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                            <div
                              class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                              <!--Modal title-->
                              <h5
                                class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                id="exampleModalScrollableLabel">
                                Add to Valuation
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
                              <label class="font-bold text-gray-600" for="invoice">Invoice</label>
                              <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="invoice" id="invoiceEdit" required>
                              
                            </div>
          
                            <div class="relative p-4">
                              <label class="font-bold text-gray-600" for="invoice">Selling Mark</label>
                              <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="Plantation" id="Plantation" required>
                            </div>
          
                            <div class="relative p-4">
                              <label class="font-bold text-gray-600" for="invoice">Grade</label>
                              <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="grade" id="grade" required>
                            </div>
          
                            <div class="relative p-4">
                              <label class="font-bold text-gray-600" for="invoice">Characteristics</label>
                              <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="Characteristics" id="Characteristics" required>
                            </div>
          
                            <div class="relative p-4">
                              <label class="font-bold text-gray-600" for="invoice">Weight</label>
                              <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="Weight" id="Weight" required>
                            </div>
          
                            <div class="relative p-4">
                              <label class="font-bold text-gray-600" for="invoice">Valuation</label>
                              <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="Valuation" id="Valuation" required>
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
                                Add to Catalogue
                              </button>
                            </div>
                          </div>
                        </form>
          
                        </div>
                      </div>
                  </div>
                </div>
              </div>
        </div>

        <br><br><br>

        <div class="flex items-center justify-center p-5 border-4 border-dotted">
            <div class="container max-w-7xl mx-auto mt-8">
                <div class="mb-4">
                  <h1 class="font-serif text-3xl font-bold underline decoration-gray-400"> Valuations Dashboard</h1>
                  {{-- <div class="flex justify-end">
                    <button class="px-4 py-2 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600">Create Valuation</button>
                  </div> --}}
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
                              Grade</th>
                            <th
                              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                              Selling Mark</th>
                            <th
                              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                              Characteristics</th>
                            <th
                              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                              Weight</th>
                            <th
                              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                              Valuation</th>
                            <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50" colspan="3">
                              Action</th>
                          </tr>
                        </thead>
              
                        <tbody class="bg-white">
                            @if (count($valuation) > 0)
                                @foreach ($valuation as $valuation)
                          <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                              <div class="flex items-center">
                                {{ $valuation->id }}
                              </div>
              
                            </td>
              
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                              <div class="text-sm leading-5 text-gray-900">{{ $valuation->invoice_no }}
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $valuation->grade }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $valuation->sellingmark }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $valuation->charactesristics }}
                                </div>
                            </td>
              
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                              <p>{{ $valuation->weight }}</p>
                            </td>
              
                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                              <span>{{ $valuation->valuation }}</span>
                            </td>
              
                            <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                              <a href="#" class="text-indigo-600 hover:text-indigo-900 EditValuationdata" data-id="{{ $valuation->id }}" data-te-toggle="modal" data-te-target="#editValuationModel2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                  stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                              </a>
              
                            <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                              <a href="#" class="text-gray-600 hover:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                  stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                              </a>
              
                            </td>
              
                            </td>
                            <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800 deleteValuationmodule" data-id="{{ $valuation->id }}" data-te-toggle="modal" data-te-target="#deleteValuationModel"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg></a>
              
                            </td>
                          </tr>
                          @endforeach

                          @else
                          <tr>
                            <td>Nothing found for Valuations</td>
                          </tr>

                          @endif

                        </tbody>
                      </table>
                    </div>
                </div>


                {{-- Edit valuation model --}}
                <div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="editValuationModel2" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                  <div
                    data-te-modal-dialog-ref
                    class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                    <form action="" id="editValuationforauction">
                      @csrf
                    <div
                      class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                      <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <!--Modal title-->
                        <h5
                          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                          id="exampleModalScrollableLabel">
                          Edit Valuation
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
                        <input type="hidden" name="hiddenID" id="editvaluationId2">
                        <label class="font-bold text-gray-600" for="invoice">Invoice</label>
                        <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="dataI" id="dataI" required>
                        
                      </div>
    
                      <div class="relative p-4">
                        <label class="font-bold text-gray-600" for="invoice">Selling Mark</label>
                        <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="dataSM" id="dataSM" required>
                      </div>
    
                      <div class="relative p-4">
                        <label class="font-bold text-gray-600" for="invoice">Grade</label>
                        <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="dataG" id="dataG" required>
                      </div>
    
                      <div class="relative p-4">
                        <label class="font-bold text-gray-600" for="invoice">Characteristics</label>
                        <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="dataC" id="dataC" required>
                      </div>
    
                      <div class="relative p-4">
                        <label class="font-bold text-gray-600" for="invoice">Weight</label>
                        <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="dataW" id="dataW" required>
                      </div>
    
                      <div class="relative p-4">
                        <label class="font-bold text-gray-600" for="invoice">Valuation</label>
                        <input class="p-2 border border-gray-300 rounded-l shadow" type="text" name="dataV" id="dataV" required>
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


                  {{-- Delete Module --}}
                    <div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="deleteValuationModel" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                      <div
                        data-te-modal-dialog-ref
                        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                        <form action="" id="deleteValuation">
                          @csrf
                        <div
                          class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                          <div
                            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                            <!--Modal title-->
                            <h5
                              class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                              id="exampleModalScrollableLabel">
                              Delete Valuation
                            </h5>
                            <!--Close button-->
                            <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                              </svg>
                            </button>
                          </div>
        
                          <!--Modal body-->
                          <p class="font-bold text-gray-600 p-2 border border-gray-300 rounded-l shadow">Are you Sure to Delete this Entry ?</p>
                          <input type="hidden" name="id" id="deleteValuationId">
        
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



                    
                </div>
              </div>
        </div>




</div>

<script>
    $(document).ready(function(){
    $(".editValuation").click(function(){
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
            $("#grade").val(invoice[0].grade);} 
            
            else {
            alert(data.msg);
          }
        }
      });
    });


    $("#editValuation").submit(function(e){
      e.preventDefault();

      var formcontent = $(this).serialize();

      $.ajax({
        url:"{{ route('addValuation') }}",
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


    

    $(".EditValuationdata").click(function(){
      var id = $(this).attr('data-id');
      $("#editvaluationId2").val(id);
      var url = '{{ route("showvaluation2", "id") }}';
      url = url.replace('id',id);

      $.ajax({
        url:url,
        type:'GET',
        success:function(data){
          console.log(data)
          if (data.success == true) {
            var items = data.data;
            $("#dataI").val(items[0].invoice_no);
            $("#dataSM").val(items[0].sellingmark);
            $("#dataG").val(items[0].grade);
            $("#dataC").val(items[0].charactesristics);
            $("#dataW").val(items[0].weight);
            $("#dataV").val(items[0].valuation);
          }
            else {
            alert(data.msg);
          }
        }
      });
    });


    $("#editValuationforauction").submit(function(e){
      e.preventDefault();

      var formcontent = $(this).serialize();

      $.ajax({
        url:"{{ route('editvaluationmodule') }}",
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


    $(".deleteValuationmodule").click(function(){
      var valuation_id = $(this).attr('data-id');
      $("#deleteValuationId").val(valuation_id);
    });

    $("#deleteValuation").submit(function(e){
      e.preventDefault();

      var formcontent = $(this).serialize();

      $.ajax({
        url:"{{ route('deletevaluation') }}",
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