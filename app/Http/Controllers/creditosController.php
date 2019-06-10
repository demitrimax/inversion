<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecreditosRequest;
use App\Http\Requests\UpdatecreditosRequest;
use App\Repositories\creditosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Alert;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\efinanciera;
use App\Models\movcreditos;
use Auth;
use App\Models\cproyectos;
use App\Models\empresas;

class creditosController extends AppBaseController
{
    /** @var  creditosRepository */
    private $creditosRepository;

    public function __construct(creditosRepository $creditosRepo)
    {
        $this->creditosRepository = $creditosRepo;
        $this->middleware('permission:creditos-list');
        $this->middleware('permission:creditos-create', ['only' => ['create','store']]);
        $this->middleware('permission:creditos-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:creditos-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the creditos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->creditosRepository->pushCriteria(new RequestCriteria($request));
        $creditos = $this->creditosRepository->all();

        return view('creditos.index')
            ->with('creditos', $creditos);
    }

    /**
     * Show the form for creating a new creditos.
     *
     * @return Response
     */
    public function create()
    {
        $financieras = efinanciera::pluck('nombre','id');
        return view('creditos.create')->with(compact('financieras'));
    }

    /**
     * Store a newly created creditos in storage.
     *
     * @param CreatecreditosRequest $request
     *
     * @return Response
     */
    public function store(CreatecreditosRequest $request)
    {
        $input = $request->all();

        $creditos = $this->creditosRepository->create($input);

        Flash::success('Creditos guardado correctamente.');
        Alert::success('Creditos guardado correctamente.');

        return redirect(route('creditos.index'));
    }

    /**
     * Display the specified creditos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $creditos = $this->creditosRepository->findWithoutFail($id);

        if (empty($creditos)) {
            Flash::error('Creditos no encontrado');
            Alert::error('Creditos no encontrado.');

            return redirect(route('creditos.index'));
        }
        $empresas = empresas::pluck('nombre','id');
        return view('creditos.show')->with(compact('creditos','empresas'));
    }

    /**
     * Show the form for editing the specified creditos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $creditos = $this->creditosRepository->findWithoutFail($id);

        if (empty($creditos)) {
            Flash::error('Creditos no encontrado');
            Alert::error('Creditos no encontrado');

            return redirect(route('creditos.index'));
        }
        $financieras = efinanciera::pluck('nombre','id');
        return view('creditos.edit')->with(compact('creditos','financieras'));
    }

    /**
     * Update the specified creditos in storage.
     *
     * @param  int              $id
     * @param UpdatecreditosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecreditosRequest $request)
    {
        $creditos = $this->creditosRepository->findWithoutFail($id);

        if (empty($creditos)) {
            Flash::error('Creditos no encontrado');
            Alert::error('Creditos no encontrado');

            return redirect(route('creditos.index'));
        }

        $creditos = $this->creditosRepository->update($request->all(), $id);

        Flash::success('Creditos actualizado correctamente.');
        Alert::success('Creditos actualizado correctamente.');

        return redirect(route('creditos.index'));
    }

    /**
     * Remove the specified creditos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $creditos = $this->creditosRepository->findWithoutFail($id);

        if (empty($creditos)) {
            Flash::error('Creditos no encontrado');
            Alert::error('Creditos no encontrado');

            return redirect(route('creditos.index'));
        }

        $this->creditosRepository->delete($id);

        Flash::success('Creditos borrado correctamente.');
        Flash::success('Creditos borrado correctamente.');

        return redirect(route('creditos.index'));
    }

    public function regmov(Request $request)
    {
      $input = $request->all();

      $movimiento = new movcreditos;
      $movimiento->credito_id = $input['credito_id'];
      $movimiento->empresa_id = $input['empresa'];
      $movimiento->tipo = $input['tipo'];
      $movimiento->monto = $input['monto'];
      $movimiento->fecha = $input['fecha'];
      $movimiento->comentario = $input['comentario'];
      $movimiento->user_id = Auth::user()->id;
      $movimiento->save();
      Alert::success('Movimiento registrado correctamente');
      return back();
    }
}
