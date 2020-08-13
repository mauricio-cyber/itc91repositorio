@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.oferta.actions.edit', ['name' => $ofertum->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <oferta-form
                :action="'{{ $ofertum->resource_url }}'"
                :data="{{ $ofertum->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.oferta.actions.edit', ['name' => $ofertum->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.oferta.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </oferta-form>

        </div>
    
</div>

@endsection