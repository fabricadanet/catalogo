 @extends('catalogo.layout.app')
 @section('content')
     <!-- Section-->
     <section class="py-5">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <h1 class="text-center">
                         <span class="text-dark">
                             Contato
                         </span>
                     </h1>
                     <div>
                         <div class="row">
                             <form class="form-horizontal" action="#">
                                 @csrf
                                 <input name="Nome" type="text" class="form-control m-2" id="Nome" placeholder="Nome">
                                 <input name="Email" type="email" class="form-control m-2" id="Email" placeholder="Email">
                                 <input name="Telefone" type="text" class="form-control m-2" id="Telefone"
                                     placeholder="Telefone">
                                 <textarea name="Mensagem" class="form-control m-2" id="Mensagem" rows="3"
                                     placeholder="Mensagem"></textarea>

                                 <div class="row m-auto"> <button type="submit" class="col-6 mx-auto btn btn-primary">
                                         Enviar</button>
                                 </div>
                             </form>
                         </div>
                         <div class="row m-auto">
                             <button type="button" class=" col-6 mx-auto btn btn-success mt-2">Me chame no whats!</button>
                         </div>

                     </div>

                 </div>
             </div>
         </div>
     </section>
 @endsection
