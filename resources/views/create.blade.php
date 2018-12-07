@extends('layout')

@section('content')

    <menus-create-page inline-template>

        <div id="bigkahuna">

            <div class="flex items-center flex-wrap mb-3">
                <h1 class="w-full text-center mb-2 md:mb-0 md:text-left md:w-auto md:flex-1">Add new menu</h1>
            </div>

            <div class="card p-1">
                <div class="fieldset-builder">
                    <div class="form-group">
                        <label class="block">Menu name</label>
                        <input type="text" class="form-control mb-2" autofocus="autofocus" v-model="menuName">
                        <small class="help-block">The name will be converted to a slugified version that you'll use to reference in your templates (i.e. main-menu)</small>
                        <button type="button" class="btn btn-primary" v-on:click="saveMenu">Create menu</button>
                    </div>
                </div>
            </div>

        </div>

    </menus-create-page>

@endsection
