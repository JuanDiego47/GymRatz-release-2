@extends ('layouts.admin')
@section('contenido')
<div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3">Información</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Nombre completo</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    Usuario
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Peso en Kg </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    83Kg
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Estatura</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    1.76 mt
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Test de fuerza maxima </h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    Pesos en Kg
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 content">
                        <h1 class="m-3">Objetivos</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Nombre de las metas </h5>
                                </div>
                                <div class="col-md-9 text-second">
                                    Descripcion de ejercicios
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="generarPDF">Generar PDF</button>
                </div>
            <button id="generarPDF">Generar PDF</button>

@stop