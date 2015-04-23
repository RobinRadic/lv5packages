<?php namespace LaradicAdmin\Attributes\Http\Controllers;

use App\Http\Requests;
use Datatable;
use Input;
use Laradic\Admin\Http\Controllers\Controller;
use LaradicAdmin\Attributes\Contracts\FieldTypes;
use LaradicAdmin\Attributes\Models\Attribute;
use LaradicAdmin\Attributes\Repositories\EloquentAttributeRepository;
use Response;

class AttributesController extends Controller
{

    protected $repository;

    /** @var \LaradicAdmin\Attributes\FieldTypes\Factory */
    protected $fieldTypes;

    public function __construct(FieldTypes $fieldTypes, EloquentAttributeRepository $repository)
    {
        $this->fieldTypes = $fieldTypes;
        $this->repository = $repository;
    }

    public function view()
    {

        return view('laradic-admin/attributes::index')->with(
            [
                'fieldTypes' => $this->fieldTypes
            ]
        );
    }

    public function fieldType()
    {
        $id        = Input::get('id');
        $fieldType = $this->repository->getById($id)->getFieldType();

        $options   = [ ];
        foreach ( $fieldType->options() as $name => $data )
        {
            $options[ $name ] = view('field-types::options.' . $name)->with($data)->render();
        }

        return Response::json($options);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $collection = Datatable::collection(
            Attribute::all([ 'id', 'slug', 'label', 'field_type', 'description', 'enabled' ])
        );

        return $collection
            ->showColumns('id', 'slug', 'label', 'field_type', 'description', 'enabled')
            ->searchColumns('slug', 'label', 'description')
            ->orderColumns('id', 'slug', 'label', 'field_type', 'description', 'enabled')
            ->setAliasMapping()
            ->make();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $attribute = $this->repository->getById($id);

        return Response::json($attribute);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
