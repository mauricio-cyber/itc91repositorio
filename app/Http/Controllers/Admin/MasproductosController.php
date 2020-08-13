<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Masproducto\BulkDestroyMasproducto;
use App\Http\Requests\Admin\Masproducto\DestroyMasproducto;
use App\Http\Requests\Admin\Masproducto\IndexMasproducto;
use App\Http\Requests\Admin\Masproducto\StoreMasproducto;
use App\Http\Requests\Admin\Masproducto\UpdateMasproducto;
use App\Models\Masproducto;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MasproductosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexMasproducto $request
     * @return array|Factory|View
     */
    public function index(IndexMasproducto $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Masproducto::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            [''],

            // set columns to searchIn
            ['']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.masproducto.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.masproducto.create');

        return view('admin.masproducto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMasproducto $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreMasproducto $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Masproducto
        $masproducto = Masproducto::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/masproductos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/masproductos');
    }

    /**
     * Display the specified resource.
     *
     * @param Masproducto $masproducto
     * @throws AuthorizationException
     * @return void
     */
    public function show(Masproducto $masproducto)
    {
        $this->authorize('admin.masproducto.show', $masproducto);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Masproducto $masproducto
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Masproducto $masproducto)
    {
        $this->authorize('admin.masproducto.edit', $masproducto);


        return view('admin.masproducto.edit', [
            'masproducto' => $masproducto,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMasproducto $request
     * @param Masproducto $masproducto
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateMasproducto $request, Masproducto $masproducto)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Masproducto
        $masproducto->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/masproductos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/masproductos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyMasproducto $request
     * @param Masproducto $masproducto
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyMasproducto $request, Masproducto $masproducto)
    {
        $masproducto->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyMasproducto $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyMasproducto $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Masproducto::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
