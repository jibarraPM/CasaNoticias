@extends('../layout/' . $layout)

@section('subhead')
    <title>Caza Noticias - Agregar Noticia</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Agregar Noticia</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <div>
                    <label for="titulo" class="form-label">Título</label>
                    <input id="titulo" type="text" class="form-control w-full" placeholder="Ingrese título de noticia">
                </div>
                <div class="mt-3">
                    <label for="categorias" class="form-label">Categorías</label>
                    <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="categorias" multiple>
                        <option value="1" selected>Políticas</option>
                        <option value="2">Deportivas</option>
                        <option value="3" selected>Económicas</option>
                        <option value="4">Culturales</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="valoracion" class="form-label">Valoración</label>
                    <div class="input-group">
                        <input id="valoracion" type="number" class="form-control" placeholder="Ingrese un valor de 1 a 5" aria-describedby="input-group-1" max="5" min="1">
                        <div id="input-group-1" class="input-group-text"><i data-feather="star"></i></div>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="entrada" class="form-label">Entrada</label>
                    <div class="input-group">
                        <input id="entrada" type="text" class="form-control" placeholder="Ingrese los datos más relevantes de la noticia." aria-describedby="input-group-2">
                    </div>
                </div>
                <div class="mt-3">
                    <label>Estado</label>
                    <div class="mt-2">
                        <input type="checkbox" class="form-check-switch" id="estado">
                    </div>
                </div>
                <div class="mt-3">
                    <label>Cuerpo</label>
                    <div class="mt-2">
                        <div data-simple-toolbar="true" class="editor">
                            <p>Ingrese el cuerpo de la noticia.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="cierre" class="form-label">Cierre</label>
                    <div class="input-group">
                        <input id="cierre" type="text" class="form-control" placeholder="Ingrese ideas secundarias o información suplementaria." aria-describedby="input-group-2">
                    </div>
                </div>
                <div class="mt-3">
                    <div class="intro-y box mt-5">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                            <h2 class="font-medium text-base mr-auto">Subir Archivos</h2>
                        </div>
                        <div id="multiple-file-upload" class="p-5">
                            <div class="preview">
                                <form action="/file-upload" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple/>
                                    </div>
                                    <div class="dz-message" data-dz-message>
                                        <div class="text-lg font-medium">Suelta los archivos aquí o haz clic para subirlos.</div>
                                        <div class="text-gray-600">
                                            Esta es solo una zona de lanzamiento de demostración. Los archivos seleccionados son <span class="font-medium">son</span> realmente subidos.
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="source-code hidden">
                                <div class="overflow-y-auto mt-3 rounded-md">
                                    <pre id="copy-multiple-file-upload" class="source-preview">
                                        <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                            {{ \Hp::formatCode('
                                                <form action="/file-upload" class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple/>
                                                    </div>
                                                    <div class="dz-message" data-dz-message>
                                                        <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                        <div class="text-gray-600">
                                                            This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                                        </div>
                                                    </div>
                                                </form>
                                            ') }}
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancelar</button>
                    <button type="button" class="btn btn-primary w-24">Agregar</button>
                </div>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection
