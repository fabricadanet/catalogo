 @extends('catalogo.layout.app')
 @section('content')
     <div class="row g-5 d-flex justify-content-center align-items-center m-auto">
         <div class="col-md-10 col-lg-8 order-md-last">
             <h4 class="d-flex justify-content-between align-items-center mb-3">
                 <span class="text-primary">Seu carrinho</span>
                 <span class="badge bg-primary rounded-pill">{{count($carrinho)}}</span>

             </h4>
             <div>
                 @if(session()->has('success'))
                     <div class="alert alert-success">
                         {{ session()->get('success') }}
                     </div>
                 @elseif(session()->has('error'))
                     <div class="alert alert-danger">
                         {{session()->get('error')}}
                     </div>
                 @endif
             </div>

             <div class="row">
                 <div class="container mb-4">
                     <div class="col-12">
                         @if( $carrinho != null)
                             <div class="table-responsive">
                                 <table class="table table-striped">
                                     <thead>
                                     <tr>
                                         <th scope="col"> </th>
                                         <th scope="col">Produto</th>
                                         <th scope="col" class="text-center">Quant.</th>
                                         <th scope="col"></th>
                                         <th scope="col" class="text-right">Preço</th>
                                         <th scope="col">Sub-total </th>
                                     </tr>
                                     </thead>
                                     <tbody>

                                     @foreach($carrinho as $produto)
                                         <tr>
                                             <td><img style="max-height: 50px" src="{{asset('imagem/produtos/'.$produto['image'])}}" /> </td>
                                             <td>{{$produto["nome"]}}</td>
                                             <form method="POST" action="{{route('carrinho.update')}}">
                                                 @csrf
                                                 <input type="hidden" name="id" value="{{$produto['id']}}">
                                                 <td><input id= "quantidade" class="form-control" type="number" name="quantidade" min="1" value="{{$produto["quantidade"]?:1}}" name="quantidade"></td>

                                                 <td class="text-right"><button type="submit" class="btn btn-sm btn-ghost-primary"><i
                                                             class="bi bi-arrow-clockwise"></i> </button>
                                                 </td>
                                                 <td class="text-right" id="preco">@money($produto["preco"], 'BRL')</td>
                                             </form>
                                             <td class="tex-right" id="subTotal" name="subTotal">@money($produto["quantidade"]*$produto["preco"],'BRL')</td>

                                             <td class="text-right"><a href="{{route('carrinho.remove',['id'=>$produto["id"]])}}" class="btn btn-sm btn-danger"><i
                                                         class="bi bi-trash"></i> </a>
                                             </td>

                                             <input type="hidden" name="subTotal" value="{{$subTotal+= $produto["quantidade"]*$produto["preco"]}}">
                                         </tr>
                                     @endforeach
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td>Sub-Total</td>
                                         <td class="text-right">@money($subTotal,'BRL')</td>
                                     </tr>
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td>Frete</td>
                                         <td class="text-right">@money($frete,'BRL')</td>
                                         <td></td>
                                     </tr>
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td><strong>Total</strong></td>
                                         <td class="text-right"><strong>@money($total=$subTotal+$frete,'BRL')</strong></td>
                                         <td></td>
                                     </tr>
                                     </tbody>
                                 </table>
                             </div>

                         @else
                             <div class="col-md-12">
                                 <div class="alert alert-warning">
                                     <h4>Não há produtos no carrinho</h4>
                                 </div>
                             </div>
                         @endif

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
