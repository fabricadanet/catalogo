<?php

namespace App\Http\Controllers;
use App\Models\Venda;
use App\Models\Produto;
use App\Models\VendaProduto;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart()

    {
        $carrinho = session()->get('carrinho');
        $subTotal = 0;
        $total = 0;
        $frete = 0;

        return view('catalogo.cart', compact('carrinho', 'total','subTotal','frete'));
    }
    public function addToCart(Request $request)
    {
        $produto = Produto::find($request->id);
        $carrinho = session()->get('carrinho');

        if(!$carrinho) {
            $carrinho = [
                $request->id => [
                    "id" => $request->id,
                    "nome" => $produto->nome,
                    "quantidade" => 1,
                    "preco" => $produto->preco,
                    "image" => $produto->image
                ]
            ];
            session()->put('carrinho', $carrinho);
            return redirect()->back()->with('success', 'Produto adicionado ao carrinho com sucesso!');
        }
        if(isset($carrinho[$request->id])) {
            return redirect()->back()->with('error', 'Produto já existe no carrinho!');
        }
        $carrinho[$request->id] = [
            "id" => $request->id,
            "nome" => $produto->nome,
            "quantidade" => $request->quantidade,
            "preco" => $produto->preco,
            "image" => $produto->image
        ];
        session()->put('carrinho', $carrinho);
        return redirect()->back()->with('success', 'Produto adicionado ao carrinho com sucesso!');

    }
    public function update(Request $request)

    {
        if($request->id && $request->quantidade){
            $carrinho = session()->get('carrinho');
            $carrinho[$request->id]["quantidade"] = $request->quantidade;
            session()->put('carrinho', $carrinho);

        }
        return redirect()->back()->with('success', 'Carrinho Atualizado com sucesso');
    }
    public function remove(Request $request, $id)
    {
        $carrinho = session()->get('carrinho');
        if(isset($carrinho[$id])){
            unset($carrinho[$id]);
            session()->put('carrinho', $carrinho);
            }
            return redirect()->back()->with('success', 'Carrinho Atualizado com sucesso');
    }
    public function finalizarCompra(Request $request)
    {

        $carrinho = session()->get('carrinho');
        $total = 0;
        $subTotal = 0;
        $frete = 0;
        foreach($carrinho as $key => $value){
            $subTotal += $value['preco'] * $value['quantidade'];
            $total += $value['preco'] * $value['quantidade'];
        }
        $venda = Venda::create([
           'total' => $total,
            'frete' =>  $frete,
            'status' => 'Aguardando Pagamento',
        ]);
        foreach($carrinho as $key => $value){
            VendaProduto::create([
                'venda_id' => $venda->id,
                'produto_id' => $value['id'],
                'quantidade' => $value['quantidade'],
                'subtotal' => $value['preco'] * $value['quantidade'],
            ]);
        }
        session()->forget('carrinho');
        header("Location: https://www.google.com.br");
        return redirect()->route('catalogo.index')->with('success', 'Compra realizada com sucesso!');
    }
}
