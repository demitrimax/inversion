<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateempresasRequest;
use App\Http\Requests\UpdateempresasRequest;
use App\Repositories\empresasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Alert;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\operaciones;
use App\Models\bancos;
use App\Models\creditos;
use App\Models\metpago;
use App\Models\bcuentas;
use App\Models\proveedores;

class empresasController extends AppBaseController
{
    /** @var  empresasRepository */
    private $empresasRepository;

    public function __construct(empresasRepository $empresasRepo)
    {
        $this->empresasRepository = $empresasRepo;
        $this->middleware('permission:empresas-list');
        $this->middleware('permission:empresas-create', ['only' => ['create','store']]);
        $this->middleware('permission:empresas-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:empresas-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the empresas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->empresasRepository->pushCriteria(new RequestCriteria($request));
        $empresas = $this->empresasRepository->all();

        return view('empresas.index')
            ->with('empresas', $empresas);
    }

    /**
     * Show the form for creating a new empresas.
     *
     * @return Response
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created empresas in storage.
     *
     * @param CreateempresasRequest $request
     *
     * @return Response
     */
    public function store(CreateempresasRequest $request)
    {
        $input = $request->all();

        $empresas = $this->empresasRepository->create($input);

        Flash::success('Empresas guardado correctamente.');
        Alert::success('Empresas guardado correctamente.');

        return redirect(route('empresas.index'));
    }

    /**
     * Display the specified empresas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empresas = $this->empresasRepository->findWithoutFail($id);

        if (empty($empresas)) {
            Flash::error('Empresas no encontrado');
            Alert::error('Empresas no encontrado.');

            return redirect(route('empresas.index'));
        }
        $empresaid = $empresas->id;
        $cuentas = bcuentas::with('empresa')->whereHas('empresa', function($q) use ($empresaid) {
          $q->where('id',$empresaid);
        })->get();
        //dd($cuentas);
        $cuental = $cuentas->pluck('nomcuentasaldo', 'id');
        //dd($cuentas);
        $bancos = bancos::pluck('nombrecorto','id');
        $creditos = creditos::pluck('nombre', 'id');
        $metpago = metpago::pluck('nombre','id');
        $proveedores = proveedores::pluck('nombre','id');
        return view('empresas.show')->with(compact('empresas','bancos','creditos','metpago','cuental', 'proveedores'));
    }

    /**
     * Show the form for editing the specified empresas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empresas = $this->empresasRepository->findWithoutFail($id);

        if (empty($empresas)) {
            Flash::error('Empresas no encontrado');
            Alert::error('Empresas no encontrado');

            return redirect(route('empresas.index'));
        }

        return view('empresas.edit')->with('empresas', $empresas);
    }

    /**
     * Update the specified empresas in storage.
     *
     * @param  int              $id
     * @param UpdateempresasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateempresasRequest $request)
    {
        $empresas = $this->empresasRepository->findWithoutFail($id);

        if (empty($empresas)) {
            Flash::error('Empresas no encontrado');
            Alert::error('Empresas no encontrado');

            return redirect(route('empresas.index'));
        }

        $empresas = $this->empresasRepository->update($request->all(), $id);

        Flash::success('Empresas actualizado correctamente.');
        Alert::success('Empresas actualizado correctamente.');

        return redirect(route('empresas.index'));
    }

    /**
     * Remove the specified empresas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empresas = $this->empresasRepository->findWithoutFail($id);

        if (empty($empresas)) {
            Flash::error('Empresas no encontrado');
            Alert::error('Empresas no encontrado');

            return redirect(route('empresas.index'));
        }

        $this->empresasRepository->delete($id);

        Flash::success('Empresas borrado correctamente.');
        Flash::success('Empresas borrado correctamente.');

        return redirect(route('empresas.index'));
    }
    public function regoper(Request $request)
    {
      $input = $request->all();
      $operacion = new operaciones;
      $operacion->monto = $input['monto'];
      $operacion->empresa_id = $input['empresa_id'];
      $operacion->cuenta_id = $input['cuenta_id'];
      $operacion->tipo = $input['tipo'];
      $operacion->metpago = $input['metpago'];
      $operacion->concepto = $input['concepto'];
      $operacion->comentario = $input['comentario'];
      $operacion->save();

      //$empresas = $this->empresasRepository->create($input);

      Flash::success('Operación registrada correctamente.');
      Alert::success('Operación registrada correctamente.');

      return back();
    }

    public function pagocredito(Request $request)
    {
      $input = $request->all();
      dd($request);
      return 'Pago del credito';
    }
}
