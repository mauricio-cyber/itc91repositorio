<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Nombre'), 'has-success': fields.Nombre && fields.Nombre.valid }">
    <label for="Nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.Nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Nombre'), 'form-control-success': fields.Nombre && fields.Nombre.valid}" id="Nombre" name="Nombre" placeholder="{{ trans('admin.producto.columns.Nombre') }}">
        <div v-if="errors.has('Nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Localizacion'), 'has-success': fields.Localizacion && fields.Localizacion.valid }">
    <label for="Localizacion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.Localizacion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Localizacion" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Localizacion'), 'form-control-success': fields.Localizacion && fields.Localizacion.valid}" id="Localizacion" name="Localizacion" placeholder="{{ trans('admin.producto.columns.Localizacion') }}">
        <div v-if="errors.has('Localizacion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Localizacion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Precio'), 'has-success': fields.Precio && fields.Precio.valid }">
    <label for="Precio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.Precio') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Precio" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Precio'), 'form-control-success': fields.Precio && fields.Precio.valid}" id="Precio" name="Precio" placeholder="{{ trans('admin.producto.columns.Precio') }}">
        <div v-if="errors.has('Precio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Precio') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Caducidad'), 'has-success': fields.Caducidad && fields.Caducidad.valid }">
    <label for="Caducidad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.Caducidad') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.Caducidad" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('Caducidad'), 'form-control-success': fields.Caducidad && fields.Caducidad.valid}" id="Caducidad" name="Caducidad" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('Caducidad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Caducidad') }}</div>
    </div>
</div>


