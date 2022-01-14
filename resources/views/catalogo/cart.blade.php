 @extends('catalogo.layout.app')
 @section('content')
     <div class="row g-5 d-flex justify-content-center align-items-center m-auto">
         <div class="col-md-10 col-lg-8 order-md-last">
             <h4 class="d-flex justify-content-between align-items-center mb-3">
                 <span class="text-primary">Seu carrinho</span>
                 <span class="badge bg-primary rounded-pill">3</span>
             </h4>


             <div class="row">
                 <div class="container mb-4">
                     <div class="col-12">
                         <div class="table-responsive">
                             <table class="table table-striped">
                                 <thead>
                                     <tr>
                                         <th scope="col"> </th>
                                         <th scope="col">Produto</th>
                                         <th scope="col" class="text-center">Quant.</th>
                                         <th scope="col"></th>
                                         <th scope="col" class="text-right">Preço</th>
                                         <th scope="col"> </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                         <td>Product Name Dada</td>

                                         <td><input class="form-control" type="number" min="0" value="1"
                                                 oninput="validity.valid||(value='');" /></td>
                                         <td></td>
                                         <td class="text-right"> 124,90</td>
                                         <td class="text-right"><button class="btn btn-sm btn-danger"><i
                                                     class="bi bi-trash"></i> </button> </td>
                                     </tr>
                                     <tr>
                                         <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                         <td>Product Name Toto</td>

                                         <td><input class="form-control" type="number" min="0" value="1"
                                                 oninput="validity.valid||(value='');" /></td>
                                         <td></td>
                                         <td class="text-right">33,90 </td>
                                         <td class="text-right"><button class="btn btn-sm btn-danger"><i
                                                     class="bi bi-trash"></i> </button> </td>
                                     </tr>
                                     <tr>
                                         <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                         <td>Product Name Titi</td>

                                         <td><input class="form-control" type="number" min="0" value="1"
                                                 oninput="validity.valid||(value='');" /></td>
                                         <td></td>
                                         <td class="text-right">70,00 </td>
                                         <td class="text-right"><button class="btn btn-sm btn-danger"><i
                                                     class="bi bi-trash"></i> </button> </td>
                                     </tr>
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td>Sub-Total</td>
                                         <td class="text-right">R$ 255,90</td>
                                     </tr>
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td>Frete</td>
                                         <td class="text-right">R$ 6,90</td>
                                     </tr>
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td><strong>Total</strong></td>
                                         <td class="text-right"><strong>R$ 346,90</strong></td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <div class=" mb-2">
                         <div class="row">
                             <div class="d-flex justify-content-center justify-content-md-end align-items-center my-3">
                                 <button class="btn btn-lg btn-block btn-success text-uppercase" data-bs-toggle="modal"
                                     data-bs-target="#exampleModal">Finalizar</button>
                             </div>
                             <div class="d-flex justify-content-center  align-items-center my-3">
                                 <a href="{{ route('catalogo.index') }}"
                                     class="btn btn-block btn-outline-success">Continuar comprando</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
     @include('catalogo.checkout-modal')
 @endsection
